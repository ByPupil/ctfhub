<html>
<head>
    <title>Welcome to Loading Bay Control System</title>
</head>
<body>
    <p>Welcome to Loading Bay Control System.</p>
    <p>Please input username to retrieve key.</p>
    <form action="index.php" method="POST">
        Username:<input type="text" name="user" default="admin"><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php
        if(isset($_POST["user"])) {
            if(FALSE === strpos(strtolower($_POST["user"]), "admin")) {
                $c = mysqli_connect("localhost", "root", "ctfhub", "ctfhub") or die('Could not connect to db. Contact competition organizer');
                $query = "SELECT user,pw FROM ctfhub WHERE user='" . $_POST["user"] . "'";
                $result = mysqli_query($c, $query);
                if($result && mysqli_num_rows($result) != 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<p>Username:" . $row['user']);
                        echo(" Hash:" . $row['pw'] . "</p>");
                    }
                }
                mysqli_close($c);
            }
            else
            {
                echo("<p><b>I'm not allowed to tell you the admin password.</b></p>");
            } 
        }
    ?>
</body>
</html>