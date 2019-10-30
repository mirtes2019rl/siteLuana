<?php
session_start();
include('config.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../login');
	$_SESSION['naoAutenticado'] = $usuario;
	exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row==1){
	$_SESSION['usuario'] = $usuario;
	header('Location: ../perfil');
	exit();
} else{
	$_SESSION['naoAutenticado'] = $usuario;
	header('Location: ../login');
}