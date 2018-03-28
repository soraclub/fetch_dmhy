<?php


$s201801 = array
(
 //差土 日 月
    '粗点心战争2' => array(
        'query' => '粗點心 2 team_id:669 简日',
        ),
    '爆肝工程师的异世界狂想曲_mm' => array(
        'query' => '界狂 team_id:669 GB',
        ),
    '紫罗兰永恒花园' => array(
        'query' => '紫羅蘭 team_id:303 1080P 简体',
        ),
    '齐木楠雄的灾难2' => array(
        'query' => '齊木楠雄 team_id:434 第二季 720P 简体',
        ),
    'Overlord2' => array(
        'query' => 'Overlord II team_id:663 简体',
        ),
    '博多豚骨拉面' => array(
        'query' => '博多 team_id:663 简体',
        ),
    '没有心跳的少女' => array(
        'query' => 'BEATLESS team_id:303 简体 720P',
        ),
    '牙斗少女' => array(
        'query' => '牙鬥 team_id:669 BIG5',
        ),
);


$s201710 = array
(/*{{{*/
    '黑色五叶草' => array(
        'query' => '五葉草 team_id:651',
        ),
    'Gintama' => array(
        'query' => 'Gintama  720P_简中 team_id:117',//lac
        'ep_num_file' => 'epnum/gintama.txt',
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
);/*}}}*/
$slong= array
(/*{{{*/
    'Gintama' => array(
        'query' => 'Gintama  720P_简中 team_id:117',//lac
        'ep_num_file' => 'epnum/gintama.txt',
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '妖精的尾巴' => array(
        'query' => 'FAIRY TAIL  BIG5 1280x720 MP4 team_id:88',
        'ep_num_file' => 'epnum/fairy_tail',
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
);/*}}}*/

return array_merge($s201710, $s201801);

$s201801_done = array
(/*{{{*/
    '龙王的工作' => array(
        'query' => '龍王的 team_id:303 简体',
        ),
    '魔法使的新娘' => array(
        'query' => '魔法使 新娘 team_id:303 简体 720P',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '擅长捉弄的高木同学' => array(
        'query' => '擅长捉弄 team_id:303 720P 简体',
        ),
);/*}}}*/
$s201710_done = array
(/*{{{*/
    'Fate_Apocrypha' => array(
        'query' => 'Apocrypha team_id:58',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?话',//()表示([.\d]+)
        ),
    '奇诺之旅2017' => array(
        'query' => '奇諾 team_id:468 简体',
        ),
    '血界战线' => array(
        'query' => '血界 BEYOND team_id:663 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '干物妹2' => array(
        'query' => '干物妹 team_id:185 720P',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '食戟之灵3_ktxp' => array(
        'query' => '食戟 team_id:185 GB san',
        ),
    '此花亭奇谭' => array(
        'query' => '此花 team_id:679 GB',
        ),
    '国王游戏' => array(
        'query' => '國王遊戲 team_id:141',
        ),
    'URAHARA' => array(
        'query' => 'URAHARA team_id:669 GB 720P',
        ),
    '动画同好会' => array(
        'query' => '動畫同好 team_id:669 GB 720P',//lac
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '少女终末旅行' => array(
        'query' => '女終 team_id:468 简体',
        ),
    'JustBecause' => array(
        'query' => 'Just Because team_id:303 简体',
        ),
    '品酒要在成为夫妻后' => array(
        'query' => '品酒要在 team_id:407',
        ),
    '调教咖啡厅' => array(
        'query' => '調教咖 team_id:321',
        'ep_pat' => '\[第(?:\d+-)?()(?:v\d| ?END)?话\]',//()表示([.\d]+)
        ),
    '犬屋敷' => array(
        'query' => '犬屋敷 team_id:241 GB',
        ),
    '宝石之国' => array(
        'query' => '寶石之國 team_id:407',
        ),
    '关于我女友是个正经' => array(
        'query' => '女友是 team_id:468 简体',
        ),
    '十二大战' => array(
        'query' => '十二大战 team_id:185 GB 720P',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?话',//()表示([.\d]+)
        ),
    '如果有妹妹就好了' => array(
        'query' => '有妹妹 team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
);/*}}}*/
$s201707_done = array
(/*{{{*/
    '战姬绝唱AXZ' => array(
        'query' => '戰姬 AXZ team_id:679 GB 720P',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '来自深渊' => array(
        'query' => '自深淵 team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '天使的3P' => array(
        'query' => '天使的3P team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '带着智能手机闯荡异世界' => array(
        'query' => '手機闖 team_id:58',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?话',//()表示([.\d]+)
        ),
    'bcy我的英雄学院2' => array(
        'query' => '英雄學院 team_id:663 S2 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    'NEW_GAME_2_LK' => array(
        'query' => 'NEW GAME team_id:321',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        'begin_from' => '2017-07-10',
        ),
    '狂赌之渊' => array(
        'query' => '狂赌之渊 team_id:468 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '正确的卡多' => array(
        'query' => '正确的Kado team_id:37 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '徒然喜欢你' => array(
        'query' => '徒然喜 team_id:407',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END| ?完)?\]',//()表示([.\d]+)
        ),
    '裙子里面是野兽' => array(
        'query' => '裙子里面是野兽 team_id:669 WebRip FLAC',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '骑士魔法' => array(
        'query' => '騎士 魔法 team_id:47 简体',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?话',//()表示([.\d]+)
        ),
    '欢迎来到实力至上主义的教室' => array(
        'query' => '實力至上 team_id:88 BIG5',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '电玩咖' => array(
        'query' => 'Gamers 電玩 team_id:241 GB',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '雏逻辑' => array(
        'query' => '雛邏輯 team_id:468 简体',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '异世界食堂' => array(
        'query' => '異世界食堂 team_id:651',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?集',//()表示([.\d]+)
        ),
    '笨女孩' => array(
        'query' => '笨女孩 team_id:37',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '战斗女子学园' => array(
        'query' => '戰鬥 子學 team_id:669 GB',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '第一次的辣妹' => array(
        'query' => '第一次的 gal GB team_id:241',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '捏造陷阱NTR' => array(
        'query' => '捏造陷阱 team_id:407',
        'ep_pat' => '\[(?:\d+-)?()(?: ?v\d| ?完)?\]',//()表示([.\d]+)
        //'begin_from' => '2017-07-01',
        ),
);/*}}}*/
$s201704_done = array
(/*{{{*/
    '樱花任务HY' => array(
        'query' => 'sakura quest team_id:241 GB',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '巴哈姆特之怒' => array(
        'query' => '巴哈姆特 Virgin team_id:117 720P',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END|_?完)?\]',//()表示([.\d]+)
        ),
    'RE_Creators_豌豆' => array(
        'query' => 'Re Creators team_id:434 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '怪怪守护神' => array(
        'query' => '怪怪守护神 team_id:283 MP4 PC',
        'ep_pat' => '\[第(?:\d+-)?()(?:v\d| ?END)?話\]',//()表示([.\d]+)
        ),
    '地下城剑姬传' => array(
        'query' => '劍姬神聖 team_id:658 GB 720P',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '青春歌舞伎' => array(
        'query' => '青春歌 team_id:651',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?回',//()表示([.\d]+)
        ),
    '从零开始的魔法书' => array(
        'query' => '從零開始的魔法書 team_id:568 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '喧哗番长' => array(
        'query' => '喧嘩 team_id:241 GB',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '末日时在做什么' => array(
        'query' => '末日時 team_id:425 GB',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
        ),
    '恋爱暴君' => array(
        'query' => '愛暴 team_id:185 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '有顶天家族2' => array(
        'query' => '有顶天家族2 team_id:321 GB',
        'ep_pat' => '\[第(?:\d+-)?()(?:v\d| ?END)?话\]',//()表示([.\d]+)
        ),
    '碧蓝幻想n' => array(
        'query' => '碧蓝幻想 team_id:37 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '爱丽丝与藏六' => array(
        'query' => '與藏六 team_id:117',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '我的妹妹是黄漫老师' => array(
        'query' => '黄漫老师 team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '不正经的魔术讲师' => array(
        'query' => '不正經 team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '武装少女' => array(
        'query' => '武裝 Machi team_id:185 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '时钟机关之星' => array(
        'query' => '機關之星 team_id:58 MP4',
        'ep_pat' => '第(?:\d+-)?()(?:v\d| ?END)?话',//()表示([.\d]+)
        ),
    '雏子的笔记' => array(
        'query' => '雛子 team_id:407',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?完)?\]',//()表示([.\d]+)
        ),
    '路人女主的养成方法2' => array(
        'query' => '路人女主的养成方法 team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        'begin_from' => '2017-04-07',
        ),
    '快盗天使双胞胎' => array(
        'query' => '快盜天使 break team_id:669 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
);/*}}}*/
$s201701_done = array
(/*{{{*/
    '小林家的女仆龙' => array(
        'query' => '小林家的女仆龙 team_id:185 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '人渣的本愿' => array(
        'query' => '人渣的本 team_id:407',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?完)?\]',//()表示([.\d]+)
        ),
    '秋叶原之旅' => array(
        'query' => '秋葉原之旅 简 team_id:502',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'ChaosChild' => array(
        'query' => 'Chaos Child 简体 team_id:303',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '落语中心助六再现' => array(
        'query' => '助六 team_id:141',
        'ep_pat' => '【第()话】',//()表示([.\d]+)
        ),
    '幼女战记' => array(
        'query' => '幼女战记 简体 team_id:423',
        'ep_pat' => '\[(?:\d+-)?([\d\.]+)(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    'Urara迷路帖' => array(
        'query' => '迷路帖 team_id:321 GB',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    'OneRoom' => array(
        'query' => 'One Room team_id:303 简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '青之驱魔师京都不净王篇' => array(
        'query' => '青之 京都 team_id:423 简体',
        'ep_pat' => '\[(?:\d+-)?([\d\.]+)(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '废天使加百列dmg' => array(
        'query' => '加百列 team_id:303 简体',
        'ep_pat' => '\[(\d+|ova)(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '亚人酱有话说' => array(
        'query' => '亞人醬 team_id:303  简体',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    '为美好的世界献上祝福2' => array(
        'query' => '献上祝福 第2季 team_id:303 简体 720P MP4',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '风夏' => array(
        'query' => '風夏 team_id:407',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?完)?\]',//()表示([.\d]+)
        ),
    '政宗君的复仇' => array(
        'query' => '政宗君的复仇 team_id:303 简体 720P',
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| ?END)?\]',//()表示([.\d]+)
        ),
    'Rewrite' => array(
        'query' => 'Rewrite team_id:58',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '黑白來看守所' => array(
        'query' => '黑白來看守所 team_id:651',//DMG
        'ep_pat' => '【第()集】',//()表示([.\d]+)
        ),
    '清恋' => array(
        'query' => 'Seiren team_id:425 GB',
        'ep_pat' => '【(?:\d+-)?()(?:v\d| ?END)?】',//()表示([.\d]+)
    ),
);/*}}}*/
$s201610_done = array
(/*{{{*/
    '双星之阴阳师' => array(
        'query' => '双星之阴阳师 GB team_id:90',//DMG
        'ep_pat' => '\[(?:\d+-)?()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '少年侦探团' => array(
        'query' => '江户川乱步 少年侦探团 team_id:185 GB',//DMG
        'ep_pat' => '【(?:[\dv]+-)?()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '文豪野犬' => array(
        'query' => '文豪野犬 GB team_id:321',//OK轻之国度
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '少女编号' => array(
        'query' => '少女编号 繁体 MP4 team_id:407',//DMG
        'ep_pat' => '\[()(?:v\d| END|完)?\]',//()表示([.\d]+)
        ),
    '博纳的小姐说' => array(
        'query' => '伯納德 GB team_id:185',//OK轻之国度
        'ep_pat' => '\[()(?:_v\d|END)?\]',//()表示([.\d]+)
        ),
    '太受欢迎了怎么办' => array(
        'query' => '我太受欢迎了该怎么办 team_id:88',//DMG
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '乌冬面之国的金色毛球' => array(
        'query' => '乌冬面之国 team_id:185 GB',//DMG
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '魔法少女育成计划' => array(
        'query' => '魔法少女育成计划 team_id:58 720P',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '魔法少女什么的已经够了2' => array(
        'query' => '魔法少女什么的已经够了 第二季 team_id:283',//DMG
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '夏目友人帐5' => array(
        'query' => '夏目 第五季 team_id:425 GB',//DMG
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '老婆是学生会长！' => array(
        'query' => '我老婆是学生会长! team_id:185 GB',//DMG
        'ep_pat' => '\[()(?:v\d|END)?\]',//()表示([.\d]+)
        ),
    'www.working' => array(
        'query' => 'www WORKING team_id:407',//DMG
        'ep_pat' => '\[()(?:v\d| END|完)?\]',//()表示([.\d]+)
        ),
);/*}}}*/
$s201607_done = array
(/*{{{*/
    '齐木楠雄的灾难' => array(
        'query' => '齐木楠雄的灾难 team_id:434 简体',//
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '三圣星' => array(
        'query' => 'Regalia|三聖星 team_id:283',//
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '逆转裁判' => array(
        'query' => '逆转裁判 MP4 720P team_id:58',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '时间旅行少女' => array(
        'query' => '时间旅行少女 team_id:425 GB',//
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '境界之轮回2' => array(
        'query' => '境界之轮回 第二季 team_id:185 GB',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '路人超能' => array(
        'query' => '超能100|靈能 team_id:185 GB',//
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '圣洁天使' => array(
        'query' => '圣洁天使 team_id:283',//
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '这个美术社大有问题' => array(
        'query' => '美術 問題 team_id:303 简体',//
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    'qulidea_code' => array(
        'query' => 'Qualidea Code team_id:303 简体',//
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    'Rewrite' => array(
        'query' => 'Rewrite team_id:58',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '食戟之灵2' => array(
        'query' => '食戟 二之皿 team_id:49',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '天真与闪电' => array(
        'query' => '天真与闪电 team_id:185 GB',//
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '剑风传奇' => array(
        'query' => '剑风传奇 team_id:88',//
        'ep_pat' => '【()(?:v\d| END)?】',//()表示([.\d]+)
        ),
    '魔法少女伊莉雅3' => array(
        'query' => 'Liner|莉雅 3rei team_id:58 MP4',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'new_game' => array(
        'query' => 'NEW GAME team_id:58',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'reLife' => array(
        'query' => 'ReLIFE team_id:303 简体',//
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '星之梦' => array(
        'query' => 'planetarian team_id:58',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
);/*}}}*/
$s201604_done = array
(/*{{{*/
    '从零开始的异世界生活' => array(
        'query' => '从零开始的异世界生活 繁体  team_id:407',//DMG
        'ep_pat' => '\[()(?:v\d|\w?END)?\]',//()表示([.\d]+)
        ),
    '三者三叶' => array(
        'query' => '三者三叶 team_id:58',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'Unhappy' => array(
        'query' => 'Unhappy GB team_id:321',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '少年女仆' => array(
        'query' => '少年女仆 GB team_id:544',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '田中同学如此慵懒' => array(
        'query' => '田中同学总是如此慵懒 MP4 team_id:58',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '至高指令' => array(
        'query' => '至高指令 GB team_id:90',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '线上游戏的老婆不可能是女生' => array(
        'query' => '线上游戏的老婆 GB 720P  team_id:90',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '甲铁城的炼尸' => array(
        'query' => '甲鐵城 简体 team_id:58',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '迷家' => array(
        'query' => '迷家 简体 team_id:303',
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '学战都市' => array(
        'query' => '学战都市 简体 MP4  team_id:303',//DMG
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '飞翔的魔女' => array(
        'query' => '飛翔的魔女 简体 team_id:303',//DMG
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '暗杀教室2' => array(
        'query' => '"Ansatsu Kyoushitsu 2" team_id:185 BIG5',//KTXP
        'ep_pat' => '【()(?:v\d)?】',//()表示([.\d]+)
        ),
    '在下坂本' => array(
        'query' => '在下坂本 GB team_id:430',
        'ep_pat' => '-\s*()(?: END)?\[',//()表示([.\d]+)
        ),
);/*}}}*/
$s201601_done = array
(/*{{{*/
    '大叔与果汁软糖' => array(
        'query' => '叔與 team_id:348 繁体 720p',//LK
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '少女向荒野进发' => array(
        'query' => '野進 team_id:58 mp4 720p',//sumisora
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '血型君4' => array(
        'query' => '"血型君4" team_id:88 BIG5',//
        'ep_pat' => '【()(?:v\d)?】',//()表示([.\d]+)
        ),
    '历物语ktxp' => array(
        'query' => '历物语 team_id:185 BIG5',//KTXP
        'ep_pat' => ' () BIG',//()表示([.\d]+)
        ),
    '粗点心战争' => array(
        'query' => '心戰爭 team_id:185 BIG5 720p',//KTXP
        'ep_pat' => '第()(?:話|话)',//()表示([.\d]+)
        ),
    '最弱无败神装机龙' => array(
        'query' => '最弱無 team_id:303 简体',//DMG
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '命运九重奏' => array(
        'query' => '九重奏 team_id:271 简体 720',//DMG
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '无彩限的怪灵世界' => array(
        'query' => '無彩限 team_id:303 简体 720P',//DMG
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '苍之彼方的四重奏' => array(
        'query' => '蒼之彼方 team_id:58 mp4 720p',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '死亡黑标' => array(
        'query' => '黑標 team_id:90  BIG5',//
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '房东妹子青春期' => array(
        'query' => '房東 青春 team_id:58 720p',//
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '舞武器' => array(
        'query' => '舞亂 team_id:90 BIG5',//KTXP
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '妖精的尾巴Zero' => array(
        'query' => 'FAIRY ZER team_id:88 BIG5 720',//KTXP
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '百无禁忌私房话' => array(
        'query' => '無禁 team_id:321 BIG5',//KTXP
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '只有我不存在的城市' => array(
        'query' => '有我不 team_id:321 BIG5 720p',//LK
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '无彩限的怪灵世界' => array(
        'query' => '無彩限 team_id:303 简体 720P',//DMG
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
    '魔法少女什么的已经够了' => array(
        'query' => '魔法少女什么的已经够了 team_id:283',//DMG
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '为美好的世界献上祝福' => array(
        'query' => '献上祝福 team_id:303 简体 720P MP4',//DMG
        'ep_pat' => '\[()(?:v\d)?\]',//()表示([.\d]+)
        ),
);/*}}}*/
$s201510_done = array
(/*{{{*/
    '红壳的潘多拉' => array(
        'query' => '紅殻|紅殼 team_id:303 繁体',//
        'ep_pat' => '\[()(?:v\d| END)?\]',//()表示([.\d]+)
        ),
    '传颂之物虚假的面具' => array(
        'query' => '传颂之物 虚假的面具 mp4 720p team_id:58',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'JK饭' => array(
        'query' => 'JK Meshi BIG5 team_id:425',
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    'Lance_N_Masques' => array(
        'query' => 'Lance N Masques GB team_id:90',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '女武神驱动' => array(
        'query' => 'Valkyrie Drive GB team_id:430',//DMG
        'ep_pat' => '-\s+()',//()表示([.\d]+)
        ),
    '终物语' => array(
        'query' => '终物语 GB MP4_720P team_id:185',//DMG
        'ep_pat' => '物语 () GB',//()表示([.\d]+)
        ),
    '超人幻想' => array(
        'query' => '超人幻想 GB MP4  team_id:532',
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '庶民样本' => array(
        'query' => '庶民样本 GB 720P mp4 team_id:321',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '樱子小姐脚下埋着尸体' => array(
        'query' => '樱子小姐的脚下 GB team_id:90',//EMD
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '全部成为F' => array(
        'query' => '全部成为F GB team_id:425',
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '箱根酱' => array(
        'query' => '箱根酱 MP4 team_id:58',//DMG
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '野良神2' => array(
        'query' => 'Noragami aragoto GB team_id:241',
        'ep_pat' => '【()(?:v\d)?】',//()表示([.\d]+)
        ),
    '绯弹的亚里亚AA' => array(
        'query' => '绯弹的亚 AA 简体 team_id:303',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '35试验小队' => array(
        'query' => '35试验小队 简体 720P mp4 team_id:434',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '学战都市' => array(
        'query' => '学战都市 简体 MP4  team_id:303',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '落地骑士英雄谭' => array(
        'query' => '落第骑士英雄 简体 MP4 team_id:303',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '摇曳百合3' => array(
        'query' => '摇曳百合 第3季 简体 MP4 team_id:303',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '一拳超人' => array(
        'query' => '一拳超人 简体 MP4 720P team_id:303',//DMG
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '新妹魔王的契约者Burst' => array(
        'query' => '新妹魔王的契约者 BURST  简体 team_id:407',
        'ep_pat' => '\[()(?: END|完)?\]',//()表示([.\d]+)
        ),
    '魔鬼恋人MoreBlood' => array(
        'query' => '魔鬼恋人 MORE GB_MP4 720 team_id:241',
        'ep_pat' => '【()(?:v\d|[ _]END)?】',//()表示([.\d]+)
        ),
);/*}}}*/
$s201507_done = array
(/*{{{*/
    '干物妹' => array(
        'finish' => 1,
        'query' => '干物妹小埋 720P 简体 team_id:303',//DMG
        'ep_num_file' => 'epnum/k_干物妹小埋',
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    '迷糊餐厅3' => array(
        'finish' => 1,
        'query' => '迷糊餐厅 720P mp4 team_id:303',//DMG
        'ep_num_file' => 'epnum/m_迷糊餐厅3.txt',
        'ep_pat' => '\[()\]',//()表示([.\d]+)
        ),
    'overlord_sp' => array(
        'finish' => 1,
        'query' => 'OVERLORD SP 简体 MP4 team_id:303',
        'ep_num_file' => 'epnum/overlord_sp',
        'ep_pat' => '\[SP()\]',//()表示([.\d]+)
        ),
    '那就是声优' => array(
        'finish' => 1,
        'query' => '那就是声优 GB 720P  team_id:185',//ktxp
        'ep_num_file' => 'epnum/sore_ga_seiyu.txt',
        'ep_pat' => '【()(?: END)?】',//()表示([.\d]+)
        ),
    'overlord' => array(
        'finish' => 1,
        'query' => 'OVERLORD 简体 MP4 team_id:303',//DMG
        'ep_num_file' => 'epnum/overlord',
        'ep_pat' => '\[()(?: END)?\]',//()表示([.\d]+)
        ),
    'i_am' => array(
        'finish' => 1,
        'query' => '兔子 其实我是 简体',//轻之国度
        'ep_num_file' => 'epnum/i_am.txt',
        'ep_pat' => '【()】',//()表示([.\d]+)
        ),
    '学园孤岛' => array(
        'finish' => 1, 
        'query' => '学园孤岛 MP4   team_id:288',
        'ep_num_file' => 'epnum/x_学园孤岛',
        'ep_pat' => '\[(?:\d+-)?()\]',//()表示([.\d]+)
        ),
    '城下町的蒲公英' => array(
        'finish' => 1,
        'query' => '城下町的蒲公英 Mp4 720P team_id:58',//Sumisora
        'ep_num_file' => 'epnum/c_蒲公英',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '群居姐妹' => array(
        'finish' => 1,
        'query' => '群居姐妹 GB MP4 team_id:430',//DMG
        'ep_num_file' => 'epnum/q_群居姐妹',
        'ep_pat' => '- ()(?:\[| )',//()表示([.\d]+)
        ),
    '食戟之灵' => array(
        'finish' => 1,
        'query' => '食戟之灵 MP4 720P team_id:58',// 华盟澄空
        'ep_num_file' => 'epnum/s_食戟之灵',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '若叶女孩' => array(
        'finish' => 1,
        'query' => '若叶女孩 MP4 720P team_id:58',// 华盟澄空
        'ep_num_file' => 'epnum/r_若叶女孩',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '魔法少女伊利亚' => array(
        'finish' => 1,
        'query' => 'Fate kaleid liner 2wei Herz  MP4 720P  team_id:58',// 华盟澄空
        'ep_num_file' => 'epnum/伊利亚2',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'Charlotte' => array(
        'finish' => 1,
        'query' => 'Charlotte mp4 team_id:58',// 华盟澄空
        'ep_num_file' => 'epnum/Charlotte',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '监狱学园' => array(
        'finish' => 1,
        'query' => '监狱学园 GB team_id:241',
        'ep_num_file' => 'epnum/监狱学园',
        'ep_pat' => '【()】',//()表示([.\d]+)
        ),
    '下流梗' => array(
        'finish' => 1,
        'query' => '下流|有黄 GB 720P MP4 team_id:321',//轻之国度
        'ep_num_file' => 'epnum/x_下流梗.txt',
        'ep_pat' => '\[第()话\]',//()表示([.\d]+)
        ),
    '空战魔导士' => array(
        'finish' => 1,
        'query' => '空战魔导士  教官 简体 720P team_id:303',
        'ep_num_file' => 'epnum/k_空战魔导士.txt',
        'ep_pat' => '\[()(?: END)?\]',
        ),
    '悠哉日常大王_Repet' => array(
        'finish' => 1,
        'query' => '悠哉日常大王 repeat GB team_id:185',
        'ep_num_file' => 'epnum/non_non_biri_repeat.txt',
        'ep_pat' => '【()(?: END)?】',//()表示([.\d]+)
        ),
    '乱步奇谈' => array(
        'finish' => 1,
        'query' => 'Game of Laplace MP4 720P team_id:58',//Sumisora
        'ep_num_file' => 'epnum/l_乱步奇谈',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '老婆是学生会长' => array(
        'finish' => 1,
        'query' => '老婆是学生会长 GB 720P MP4 team_id:430',// 幻之
        'ep_num_file' => 'epnum/老婆是学生会长',
        'ep_pat' => '- ()(?: END)?\[',//()表示([.\d]+)
        ),
    '和歌子酒' => array(
        'finish' => 1,
        'query' => '和歌子酒 team_id:88',// DYMY
        'ep_num_file' => 'epnum/和歌子酒',
        'ep_pat' => '第()話',//()表示([.\d]+)
        ),
    '魔物娘的同居日常' => array(
        'finish' => 1,
        'query' => '魔物娘的同居日常 GB  MP4 team_id:321',// 轻之国度
        'ep_num_file' => 'epnum/魔物娘的同居日常',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    'c赤发白雪姬' => array(
        'finish' => 1,
        'query' => '赤发白雪姬 GB  team_id:185',
        'ep_num_file' => 'epnum/赤发白雪姬',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
);/*}}}*/

$long_stroy = array(
/*{{{*/
    '妖精的尾巴' => array(
        'query' => 'FAIRY TAIL  BIG5 1280x720 MP4 team_id:88',
        'ep_num_file' => 'epnum/fairy_tail',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
    '海贼王' =>  array(
        'query' => '海贼王 周日版 MP4 team_id:34',
        'ep_num_file' => 'epnum/海贼王',
        'ep_pat' => '第()话',//()表示([.\d]+)
        ),
);/*}}}*/

