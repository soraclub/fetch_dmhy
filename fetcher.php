<?php

class Fetcher
{
    private $api = 'https://share.dmhy.org/topics/list?keyword=%s';
    private $host = 'https://share.dmhy.org';

    private $parfailCur = array();
    private $parfailPass = array();

    public function __construct()
    {/*{{{*/
        $fileToHash = function($fname){
            if (!is_file($fname)) return array();
            $arr = file($fname);
            $arr = array_map('trim', $arr);
            $arr = array_filter($arr);
            $hash = array_flip($arr);
            return $hash;
        };
        $this->parfailPass = $fileToHash(PARFAIL_PASS);
        $this->parfailCur  = $fileToHash(PARFAIL_CUR);
    }/*}}}*/

    public function passDdos()
    {/*{{{*/
        $html = $this->fetchHtml($this->host);
        //是否需要穿ddos验证
        if (preg_match('|<title>Just a moment\.\.\.</title>|i', $html) < 1)
        {
            return ;
        }
        //check query
        $url = $this->host.$this->parseChallengeForm($html);
        echo "need pass Ddos check. sleep 4 sec\n";
        sleep(4);
        $this->fetchHtml($url);
    }/*}}}*/
    public function getTorrent($query, $torrentPrefix, $curEp, $epPat, $timeBeginFrom)
    {/*{{{*/
        $url = sprintf($this->api, rawurlencode($query));

        //get list 
        $content = $this->fetchHtml($url);

        //parse list
        //table body
        if (preg_match('|<tbody>(.+?)</tbody>|iums', $content, $match) < 1)
        {
            echo "match tbody fail\n";
            return false;
        }
        $tbody = $match[1];
        //tr
        if (preg_match_all('|<tr\s+class="">\s*<td[^>]+>([^<]+)<.+?<td\s+class="title">.+?<a\s+href="([^"]+?view[^"]+?)".+?>(.+?)</a>.+?</tr>|iums', $tbody, $match) < 1)
        {
            echo "match all tr fail\n";
            return false;
        }
        //fetch
        $maxEpNum = 0;
        $uri_names = array_map(function($uri, $name, $pubTime){
                $name = strip_tags(trim($name));
                $pubTime = str_replace(['今天', '昨天'], ['today','yesterday'], $pubTime);
                $pubTime = strtotime(trim($pubTime));
                return compact('uri', 'name', 'pubTime'); 
                }, $match[2], $match[3], $match[1]);

        //多种数字摘取
        $epPats = [
            '(第(?:\d+-)?([.\d]+)(?: ?v\d| ?END)?话)iumsS',
            '(第(?:\d+-)?([.\d]+)(?: ?v\d| ?END)?話)iumsS',
            '(\[(?:\d+-)?([.\d]+)(?: ?v\d| ?END)?\])iumsS',
        ];
        if (!empty($epPat))
        {
            $epPat = str_replace('()', '([.\d]+)', $epPat);
            $epPat = "($epPat)iums";
            $epPats[] = $epPat;
        }

        foreach ($uri_names as $uri_name)
        {
            $uri = $uri_name['uri'];
            $name = $uri_name['name'];
            $name = str_replace(array('|', '\\', '/'), '_', $name);
            $pubTime = $uri_name['pubTime'];

            //pick ep num
            $_foundEp = false;
            foreach ($epPats as $_pat)
            {
                if (preg_match($_pat, $name, $match) > 0)
                {
                    $epNum = $match[1];
                    $_foundEp = true;
                    break;
                }
            }
            if (!$_foundEp)
            {
                echo "【！】parse ep num fail of #$name#\n";
                !isset($this->parfailPass[$name]) && !isset($this->parfailCur)
                    && ($this->parfailCur[$name] = 1)
                    && error_log($name."\n", 3, PARFAIL_CUR);
                continue;
            }

            //check pub time
            if ($pubTime < $timeBeginFrom)
            {
//                echo "time limit fail of #$name#\n";
                continue;
            }
            //check ep num
            if ($epNum <= $curEp)
            {
//                echo "no need. req ep > $curEp, thisEp:$epNum, of #$name#\n";
                continue;
            }
            //fetch torrent
            $rst = $this->pickTorrent($uri, $torrentPrefix.'_'.$epNum);
//            echo "=-=-=\n";
            echo "【GET TORRENT】【 $epNum 】【 $torrentPrefix 】【 RST:$rst 】\n";
//            echo "=-=-=\n";

            $rst === true && $epNum > $maxEpNum && $maxEpNum = $epNum;
        }
        return $maxEpNum;
    }/*}}}*/
    private function pickTorrent($uri, $name = '')
    {/*{{{*/
        $url = $this->host . $uri;

        $content = $this->fetchHtml($url);

        if (preg_match('|class="dis">.+?<a\s+href="(.+?\.torrent)"|iums', $content, $match) < 1)
        {
            echo "parse torrent link fail \n";
            return false;
        }
        $tLink = $match[1];
        if (strpos($tLink, '//') === 0)
        {
            $tLink = 'http:' . $tLink;
        }
//        error_log($tLink."\n", 3, TORRENT_URLS);
        $cmd =sprintf("wget '%s' -O %s", $tLink, $name.'.torrent'); 
        exec($cmd, $return, $status);
        if ($status === 0)
        {
            system("touch {$name}.torrent");
            return true;
        }
        else
        {
            return false;
        }
    }/*}}}*/
    
    //穿ddos
    private function parseChallengeForm($html)
    {/*{{{*/
        preg_match('|<form id="challenge-form"[^>]+>.+?</form>|ims', $html, $match);
        $form = $match[0];

        $xml = simplexml_load_string($form);
        $arr = json_decode(json_encode($xml), true);
        //action
        $action = $arr['@attributes']['action'];
        //input
        $params = [];
        foreach ($arr['input'] as $in)
        {
            $key = $in['@attributes']['name'];
            $val = $in['@attributes']['value'];
            $params[$key] = $val;
        }
        $params['jschl_answer'] = $this->calcJschlAnswer($html);

        return $action.'?'.http_build_query($params);
    }/*}}}*/
    private function calcJschlAnswer($html)
    {/*{{{*/
        preg_match('|<script type="text/javascript">(.+?)</script>|ims',  $html, $match);
        $js = $match[1];
        preg_match('|setTimeout\(function\(\){(.+?)f\.submit\(\)|ims', $js, $match);
        $js = $match[1];

        $lines = explode("\n", trim($js));

        $code[] = preg_replace('|[a-z],|', '', $lines[0]);
        $code[] = 'var a,t="share.dmhy.org";';
        $_tmp = end($lines);
        $code[] = preg_replace(['|a\.value|', "|'[^']+'|"], ['a', ''], trim($_tmp));
        $code[] = 'console.log(a);';

        $codes = implode("\n", $code);
        $cmd = "echo '$codes' | node";
        exec($cmd, $out, $ret);
        return $out[0];
    }/*}}}*/
    private function fetchHtml($url)
    {/*{{{*/
        $headers = [
                'Host: share.dmhy.org',
                'Proxy-Connection: keep-alive',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Upgrade-Insecure-Requests: 1',
                'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36',
                'Referer: https://share.dmhy.org/',
                'Accept-Encoding: deflate',
                'Accept-Language: zh-CN,zh;q=0.8,en;q=0.6,ja;q=0.4,zh-TW;q=0.2',
                //'Cookie: __cfduid=d367b6c5ea2e5e2db286b240e1bdcaa2a1490766967; cf_clearance=879bb1b6eb913304e1fefd0ae324287510cf1e66-1490766971-604800',
                ];

        $cmd = sprintf('curl -s "%s"', $url);
        foreach ($headers as $header)
        {
            $cmd .= " -H'$header'";
        }
        //COOKIE里放着 穿DDos check的cookie
        $cmd .= sprintf(' -c %1$s -b %1$s', COOKIE_FILE);
        exec($cmd, $out, $status);
        return implode("\n", $out);
    }/*}}}*/
}

//$dir = "test";
//is_dir($dir) || mkdir($dir, 0777);
//$fetcher = new Fetcher();
//
//$fetcher->getTorrent('OVERLORD SP 简体 MP4 team_id:303', $dir.'/overload_sp', 5, '\[SP()\]');

