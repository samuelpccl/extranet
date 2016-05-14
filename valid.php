<?php
  session_start();

  $user_r = "";
  	if ($_POST['user']) { 
  		$user_r = $_POST['user'];
  }

  $pass_r = "";
  	if ($_POST['pass']) {
  	 $pass_r = $_POST['pass']; 
  }  

  $user = 'samuel';
  $pass = '123';

  if ($user_r == $user && $pass_r == $pass) {
    $_SESSION['logado'] = "bem vindo";
    header("Location: index.php");
  } else {
    header("Location: login.php");
  }
?>