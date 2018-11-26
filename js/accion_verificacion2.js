$(document).ready(function() {
	
$('#empresa').select2();


	$('#empresa').select2();
	$('#empresa_m').select2();

//------viabilidad economica del negocio
	$('#medio_verificacion1').change(function(event) {
		$('#medio1').val($(this).val())
	});

	$('#medio_verificacion2').change(function(event) {
		$('#medio2').val($(this).val())
	});

	$('#medio_verificacion3').change(function(event) {
		$('#medio3').val($(this).val())
	});

	$('#medio_verificacion4').change(function(event) {
		$('#medio4').val($(this).val())
	});

	$('#medio_verificacion5').change(function(event) {
		$('#medio5').val($(this).val())
	});

	$('#medio_verificacion6').change(function(event) {
		$('#medio6').val($(this).val())
	});

	$('#medio_verificacion7').change(function(event) {
		$('#medio7').val($(this).val())
	});

	$('#medio_verificacion8').change(function(event) {
		$('#medio8').val($(this).val())
	});

	$('#medio_verificacion9').change(function(event) {
		$('#medio9').val($(this).val())
	});


//------impacto ambiental positivo
	$('#medio_verificacion21').change(function(event) {
		$('#medio21').val($(this).val())
	});
	$('#medio_verificacion22').change(function(event) {
		$('#medio22').val($(this).val())
	});
	$('#medio_verificacion23').change(function(event) {
		$('#medio23').val($(this).val())
	});
	$('#medio_verificacion24').change(function(event) {
		$('#medio24').val($(this).val())
	});
	
//------enfoque ciclo de vida

	$('#medio_verificacion31').change(function(event) {
		$('#medio31').val($(this).val())
	});
	$('#medio_verificacion32').change(function(event) {
		$('#medio32').val($(this).val())
	});
	$('#medio_verificacion33').change(function(event) {
		$('#medio33').val($(this).val())
	});
//------vida util
	$('#medio_verificacion41').change(function(event) {
		$('#medio41').val($(this).val())
	});
	$('#medio_verificacion42').change(function(event) {
		$('#medio42').val($(this).val())
	});

//------------------ sustitucion de sustancias

$('#medio_verificacion51').change(function(event) {
		$('#medio51').val($(this).val())
	});
	$('#medio_verificacion52').change(function(event) {
		$('#medio52').val($(this).val())
	});

//------------------ reciclabilidad 

$('#medio_verificacion61').change(function(event) {
		$('#medio61').val($(this).val())
	});
	$('#medio_verificacion62').change(function(event) {
		$('#medio62').val($(this).val())
	});
	$('#medio_verificacion63').change(function(event) {
		$('#medio63').val($(this).val())
	});

//------------------ uso eficiente de recursos

$('#medio_verificacion71').change(function(event) {
		$('#medio71').val($(this).val())
	});
	$('#medio_verificacion72').change(function(event) {
		$('#medio72').val($(this).val())
	});
	$('#medio_verificacion73').change(function(event) {
		$('#medio73').val($(this).val())
	});

//------------------ responsabilidad social al interior

$('#medio_verificacion81').change(function(event) {
		$('#medio81').val($(this).val())
	});
	$('#medio_verificacion82').change(function(event) {
		$('#medio82').val($(this).val())
	});
	$('#medio_verificacion83').change(function(event) {
		$('#medio83').val($(this).val())
	});

//------------------ respnsabilidad social y ambiental en la cadena

$('#medio_verificacion91').change(function(event) {
		$('#medio91').val($(this).val())
	});
	$('#medio_verificacion92').change(function(event) {
		$('#medio92').val($(this).val())
	});
	$('#medio_verificacion93').change(function(event) {
		$('#medio93').val($(this).val())
	});

//------------------ responsabilidad social y ambiental al exterior

$('#medio_verificacion101').change(function(event) {
	$('#medio101').val($(this).val())
	});
	$('#medio_verificacion102').change(function(event) {
		$('#medio102').val($(this).val())
	});
	$('#medio_verificacion103').change(function(event) {
		$('#medio103').val($(this).val())
	});
	$('#medio_verificacion104').change(function(event) {
		$('#medio104').val($(this).val())
	});
	$('#medio_verificacion105').change(function(event) {
		$('#medio105').val($(this).val())
	});
	$('#medio_verificacion106').change(function(event) {
		$('#medio106').val($(this).val())
	});

//------------------ comunicacion de atributos sociales

$('#medio_verificacion111').change(function(event) {
		$('#medio111').val($(this).val())
	});
	$('#medio_verificacion112').change(function(event) {
		$('#medio112').val($(this).val())
	});
	$('#medio_verificacion113').change(function(event) {
		$('#medio113').val($(this).val())
	});

//------------------ responsbilidad social al interior 2

$('#medio_verificacion121').change(function(event) {
		$('#medio121').val($(this).val())
	});
	$('#medio_verificacion122').change(function(event) {
		$('#medio122').val($(this).val())
	});


//------------------ esquemas porgrama o reconociminetos 

$('#medio_verificacion131').change(function(event) {
		$('#medio131').val($(this).val())
	});
	$('#medio_verificacion132').change(function(event) {
		$('#medio132').val($(this).val())
	});



});




$('#form_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}

else {
	var formData = new FormData(document.getElementById("form_verificacion2"));
	 var empresa = $('#empresa').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_2/insertar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: formData,
	 	cache: false,
        contentType: false,
	     processData: false,
	   beforeSend: function() {
   	// console.log('cargando')
   	$('#btn_verificacion2').attr('disabled', 'disabled');
      	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
    	// console.log(respuesta)
    	swal ({
  				icon: "success",
  				 text: "Datos INSERTADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	//setTimeout("document.location=document.location",1500);
 // console.log('exitoso')

    }
	 })
	 // .done(function(respuesta) {
	 // 	console.log(respuesta);
	 // }) 
}
});

////-----------------------Estadisticas
// Promedios del Nivel 1
var promedio1 = 0
var promedio2 = 0
var promedio3 = 0
var promedio4 = 0
var promedio5 = 0
var promedio6 = 0
var promedio7 = 0
var promedio8 = 0
var promedio9 = 0
var promedio10 = 0
var promedio11 = 0

$('#div_grafica').hide();
$('#calificador19,#calificador18,#calificador17,#calificador16,#calificador15,#calificador14,#calificador13,#calificador12,#calificador11').change(function(event) {

	var combo1 = document.getElementById("calificador11");
	var selected1 = combo1.options[combo1.selectedIndex].text;
	var combo2 = document.getElementById("calificador12");
	var selected2 = combo2.options[combo2.selectedIndex].text;
	var combo3 = document.getElementById("calificador13");
	var selected3 = combo3.options[combo3.selectedIndex].text;
	var combo4 = document.getElementById("calificador14");
	var selected4 = combo4.options[combo4.selectedIndex].text;
	var combo5 = document.getElementById("calificador15");
	var selected5 = combo5.options[combo5.selectedIndex].text;
	var combo6 = document.getElementById("calificador16");
	var selected6 = combo6.options[combo6.selectedIndex].text;
	var combo7 = document.getElementById("calificador17");
	var selected7 = combo7.options[combo7.selectedIndex].text;
	var combo8 = document.getElementById("calificador18");
	var selected8 = combo8.options[combo8.selectedIndex].text;
	var combo9 = document.getElementById("calificador19");
	var selected9 = combo9.options[combo9.selectedIndex].text;


	var division = 0
	var suma1 = 0
	var arreglo1 = [selected1,selected2,selected3,selected4,selected5,selected6,selected7,selected8,selected9]
	for(var i =0;i<arreglo1.length;i++){
		console.log(arreglo1[i]);
		if (arreglo1[i] == 'N/A' || arreglo1[i] == 'Seleccione...') {
		//alert(arreglo1 [i]);
		arreglo1[i] = 0
		division = division
		//	alert(" /a " + division);
	}else{
		division++
	}
	suma1 = suma1 + Number(arreglo1[i]);
	}
	 promedio1 = suma1/division*100;
	if (isNaN(promedio1)) {
		// promedio1 = 0
		$('#prom1').html('0.00%')
	}else {
		$('#prom1').html(promedio1.toFixed(2)+'%')
	}
	
	
});

$('#calificador21,#calificador22,#vcalificador23,#calificador24').change(function(event) {
	var combo10 = document.getElementById("calificador21");
	var selected10 = combo10.options[combo10.selectedIndex].text;
	var combo11 = document.getElementById("calificador22");
	var selected11 = combo11.options[combo11.selectedIndex].text;
	var combo12 = document.getElementById("calificador23");
	var selected12 = combo12.options[combo12.selectedIndex].text;
	var combo13 = document.getElementById("calificador24");
	var selected13 = combo13.options[combo13.selectedIndex].text;

	var division = 0
	var suma2 = 0
	var arreglo2 = [selected10,selected11,selected12,selected13]
	for(var i =0;i<arreglo2.length;i++){
		if (arreglo2[i] == 'N/A' || arreglo2[i] == 'Seleccione...') {
		arreglo2[i] = 0
		division = division
	}else {
		division++
	}
	suma2 = suma2 + Number(arreglo2[i]);
	}
	 promedio2 = suma2/division*100
	if (isNaN(promedio2)) {
		// promedio2 = 0
		$('#prom2').html('0.00%')
	}else {
		
	$('#prom2').html(promedio2.toFixed(2)+'%')
	}
});


$('#calificador31,#calificador32,#calificador33').change(function(event) {
	var combo31 = document.getElementById("calificador31");
	var selected31 = combo31.options[combo31.selectedIndex].text;
	var combo32 = document.getElementById("calificador32");
	var selected32 = combo32.options[combo32.selectedIndex].text;
	var combo33 = document.getElementById("calificador33");
	var selected33 = combo33.options[combo33.selectedIndex].text;

	var division = 0
	var suma3 = 0
	var arreglo3 = [selected31,selected32,selected33]
	for(var i =0;i<arreglo3.length;i++){
		if (arreglo3[i] == 'N/A' || arreglo3[i] == 'Seleccione...') {
		arreglo3[i] = 0
		division = division
	}else {
		division++
	}
	suma3 = suma3 + Number(arreglo3[i]);
	}
	 promedio3 = suma3/division*100
	if (isNaN(promedio3)) {
		// promedio3 = 0
		$('#prom3').html('0.00%')
	}else {
		
	$('#prom3').html(promedio3.toFixed(2)+'%')
	}
});
$('#calificador41,#calificador42').change(function(event) {
	var combo41 = document.getElementById("calificador41");
	var selected41 = combo41.options[combo41.selectedIndex].text;
	var combo42 = document.getElementById("calificador42");
	var selected42 = combo42.options[combo42.selectedIndex].text;

	var division = 0
	var suma4 = 0
	var arreglo4 = [selected41,selected42]
	for(var i =0;i<arreglo4.length;i++){
		if (arreglo4[i] == 'N/A' || arreglo4[i] == 'Seleccione...') {
		arreglo4[i] = 0
		division = division
	}else {
		division++
	}
	suma4 = suma4 + Number(arreglo4[i]);
	}
	 promedio4 = suma4/division*100
	if (isNaN(promedio4)) {
		// promedio4 = 0
		$('#prom4').html('0.00%')
	}else {
		
	$('#prom4').html(promedio4.toFixed(2)+'%')
	}
});


$('#calificador51,#calificador52').change(function(event) {
	var combo51 = document.getElementById("calificador51");
	var selected51 = combo51.options[combo51.selectedIndex].text;
	var combo52 = document.getElementById("calificador52");
	var selected52 = combo52.options[combo52.selectedIndex].text;

	var division = 0
	var suma5 = 0
	var arreglo5 = [selected51,selected52]
	for(var i =0;i<arreglo5.length;i++){
		if (arreglo5[i] == 'N/A' || arreglo5[i] == 'Seleccione...') {
		arreglo5[i] = 0
		division = division
	}else {
		division++
	}
	suma5 = suma5 + Number(arreglo5[i]);
	}
	 promedio5 = suma5/division*100
	if (isNaN(promedio5)) {
		// promedio5 = 0
		$('#prom5').html('0.00%')
	}else {
		
	$('#prom5').html(promedio5.toFixed(2)+'%')
	}
});


$('#calificador61,#calificador62,#calificador63').change(function(event) {
	var combo61 = document.getElementById("calificador61");
	var selected61 = combo61.options[combo61.selectedIndex].text;
	var combo62 = document.getElementById("calificador62");
	var selected62 = combo62.options[combo62.selectedIndex].text;
	var combo63 = document.getElementById("calificador63");
	var selected63 = combo63.options[combo63.selectedIndex].text


	var division = 0
	var suma6 = 0
	var arreglo6 = [selected61,selected62,selected63]
	for(var i =0;i<arreglo6.length;i++){
		if(arreglo6[i] == 'N/A' || arreglo6[i] == 'Seleccione...') {
		arreglo6[i] = 0
		division = division
	}else {
		division++
	}
	suma6 = suma6 + Number(arreglo6[i]);
	}
	 promedio6 = suma6/division*100
	if (isNaN(promedio6)) {
		// promedio6 = 0
		$('#prom6').html('0.00%')
	}else {
		
	$('#prom6').html(promedio6.toFixed(2)+'%')
	}

});


$('#calificador71,#calificador72,#calificador73').change(function(event) {
	var combo71 = document.getElementById("calificador71");
	var selected71 = combo71.options[combo71.selectedIndex].text;
	var combo72 = document.getElementById("calificador72");
	var selected72 = combo72.options[combo72.selectedIndex].text;
	var combo73 = document.getElementById("calificador73");
	var selected73 = combo73.options[combo73.selectedIndex].text;


	var division = 0
	var suma7 = 0
	var arreglo7 = [selected71,selected72,selected73]
	for(var i =0;i<arreglo7.length;i++){
		if (arreglo7[i] == 'N/A' || arreglo7[i] == 'Seleccione...') {
		arreglo7[i] = 0
		division = division
	}else {
		division++
	}
	suma7 = suma7 + Number(arreglo7[i]);
	}
	 promedio7 = suma7/division*100
	if (isNaN(promedio7)) {
		// promedio7 = 0
		$('#prom7').html('0.00%')
	}else {
		
	$('#prom7').html(promedio7.toFixed(2)+'%')
	}

});


$('#calificador81,#calificador82,#calificador83,#calificador84').change(function(event) {
	var combo81 = document.getElementById("calificador81");
	var selected81 = combo81.options[combo81.selectedIndex].text;
	var combo82 = document.getElementById("calificador82");
	var selected82 = combo82.options[combo82.selectedIndex].text;
	var combo83 = document.getElementById("calificador83");
	var selected83 = combo83.options[combo83.selectedIndex].text;
	var combo84 = document.getElementById("calificador84");
	var selected84 = combo84.options[combo84.selectedIndex].text;

	var division = 0
	var suma8 = 0
	var arreglo8 = [selected81,selected82,selected83,selected84]
	for(var i =0;i<arreglo8.length;i++){
		if (arreglo8[i] == 'N/A' || arreglo8[i] == 'Seleccione...') {
		arreglo8[i] = 0
		division = division
	}else {
		division++
	}
	suma8 = suma8 + Number(arreglo8[i]);
	}
	 promedio8 = suma8/division*100
	if (isNaN(promedio8)) {
		// promedio8 = 0
		$('#prom8').html('0.00%')
	}else {
		
	$('#prom8').html(promedio8.toFixed(2)+'%')
	}

});
$('#calificador91,#calificador92,#calificador93').change(function(event) {
	var combo91 = document.getElementById("calificador91");
	var selected91 = combo91.options[combo91.selectedIndex].text;
	var combo92 = document.getElementById("calificador92");
	var selected92 = combo92.options[combo92.selectedIndex].text;
	var combo93 = document.getElementById("calificador93");
	var selected93 = combo93.options[combo93.selectedIndex].text;

	var division = 0
	var suma9 = 0
	var arreglo9 = [selected91,selected92,selected93]
	for(var i =0;i<arreglo9.length;i++){
		if (arreglo9[i] == 'N/A' || arreglo9[i] == 'Seleccione...') {
		arreglo9[i] = 0
		division = division
	}else {
		division++
	}
	suma9 = suma9 + Number(arreglo9[i]);
	}
	 promedio9 = suma9/division*100
	if (isNaN(promedio9)) {
		// promedio9 = 0
		$('#prom9').html('0.00%')
	}else {
		
	$('#prom9').html(promedio9.toFixed(2)+'%')
	}

});

$('#calificador101,#calificador102,#calificador103,#calificador104,#calificador105,#calificador106').change(function(event) {
	var combo101 = document.getElementById("calificador101");
	var selected101 = combo101.options[combo101.selectedIndex].text;
	var combo102 = document.getElementById("calificador102");
	var selected102 = combo102.options[combo102.selectedIndex].text;
	var combo103 = document.getElementById("calificador103");
	var selected103 = combo103.options[combo103.selectedIndex].text;
	var combo104 = document.getElementById("calificador104");
	var selected104 = combo104.options[combo104.selectedIndex].text;
	var combo105 = document.getElementById("calificador105");
	var selected105 = combo105.options[combo105.selectedIndex].text;
	var combo106 = document.getElementById("calificador106");
	var selected106 = combo106.options[combo106.selectedIndex].text;

	var division = 0
	var suma10 = 0
	var arreglo10 = [selected101,selected102,selected103,selected104,selected105,selected106]
	for(var i =0;i<arreglo10.length;i++){
		if (arreglo10[i] == 'N/A' || arreglo10[i] == 'Seleccione...') {
		arreglo10[i] = 0
		division = division
	}else {
		division++
	}
	suma10 = suma10 + Number(arreglo10[i]);
	}
	 promedio10 = suma10/division*100
	if (isNaN(promedio10)) {
		// promedio10 = 0
		$('#prom10').html('0.00%')
	}else {
		
	$('#prom10').html(promedio10.toFixed(2)+'%')
	}

});

$('#calificador111,#calificador112,#calificador113').change(function(event) {
	var combo111 = document.getElementById("calificador111");
	var selected111 = combo111.options[combo111.selectedIndex].text;
	var combo112 = document.getElementById("calificador112");
	var selected112 = combo112.options[combo112.selectedIndex].text;
	var combo113 = document.getElementById("calificador113");
	var selected113 = combo113.options[combo113.selectedIndex].text;

	var division = 0
	var suma11 = 0
	var arreglo11 = [selected111,selected112,selected113]
	for(var i =0;i<arreglo11.length;i++){
		if (arreglo11[i] == 'N/A' || arreglo11[i] == 'Seleccione...') {
		arreglo11[i] = 0
		division = division
	}else {
		division++
	}
	suma11 = suma11 + Number(arreglo11[i]);
	}
	 promedio11 = suma11/division*100
	if (isNaN(promedio11)) {
		// promedio11 = 0
		$('#prom11').html('0.00%')
	}else {
		
	$('#prom11').html(promedio11.toFixed(2)+'%')
	}
});



// Promedios del Nivel 2
var promedio12 = 0
var promedio13 = 0
$('#calificador121,#calificador122').change(function(event) {
	var combo121 = document.getElementById("calificador121");
	var selected121 = combo121.options[combo121.selectedIndex].text;
	var combo122 = document.getElementById("calificador122");
	var selected122 = combo122.options[combo122.selectedIndex].text;

	var division = 0
	var suma12 = 0
	var arreglo12 = [selected121,selected122]
	for(var i =0;i<arreglo12.length;i++){
		if (arreglo12[i] == 'N/A' || arreglo12[i] == 'Seleccione...') {
		arreglo12[i] = 0
		division = division
	}else {
		division++
	}
	suma12 = suma12 + Number(arreglo12[i]);
	}
	 promedio12 = suma12/division*100
	if (isNaN(promedio12)) {
		// promedio12 = 0
		$('#prom12').html('0.00%')
	}else {
		
	$('#prom12').html(promedio12.toFixed(2)+'%')
	}
});

$('#calificador131,#calificador132,#calificador133').change(function(event) {
	var combo131 = document.getElementById("calificador131");
	var selected131 = combo131.options[combo131.selectedIndex].text;
	var combo132 = document.getElementById("calificador132");
	var selected132 = combo132.options[combo132.selectedIndex].text;
	var combo133 = document.getElementById("calificador133");
	var selected133 = combo133.options[combo133.selectedIndex].text;

	var division = 0
	var suma13 = 0
	var arreglo13 = [selected131,selected132,selected133]
	for(var i =0;i<arreglo13.length;i++){
		if (arreglo13[i] == 'N/A' || arreglo13[i] == 'Seleccione...') {
		arreglo13[i] = 0
		division = division
	}else {
		division++
	}
	suma13 = suma13 + Number(arreglo13[i]);
	}
	 promedio13 = suma13/division*100
	if (isNaN(promedio13)) {
		// promedio13 = 0
		$('#prom13').html('0.00%')
	}else {
		
	$('#prom13').html(promedio13.toFixed(2)+'%')
	}
});

// calcular el promedio total 
$('select').change(function(event) {
// Promedio total del nivel 1
var division = 0
var suma_total = 0
var arreglo_total = [
promedio1,promedio2,promedio3,promedio4,promedio5,promedio6,promedio7,promedio8,promedio9,promedio10,promedio11
]
	for(var i =0;i<arreglo_total.length;i++){
		if (isNaN(arreglo_total[i])) {
		arreglo_total[i] = 0
		division = division
	}else {
		division++
	}
	suma_total = suma_total + Number(arreglo_total[i]);
	}
	var prom_total = suma_total/division
	if (isNaN(prom_total)) {
		$('#total').html(' ')
		$('#puntaje1').html('0.00%')
	}else {	
	$('#total').html(prom_total.toFixed(2)+'%')
	$('#puntaje1').html(prom_total.toFixed(2)+'%')
	}

	if (Number(prom_total) < Number(50)) {
		$('#total').removeClass('grey lighten-1')
		$('#total').removeClass('green')
		$('#total').addClass('red')
	}else {
		$('#total').addClass('green')
	}
// Promedio total del nivel 2
var division = 0
var suma_total = 0
var arreglo_total = [promedio12,promedio13]
	for(var i =0;i<arreglo_total.length;i++){
		if (isNaN(arreglo_total[i])) {
		arreglo_total[i] = 0
		division = division
	}else {
		division++
	}
	suma_total = suma_total + Number(arreglo_total[i]);
	}
	var prom_total2 = suma_total/division
	if (isNaN(prom_total2)) {
		$('#total2').html(' ')
		$('#puntaje2').html('0.00%')
	}else {	
	$('#total2').html(prom_total2.toFixed(2)+'%')
		$('#puntaje2').html(prom_total2.toFixed(2)+'%')
	}

	if (Number(prom_total2) < Number(50)) {
		$('#total2').removeClass('grey lighten-1')
		$('#total2').removeClass('green')
		$('#total2').addClass('red')
	}else {
		$('#total2').addClass('green')
	}

	var sum_puntaje = Number(prom_total) + Number(prom_total2);
	var resultado = sum_puntaje/2;
	if (isNaN(resultado)) {
		$('#resultado').html('0.00%')
	}
	// else {	
	// $('#resultado').html(resultado.toFixed(2)+'%')
	// }
	if (prom_total >= 0 && prom_total <= 10) {
		$('#resultado').html('Inicial')
	}else if (prom_total > 10 && prom_total <= 30) {
		$('#resultado').html('Básico')
	}else if (prom_total > 30 && prom_total <= 50) {
		$('#resultado').html('Intermedio')
	}else if (prom_total > 50 && prom_total <= 80) {
		$('#resultado').html('Satisfactorio')
	}else if (prom_total > 80 && prom_total <= 100 && prom_total2 < 50) {
		$('#resultado').html('Avanzado')
	}else if (prom_total > 80 && prom_total <= 100 && prom_total2 >= 50 ) {
		$('#resultado').html('Ideal')
	}
	$('#prom_form').val(prom_total)

	//----------Grafica ------------
$('#div_grafica').show();
	var ctx = document.getElementById("grafica");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5", "Item 6", "Item 7", "Item 8", "Item 9", "Item 10", "Item 11"],
        datasets: [{
            label: 'Resultanos Nivel 1',
            data: [promedio1, promedio2, promedio3, promedio4, promedio5,promedio6,promedio7,promedio8,promedio9,promedio10,promedio11],
            backgroundColor: [
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
});




