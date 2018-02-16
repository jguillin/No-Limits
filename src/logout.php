<?php
	session_start();

	if(isset($_SESSION['username'])){
		session_destroy();
		header("Location: /");
	}else{
		header("Location: /pages/error.php");
	}

?>
