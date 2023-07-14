<?php

require_once("./model/Formulario.php");
require_once './dao/FormularioDao.php';

header ("location: ./index.html");

$formulario = new Formulario ();


$formulario->setNome($_POST['nome']);
$formulario->setEmail($_POST['email']);
$formulario->setEscreva($_POST['escreva']);


FormularioDao::cadastra($formulario);


?>