<?php
    if(eregi("admin", $_GET[id])) {
        echo("<p>not allowed!</p>");
        exit();
    }

    $_GET[id] = urldecode($_GET[id]);
    if($_GET[id] == "admin") {
        echo "<p>Access granted!</p>";
        echo "<p>Key: 1234567890</p>";
    }
?>

<br><br>
Can you authenticate to this website?
<!-- source: code.txt -->