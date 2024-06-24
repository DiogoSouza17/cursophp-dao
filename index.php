<?php

require_once ("config.php");
//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//carrega uma lista de usuarios
//$list = Usuario::getList();
//echo json_encode($list); 

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Di");
//echo json_encode($search);

//carrega um usuario usando o login e a senha 

$usuario = new Usuario ();

$usuario->login("user", "123");

echo $usuario;

?>