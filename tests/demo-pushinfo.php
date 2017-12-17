<?php
/**
 * 重写demo-pushinfo.php
 * @authors sayue (likehuyi92@gmail.com)
 * @date    2017-12-17 00:49:52
 * @version $Id$
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require dirname(__DIR__).'/vendor/autoload.php';

use Getui\igetui\utils\ApnsUtils;

getPushInfoLen();

function getPushInfoLen() {
    $rep = ApnsUtils::validatePayloadLength("阳春三月天气新，湖中丽人花照春。满船罗绮载花酒，燕歌赵舞留行云。五月湖中采莲女，笑隔荷花共人语","", "b", "a", "", "4", "com.gexin.ios.silence", "DDDD",0);
    var_dump($rep);
    echo ("<br><br>");
}
