## CodegateCTF 2015:owlur

分类：文件上传，文件包含

## write-up

首先进入首页可以知道，这是一个图片展示页面。并且在页面下方有一个可以文件上传的地方。经过信息收集在页面中存在以下几个页面：

- index.php:存在文件上传和图片显示的页面
- view.php:通过id参数可以访问后台服务上的文件，且这个id参数还存在了XSS漏洞。
- upload.php:文件上传，通过检查后缀是否是.jpg。判断其是否可以上传，且上传之后的文件名是被修改的。

在view.php页面中还存在另一个参数page，老姿势一插，发现可以通过`./`这样的方式本地文件包含，但是`../`时，会出现一个大帅哥。233

本以为可以用`NULLByte(%00)`进行截断，但在这个版本中确实不行。

这人突然想起过滤器的骚姿势，需要尝试一下。使用php过滤器的条件是必须能够完全的控制`include`和`require()`函数中的内容。

因为在之前的尝试中，我们发现不用添加`.php`后缀。

`php://filter/convert.base64-encode/resource=index`

`php://filter/convert.base64-encode/resource=upload`

`php://filter/convert.base64-encode/resource=view`

通过查看源码，我们发现了文件上传之后的路径`/var/www/owlur/owlur-zzzzzz/*.jpg` 。

后来问了表哥，这儿可以使用封装协议。[封装协议](http://php.net/manual/zh/wrappers.compression.php)。

`zip://archive.zip#dir/file.txt`

因此，我们可以上传和压缩文件，然后通过封装协议读取shell。

最后，我们可以通过构造如下语句：

`index.php?page=zip:///var/www/owlur/owlur-zzzzzz/<RANDOM>.jpg%23shell`。

我们就可以代码执行了。发现flag就在目录下方。