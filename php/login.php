<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function login($login, $pass)
{
	$conn = new PDO("mysql:host=localhost;dbname=db_stox", "root", "");
	$query = $conn->prepare("SELECT * FROM tb_funcionario WHERE nm_login = :login AND nm_senha = :senha");
	$query->bindValue(":login", $login);
	$query->bindValue(":senha", $pass);
	$query->execute();

	$logged = ($query->rowCount() >= 1) ? 'dd' : 'false';
	echo $logged;
	return $logged;
}
$var = login("login", "123");
echo $var;