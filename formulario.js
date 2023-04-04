


/*evento de envio de formulário*/
$(document).ready(function() {
	$('#contactForm').submit(function(event) {
		// Prevenir envio padrão do formulário
		event.preventDefault();


		let nome = $("#name").val();
		let email = $("#email").val();
		let comment = $("#comment").val();

		if (!(nome.lenght > 2) && (email.lenght > 5) && (comment.lenght > 10)) {
			alert("preencha corretamente o Formulário!");
		} else {

			// Selecionar método e URL de destino
			var metodo = $(this).attr('method');
			var url = $(this).attr('action');

			// Obter dados do formulário
			var dados = $(this).serialize();
			alert(dados);
			// Enviar dados do formulário via AJAX
			$.ajax({
				method: 'POST',
				url: 'arquivo.php',
				data: dados
			}).done(function(resposta) {
				// resposta do servidor
				alert('Dados enviados com sucesso!');
			}).fail(function() {
				//  falha no envio
				alert('Ocorreu um erro ao enviar os dados.');
			});
		}


	});
});






