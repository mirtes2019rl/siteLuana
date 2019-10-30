<?php
function carrega_pagina(){

	if($_GET){
		$url = explode('/', $_GET['url']);
		if (file_exists('view/page_'.$url[0].'.php')){
			require_once 'view/page_'.$url[0].'.php';
		}else{
			echo '404 - Página não existe';
		}
	}else{
		require_once 'view/page_home.php';
	}

}