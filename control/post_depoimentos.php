<?php
require_once('../config/config.php');
$mysqli = mysqli_connect(HOST, USER, PASS, DB);
$action = filter_var($_POST['action'],	FILTER_SANITIZE_STRING);
if($action == 'contar'){
	$sql = " SELECT nome FROM mytable WHERE nome like 'A%' ";
	$result = $mysqli->query($sql);

	$resultado = [];
	while($row = $result->fetch_assoc()){
		$resultado[] = $row['nome'];
	}


	
	die(json_encode($resultado));

}