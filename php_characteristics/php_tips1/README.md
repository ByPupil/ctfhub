## PHP Tips 1

分类：脚本开发

## write-up

进入首页，提示是代码审计的题目，通过扫描目录发现了`code.txt`。

```php
<?php
  $url = $_GET['url'];
  $parts = parse_url($url);
  if(empty($parts['host']) || $parts['host'] != 'localhost') 
  {
      exit("forbidden!! url is error. hint:codeaudit");
  }
  readfile($url);
?>
```

这儿只对`localhost`做了限制，并没有对协议做限制，所以很容易绕过。

`payload:?url=file://localhost/flag.txt`