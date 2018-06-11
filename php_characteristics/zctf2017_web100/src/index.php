<?php
$flag = $_GET['flag'];
if ($flag != '15562') {
    if (strstr($flag, 'zctf')) {
        if (substr(md5($flag),8,16) == substr(md5('15562'),8,16)) {
            die('flag{1234567890}');
        }
    }##
}
die('ha?');
?>