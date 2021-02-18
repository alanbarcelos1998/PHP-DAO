<?php

    require_once("config.php");

   //CARREGA UM USUÁRIO 
//    $root = new Usuario();
//    $root->loadById(3);
//    echo $root;

//CARREGA UMA LISTA DE USUÁRIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("p");
// echo json_encode($search);

//CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
$usuario = new Usuario();
$usuario->login("jose", "jose@12345");
echo $usuario;

?>