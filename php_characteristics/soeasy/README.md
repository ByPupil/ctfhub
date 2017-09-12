## soeasy

**分类：**脚本开发

## write-up

这道题目的考点是`变量覆盖`，通过`parse_str()`函数，覆盖`$a`的值。

`void parse_str(string $str [, array $arr])`：将字符串解析成多个变量。

如果 `str` 是 URL 传递入的查询字符串（query string），则将它解析为变量并设置到当前作用域。

[官方文档](http://php.net/manual/zh/function.parse-str.php)

`payload1:?id=a[0]=s878926199a`

