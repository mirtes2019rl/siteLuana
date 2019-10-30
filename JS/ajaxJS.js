$('#btnCont').click(function(){
	
	$.ajax({
		type: "POST",
		url:  "./control/post_depoimentos.php",
		data: 'action=contar',
		dataType: "JSON",
		success: function(retorno) {
			alert(retorno.length)
			console.log(retorno);
		}
	});

})