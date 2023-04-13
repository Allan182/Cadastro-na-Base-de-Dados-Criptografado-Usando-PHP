<?php

require('mysql.php');

$login = $_POST["login"];
$senha = $_POST["senha"];

$loginHash = md5($login);
$senhaHash = md5($senha);


$resultado = $mysqli->prepare("INSERT INTO `usuarios` (`codUsuarios`, `nome`, `senha`) VALUES (NULL, ?, ?);");
$resultado->bind_param("ss", $loginHash, $senhaHash);
$resultado->execute();


echo "Dados Inseridos no Banco de Dados com Sucesso! <br> <br> ";

echo "Dados Inseridos:" . "Login = " . $loginHash . " |   Senha = " . $senhaHash;

