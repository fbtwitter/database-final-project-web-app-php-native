<?php
	include 'config.php';
	session_start();
        
	session_destroy();
	header( 'location: index.php' );
	mysql_close($conn);
?>
