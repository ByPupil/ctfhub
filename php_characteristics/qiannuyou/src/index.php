<html>
<head>
    <title></title>
    <style type="text/css">
    .link {
        text-decoration: none;
        color: #000;
    }
    .link:hover {
        text-decoration: none;
        color: #000;
    }
    </style>
</head>
<body>
<div align="center">
<p>分手了，纠结再三我没有拉黑她，原因无它，放不下。
<p>终于那天，竟然真的等来了她的消息：“在吗？”
<p>我神色平静，但颤抖的双手却显示出我此刻的激动。“怎么了？有事要我帮忙？”
<p>“怎么，没事就不能联系了吗？”结尾处调皮表情，是多么的陌生和熟悉……
<p>“帮我看看这个...”说着，她发来一个<a class="link" href="code.txt" target="_blank">链接</a>。
<p>不忍心拂她的意就点开了链接，看着屏幕我的心久久不能平静，往事一幕幕涌上心头......
<p>。。。。。。
<p>“我到底做错了什么，要给我看这个！”
<p>“还记得你曾经说过。。。。。。。。”
<h2>PHP是世界上最好的语言</h2>
<?php
$flag = 'flag{123456789}';
if(isset($_GET['v1']) && isset($_GET['v2']) && isset($_GET['v3'])){
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    $v3 = $_GET['v3'];
    if($v1 != $v2 && md5($v1) == md5($v2)){
        if(!strcmp($v3, $flag)){
            echo "<p>$flag</p>";
        }
    }
}
?>
</div>
</body>
</html>

