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
//$usuario = new Usuario ();
//$usuario->login("user", "123");
//echo $usuario;

//INSERT DE USUARIO NOVO
//$aluno = new Usuario("Aluno", "4567");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("4567");
//$aluno->insert();
//echo $aluno;

//UPDATE DE USUARIO
$usuario = new Usuario ();
$usuario->loadbyId(20);
$usuario->update("ronei", "2501");
echo $usuario;


?>