<html>
    <head>
        <title>Admin Key Panel</title>
    </head>

    <body>
        <p>Enter admin password for key</p>
        <?php
            $secret_key = 'cfthub';
            extract($_GET);
            $flag = '1234567890';
            if(isset($password)) {
                if($password === $secret_key) {
                    echo "<p>Correct!</p>";
                    echo "<p>Flag:" . $flag . "</p>";
                }
                else {
                    echo "<p>Incorrect!</p>";
                }
            }
        ?>
        <form action="index.php" method="GET">
            <p><input type="text" name="password"></p>
            <p><input type="submit"></p>
        </form>
        <a href="code.txt">Sources</a>
    </body>
</html>