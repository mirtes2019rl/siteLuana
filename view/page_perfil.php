<?php
function verificaLogin(){
	if(!isset($_SESSION['usuario'])){
		header('Location: ./login');
		exit();
	}
}
verificaLogin();
?>
<div class="container">
	
</div>