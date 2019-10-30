<?php

function verificaLogin(){
  if(isset($_SESSION['usuario'])){
    header('Location: ./perfil');
    exit();
  }
}
verificaLogin();

?>

<div class="container">
	<form action="./config/login.php" method="POST">
  		<div class="form-group">
    		<label for="usuario">Usuario:</label>
    		<input type="text" class="form-control" id="usuario" name="usuario">
  		</div>
  		<div class="form-group">
    		<label for="senha">Senha:</label>
    		<input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>