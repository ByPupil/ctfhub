<html>
<head>
<title>学生成绩查询</title>
<meta charset="utf-8">
<style type='text/css' >
    table { 
         border-collapse: collapse;  
         font-family: Futura, Arial, sans-serif;  
         margin:0 auto;
         width: 1000px;
    }  
    caption {  
         font-size: 24px;  
         margin: 1em auto;  
    }  
    th,td {  
         padding: .65em;
    }  
    th { 
        background: #9E9E9E;
        border: 1px solid #777;  
        color: #000; 
    } 
    td {  
         border: 1px solid#777;  
    }  

    form {
        text-align:center;
    }
</style>
</head>

<body>
        <h2 style='text-align:center;'>成绩查询</h2>
        <form action='index.php' method='post'>
        <input style='width:300px;height:40px;font-size:18px;' type='text' name='id' placeholder='1,2,3...'/><br><br><br><br><br>
        <input style='width:100px;height:40px;' type='submit' value='Submit'/>
        </form>


<?php
function dbconnection()
{
        @$con = mysql_connect("localhost","root","ctfhub");
        // Check connection
        if (!$con)
        {
                echo "Failed to connect to MySQL: " . mysql_error();
        }
        @mysql_select_db("ctfhub",$con) or die ( "Unable to connect to the database");
        mysql_query("SET character set 'UTF8'");
}
if(isset($_POST['id'])){
        dbconnection();
		$id = $_POST['id'];
		$sql="SELECT name,math,english,chinese FROM sc WHERE id='".$id."'";
		$result=mysql_query($sql);
		@$row = mysql_fetch_array($result);
		echo "<table> 
			<caption>".$row['name']."的成绩单</caption>
			<thead>  
				<tr> 
					<th>Math
					<th>English
					<th>Chinese
			</thead>

			<tbody>
				<tr>
					<td>".$row['math'].
					"<td>".$row['english'].
					"<td>".$row['chinese'].
			"</tbody>
			</table>";
        mysql_close();
}

?>
</body>
</html>
