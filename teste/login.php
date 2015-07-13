<?php
session_start();
$connection = ssh2_connect('127.0.0.1', 2222);
if(ssh2_auth_password($connection, $_POST['login'], $_POST['senha'])){
	$_SESSION['logado'] = true;
	header('Location:index.php');
}else{	
	header('Location:login.html');
}