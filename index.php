<?php

require('config.php');


criarTopo();

$principal = '<body>

<form action="inserirDadosBD.php"  method="POST">

   Login: <input type="text" name="login" id="login">
   Senha: <input type="text" name="senha" id="senha">
   <input type="submit" value="Cadastrar">

</form>
';

criarMain($principal);

criarRodape()




?>