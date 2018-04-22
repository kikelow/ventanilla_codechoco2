$(document).ready(function() {
	var formulario = $('#login');
	var usuario = $('#username');
	var contrasena = $('#password');
	$('#btn_login').click(function(event) {
		event.preventDefault();
		//Validación de datos antes de ser enviados por ajax
		//alert(usuario);
		if (usuario.val()==""){
			 Materialize.toast('Diligenciar capo usuario !!', 3000);

		}else if(contrasena.val()==""){
			 Materialize.toast('Diligenciar capo contraseña !!', 3000);
		}else{
			//JSON con los datos a enviar por ajax
			var datos = {
				usuario:usuario.val(),
				contrasena:contrasena.val()
			}
			$.ajax({
				url: '../access/login.php',
				type: 'POST',
				//dataType:'HTML',
				data:datos,
				beforeSend:""
			})
			.done(function(data) {
				// if (data == true) {
					if (data == '1') {
					window.location.replace("../index3.php");
					}else if (data == '2') {
						window.location.replace("../index2.php");
					}
					else if (data == '3') {
						alert('administrador verificador')
					}else if (!data) {
						alert('No existe')
					}
				// }
				// else{
				// 	Materialize.toast('Usuario o contraeña invalidos !!', 3000);
				// }
			})
			.fail(function(data) {
				//Se ejecutará si haya algún error de conexión
				console.log(data)
			})			
		}
	});
});