# fetch\_dmhy
fetch torrent from dmhy, 根据epnum增量下载。

## use
php run.php

会根据down\_list.php 中的配置将种子文件会被下载到当天日期的文件夹下

## down\_list.php

```php
return [
    'epnum_name' => [
        'query' => 'dmhy的搜索词',//必选
        'ep_pat' => '\[()\]',//匹配集数的正则()表示数字。可选，当默认的不起作用时候手动指定
        'begin_from' => '2017-07-10',//只下载这个日期之后的。可选，默认全部
    ],
    ....
];
```
