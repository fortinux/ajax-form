/**
* Created with ajax-form.
* User: fortinux
* Date: 2014-01-23
* Time: 06:42 PM
* To change this template use Tools | Templates.
*/
$(function () {
	$("#cpf").blur(function () {
		var cpf = $(this).val();
		$.ajax({
			type: "GET",
			url: "pessoas.php",
			data: "cpf="+cpf,
			success: function(pessoa){
				informacoesPessoa = pessoa.split("-");
				$("#nome").val(informacoesPessoa[0]);
				$("#dataNascimento").val(informacoesPessoa[1]);
			}
		});
	});
});