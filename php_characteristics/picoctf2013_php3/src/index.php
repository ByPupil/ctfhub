<html>
<head>
Secure Web Login
</head>
<body>
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
                echo "<p>Logged in! Key:1234567890";
            }

            if($query['user']!="admin") {
                echo("<p>You are not admin!</p>");
            }
        }
    ?>

<form action="index.php" method="POST">
        <input type="text" name="user" value="Username">
        <input type="text" name="pass" value="Password">
        <input type="submit">
</form>
<a href="code.txt">Sources</a>
</body>
</html>