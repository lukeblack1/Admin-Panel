<?php
	include_once('private/connect_db.php');
 
	if( isset($_GET['del']) )
	{
		$id = $_GET['user_id'];
		$sql= "DELETE FROM users WHERE id='$user_id'";
		$res= mysql_query($sql) or die("Failed".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
?>