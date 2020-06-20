<?php 
session_start();

if (
(!isset(@_SESSION['id'])==true)&&
(!isset($_SESSION['nome'])==true)&&
(!isset($_SESSION['email'])==true)){
	
	unsert ($_SESSION['id']);
	unsert ($_SESSION['nome']);
	unsert ($_SESSION['email']);
	header('Location: index.html');
}

echo "PÁGINA RESTRITA!<br>";

echo "(MAS NEM TÃO RESTRITA ASSIM!)";
?>

<a href="sair.php">SAIR</a>