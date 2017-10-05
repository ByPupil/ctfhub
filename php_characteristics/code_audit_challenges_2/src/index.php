<?php
	show_source(__FILE__);
	include 'flag.php';
	if(isset($_GET['time'])){
		if(!is_numeric($_GET['time'])){
			echo 'The time must be bumber';
		}else if($_GET['time'] < 60 * 60 * 24 * 30 * 2){
			echo 'This time is too short.';
		}else if($_GET['time'] > 60 * 60 * 24 * 30 * 3){
			echo 'This time is too long.';
		}else{
			sleep((int)$_GET['time']);
			echo $flag;
		}
		echo '<hr>';
	}
?>
