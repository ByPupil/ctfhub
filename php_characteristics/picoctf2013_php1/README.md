## PicoCTF 2013:PHP1

分类：脚本开发

## write-up

根据提示，我们可以访问`code.txt`该文件

```php
 <?php
      $secret_key = '';
      extract($_GET);
      $flag = '';
      if (isset($password)) {
        if ($password === $secret_key) {
          echo "<p>Correct!</p>";
          echo "<p>Flag: "." $flag</p>";
        } else {
          echo "<p>Incorrect!</p>";
        }
      }
    ?>
```

观察源码我们了解到，我们必须使`$password`与`$secret_key`两个变量的值相等。在代码中存在`extract`会将我们发送的`$_GET`数组进行初始化。那么我们可以构造如下语句:

`payload:?password=ctfhub&secret_key=ctfhub`

