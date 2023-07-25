<?php

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$mail = 'lift';
$senha = 'dtxlift';



if( $user == $mail  &&  $pass == $senha){

$_SESSION['login'] = $mail;
$_SESSION['senha'] = $senha;
header('location:cpn.php');

}

else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');

  }

?>