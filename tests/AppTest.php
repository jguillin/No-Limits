<?php

    final class AppTest{
      	function testAdmin(){
        	session_start();
        	if ( $_SESSION["rol"]!= "admin"){
            header("location: index.php");
          }
        }
        function testSession(){
        	session_start();
        	session_destroy();
        }
    }

?>
