<?php

	if(isset($_POST['un']) && isset($_POST['pw'])){
		if($_POST['un'] == 'admin' && $_POST['pw'] == 'grip123'){
			session_start(); 
			$_SESSION['loggedIn'] = 1;
			header('Location: lyrics.php');
		}
		else{
			session_start(); 
			$_SESSION['loggedIn'] = 0;
			header('Location: index.php');
		}
	}

?>