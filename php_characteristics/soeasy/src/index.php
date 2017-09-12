<meta charset="utf-8">
<?php
error_reporting(0);
if(empty($_GET['id'])){
	show_source(__FILE__);
	die();
}else{
	include('flag.php');
$a = "ctfhub";
$id = $_GET['id'];
@parse_str($id);
if($a[0] != 'QNKCDZO' && md5($a[0]) == md5('QNKCDZO')){
	echo $flag;
}else{
	exit("It's so easy!");
}
}
?>
