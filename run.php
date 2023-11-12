<?php
define('PRJ_HOME', dirname(__FILE__));
require (PRJ_HOME.'/fetcher.php');
$animes = require(PRJ_HOME. '/down_list.php');

define ('PARFAIL_CUR', 'parsefail/cur.list');
define ('PARFAIL_PASS', 'parsefail/pass.list');

$dir = PRJ_HOME. '/'. date("Y-m-d");
is_dir($dir) || mkdir($dir, 0777);
define ('TORRENT_URLS', $dir.'/torrent_url.txt');
define ('COOKIE_FILE', PRJ_HOME.'/cookies.ign');

$fetcher = new Fetcher();

//$r = $fetcher->passDdos();


$beginAt = date('Y-m-d H:i:s');
$doneFile = 'cur_turn_ok.list';
$doneArr = array();
if (is_file($doneFile))
{
    $doneArr = array_flip(array_map('trim', file($doneFile)));
}

foreach ($animes as $name => $conf)
{
    echo "\n\n<====== $name start ========\n";
    if (isset($doneArr[$name]))
    {
        echo "\n====== last turn done =====\n\n";
        continue;
    }
    $query = $conf['query'];
    $prefix = $dir.'/'.$name;
    $epNumFile = isset($conf['ep_num_file']) ? $conf['ep_num_file'] : "epnum/$name";
    $lastEp = 0;
    if (is_file($epNumFile))
    {
        $lastEp = (float)trim(file_get_contents($epNumFile));
    }
    $epPat = $conf['ep_pat'] ?? null;
    $timeBeginFrom = isset($conf['begin_from'])? strtotime($conf['begin_from']) : 0;
    //$curEp = $fetcher->getTorrent($query, $prefix, $lastEp, $epPat, $timeBeginFrom);
    $curEp = $fetcher->getMagnet($query, $prefix, $lastEp, $epPat, $timeBeginFrom);
    if ($curEp > $lastEp)
    {
        file_put_contents($epNumFile, $curEp);
    }
    echo "\n====== $name done. get $curEp ========>\n";
    error_log($name."\n", 3, $doneFile);
}


echo "\n*-*-*-*-*- 【new gets】 *-*-*-*-*-*-*-*\n";
$cmd = "find $dir -type f -newermt '$beginAt' -exec basename {} \;";
system($cmd);
unlink($doneFile);

if (is_file(PARFAIL_CUR))
{
    echo "\n\n-+-+-+-+- 【parse fail】 +-+-+-+-+-+-+\n";
    $cmd = "cat ".PARFAIL_CUR;
    system($cmd);
}


