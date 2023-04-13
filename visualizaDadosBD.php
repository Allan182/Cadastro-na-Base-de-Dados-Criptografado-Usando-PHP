<?php

//include('mysqlOO.php');
require('mysql.php');

$resultado = $mysqli->query('SELECT * FROM `usuarios` WHERE 1');

$dados = $resultado->fetch_all(MYSQLI_ASSOC);

print_r($dados);
