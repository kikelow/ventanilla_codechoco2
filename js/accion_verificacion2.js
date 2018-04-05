$(document).ready(function() {
	
$('#empresa').select2();
$('#empresa_m').select2();
});



$('#form_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}
else if ($('#verificacion2_obs1').val()==''||$('#verificacion2_obs2').val()==''||$('#verificacion2_obs3').val()==''||$('#verificacion2_obs4').val()==''||$('#verificacion2_obs5').val()==''||$('#verificacion2_obs6').val()==''||$('#verificacion2_obs7').val()==''||$('#verificacion2_obs8').val()==''||$('#verificacion2_obs9').val()==''||$('#verificacion2_obs10').val()==''||$('#verificacion2_obs11').val()==''||$('#verificacion2_obs12').val()==''||$('#verificacion2_obs13').val()==''||$('#verificacion2_obs14').val()==''||$('#verificacion2_obs15').val()==''||$('#verificacion2_obs16').val()==''||$('#verificacion2_obs17').val()==''||$('#verificacion2_obs18').val()==''||$('#verificacion2_obs19').val()==''||$('#verificacion2_obs20').val()==''||$('#verificacion2_obs21').val()==''||$('#verificacion2_obs22').val()==''||$('#verificacion2_obs23').val()==''||$('#verificacion2_obs24').val()==''||$('#verificacion2_obs25').val()==''||$('#verificacion2_obs26').val()==''||$('#verificacion2_obs27').val()==''||$('#verificacion2_obs28').val()==''||$('#verificacion2_obs29').val()==''||$('#verificacion2_obs30').val()==''||$('#verificacion2_obs31').val()==''||$('#verificacion2_obs32').val()==''||$('#verificacion2_obs33').val()==''||$('#verificacion2_obs34').val()==''||$('#verificacion2_obs35').val()==''||$('#verificacion2_obs36').val()==''||$('#verificacion2_obs37').val()==''||$('#verificacion2_obs38').val()==''||$('#verificacion2_obs39').val()==''||$('#verificacion2_obs40').val()==''||$('#verificacion2_obs41').val()==''||$('#verificacion2_obs42').val()==''||$('#verificacion2_obs43').val()==''||$('#verificacion2_obs44').val()==''||$('#verificacion2_obs45').val()==''||$('#verificacion2_obs46').val()==''||$('#verificacion2_obs47').val()==''||$('#verificacion2_obs48').val()==''||$('#verificacion2_obs49').val()==''||$('#verificacion2_obs50').val()=='') {
	Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
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
    	swal ({
  				icon: "success",
  				 text: "Datos INSERTADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	setTimeout("document.location=document.location",1500);
 // console.log('exitoso')

    }
	 })
	 // .done(function(respuesta) {
	 // 	console.log(respuesta);
	 // }) 
}
});
//-----------------------------------Cargar formulario----------------------------------
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_2/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
	})
	.done(function(respuesta) {
		// console.log(respuesta)
		$('#cargar_info').html(respuesta)
	})
	
});

// ------------------------------Modificar
$('#form_modificar_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa_m').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}else if ($('#verificacion2_obs_m1').val()==''||$('#verificacion2_obs_m2').val()==''||$('#verificacion2_obs_m3').val()==''||$('#verificacion2_obs_m4').val()==''||$('#verificacion2_obs_m5').val()==''||$('#verificacion2_obs_m6').val()==''||$('#verificacion2_obs_m7').val()==''||$('#verificacion2_obs_m8').val()==''||$('#verificacion2_obs_m9').val()==''||$('#verificacion2_obs_m10').val()==''||$('#verificacion2_obs_m11').val()==''||$('#verificacion2_obs_m12').val()==''||$('#verificacion2_obs_m13').val()==''||$('#verificacion2_obs_m14').val()==''||$('#verificacion2_obs_m15').val()==''||$('#verificacion2_obs_m16').val()==''||$('#verificacion2_obs_m17').val()==''||$('#verificacion2_obs_m18').val()==''||$('#verificacion2_obs_m19').val()==''||$('#verificacion2_obs_m20').val()==''||$('#verificacion2_obs_m21').val()==''||$('#verificacion2_obs_m22').val()==''||$('#verificacion2_obs_m23').val()==''||$('#verificacion2_obs_m24').val()==''||$('#verificacion2_obs_m25').val()==''||$('#verificacion2_obs_m26').val()==''||$('#verificacion2_obs_m27').val()==''||$('#verificacion2_obs_m28').val()==''||$('#verificacion2_obs_m29').val()==''||$('#verificacion2_obs_m30').val()==''||$('#verificacion2_obs_m31').val()==''||$('#verificacion2_obs_m32').val()==''||$('#verificacion2_obs_m33').val()==''||$('#verificacion2_obs_m34').val()==''||$('#verificacion2_obs_m35').val()==''||$('#verificacion2_obs_m36').val()==''||$('#verificacion2_obs_m37').val()==''||$('#verificacion2_obs_m38').val()==''||$('#verificacion2_obs_m39').val()==''||$('#verificacion2_obs_m40').val()==''||$('#verificacion2_obs_m41').val()==''||$('#verificacion2_obs_m42').val()==''||$('#verificacion2_obs_m43').val()==''||$('#verificacion2_obs_m44').val()==''||$('#verificacion2_obs_m45').val()==''||$('#verificacion2_obs_m46').val()==''||$('#verificacion2_obs_m47').val()==''||$('#verificacion2_obs_m48').val()==''||$('#verificacion2_obs_m49').val()==''||$('#verificacion2_obs_m50').val()=='') {
	Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
}else {
	var formData = new FormData(document.getElementById("form_modificar_verificacion2"));
	 var empresa = $('#empresa_m').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_2/modificar/modificar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: formData,
	 	cache: false,
        contentType: false,
	     processData: false,
	  beforeSend: function() {
	  	$('#modificar_verificacion2').attr('disabled', 'disabled');
   	// console.log('cargando')
   	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
    	swal ({
  				icon: "success",
  				 text: "Datos MODIFICADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	setTimeout("document.location=document.location",1500);
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
$('#verifica2_calificador5,#verifica2_calificador4,#verifica2_calificador3,#verifica2_calificador2,#verifica2_calificador1').change(function(event) {

	var combo1 = document.getElementById("verifica2_calificador1");
	var selected1 = combo1.options[combo1.selectedIndex].text;
	var combo2 = document.getElementById("verifica2_calificador2");
	var selected2 = combo2.options[combo2.selectedIndex].text;
	var combo3 = document.getElementById("verifica2_calificador3");
	var selected3 = combo3.options[combo3.selectedIndex].text;
	var combo4 = document.getElementById("verifica2_calificador4");
	var selected4 = combo4.options[combo4.selectedIndex].text;
	var combo5 = document.getElementById("verifica2_calificador5");
	var selected5 = combo5.options[combo5.selectedIndex].text;
	var division = 0
	var suma1 = 0
	var arreglo1 = [selected1,selected2,selected3,selected4,selected5]
	for(var i =0;i<arreglo1.length;i++){
		if (arreglo1[i] == 'N/A' ) {
		arreglo1[i] = 0
		division = division
	}else {
		division++
	}
	suma1 = suma1 + Number(arreglo1[i]);
	}
	 promedio1 = suma1/division*100
	if (isNaN(promedio1)) {
		// promedio1 = 0
		$('#prom1').html('')
	}else {
		$('#prom1').html(promedio1.toFixed(2)+'%')
	}
	
	
});

$('#verifica2_calificador6,#verifica2_calificador7,#verifica2_calificador8,#verifica2_calificador9,#verifica2_calificador10,#verifica2_calificador11,#verifica2_calificador12,#verifica2_calificador13').change(function(event) {
	var combo6 = document.getElementById("verifica2_calificador6");
	var selected6 = combo6.options[combo6.selectedIndex].text;
	var combo7 = document.getElementById("verifica2_calificador7");
	var selected7 = combo7.options[combo7.selectedIndex].text;
	var combo8 = document.getElementById("verifica2_calificador8");
	var selected8 = combo8.options[combo8.selectedIndex].text;
	var combo9 = document.getElementById("verifica2_calificador9");
	var selected9 = combo9.options[combo9.selectedIndex].text;
	var combo10 = document.getElementById("verifica2_calificador10");
	var selected10 = combo10.options[combo10.selectedIndex].text;
	var combo11 = document.getElementById("verifica2_calificador11");
	var selected11 = combo11.options[combo11.selectedIndex].text;
	var combo12 = document.getElementById("verifica2_calificador12");
	var selected12 = combo12.options[combo12.selectedIndex].text;
	var combo13 = document.getElementById("verifica2_calificador13");
	var selected13 = combo13.options[combo13.selectedIndex].text;
	var division = 0
	var suma2 = 0
	var arreglo2 = [selected6,selected7,selected8,selected9,selected10,selected11,selected12,selected13]
	for(var i =0;i<arreglo2.length;i++){
		if (arreglo2[i] == 'N/A' ) {
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
		$('#prom2').html(' ')
	}else {
		
	$('#prom2').html(promedio2.toFixed(2)+'%')
	}
});
$('#verifica2_calificador14,#verifica2_calificador15,#verifica2_calificador16,#verifica2_calificador17,#verifica2_calificador18').change(function(event) {
	var combo14 = document.getElementById("verifica2_calificador14");
	var selected14 = combo14.options[combo14.selectedIndex].text;
	var combo15 = document.getElementById("verifica2_calificador15");
	var selected15 = combo15.options[combo15.selectedIndex].text;
	var combo16 = document.getElementById("verifica2_calificador16");
	var selected16 = combo16.options[combo16.selectedIndex].text;
	var combo17 = document.getElementById("verifica2_calificador17");
	var selected17 = combo17.options[combo17.selectedIndex].text;
	var combo18 = document.getElementById("verifica2_calificador18");
	var selected18 = combo18.options[combo18.selectedIndex].text;
	var division = 0
	var suma3 = 0
	var arreglo3 = [selected14,selected15,selected16,selected17,selected18]
	for(var i =0;i<arreglo3.length;i++){
		if (arreglo3[i] == 'N/A' ) {
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
		$('#prom3').html(' ')
	}else {
		
	$('#prom3').html(promedio3.toFixed(2)+'%')
	}
});
$('#verifica2_calificador19,#verifica2_calificador20,#verifica2_calificador21').change(function(event) {
	var combo19 = document.getElementById("verifica2_calificador19");
	var selected19 = combo19.options[combo19.selectedIndex].text;
	var combo20 = document.getElementById("verifica2_calificador20");
	var selected20 = combo20.options[combo20.selectedIndex].text;
	var combo21 = document.getElementById("verifica2_calificador21");
	var selected21 = combo21.options[combo21.selectedIndex].text;
	var division = 0
	var suma4 = 0
	var arreglo4 = [selected19,selected20,selected21]
	for(var i =0;i<arreglo4.length;i++){
		if (arreglo4[i] == 'N/A' ) {
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
		$('#prom4').html(' ')
	}else {
		
	$('#prom4').html(promedio4.toFixed(2)+'%')
	}
});
$('#verifica2_calificador22').change(function(event) {
	var combo22 = document.getElementById("verifica2_calificador22");
	var selected22 = combo22.options[combo22.selectedIndex].text;

	var division = 0
	var suma5 = 0
	var arreglo5 = [selected22]
	for(var i =0;i<arreglo5.length;i++){
		if (arreglo5[i] == 'N/A' ) {
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
		$('#prom5').html(' ')
	}else {
		
	$('#prom5').html(promedio5.toFixed(2)+'%')
	}
});

$('#verifica2_calificador23,#verifica2_calificador24,#verifica2_calificador25,#verifica2_calificador26').change(function(event) {
	var combo23 = document.getElementById("verifica2_calificador23");
	var selected23 = combo23.options[combo23.selectedIndex].text;
	var combo24 = document.getElementById("verifica2_calificador24");
	var selected24 = combo24.options[combo24.selectedIndex].text;
	var combo25 = document.getElementById("verifica2_calificador25");
	var selected25 = combo25.options[combo25.selectedIndex].text;
	var combo26 = document.getElementById("verifica2_calificador26");
	var selected26 = combo26.options[combo26.selectedIndex].text;


	var division = 0
	var suma6 = 0
	var arreglo6 = [selected23,selected24,selected25,selected26]
	for(var i =0;i<arreglo6.length;i++){
		if (arreglo6[i] == 'N/A' ) {
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
		$('#prom6').html(' ')
	}else {
		
	$('#prom6').html(promedio6.toFixed(2)+'%')
	}

});
$('#verifica2_calificador27,#verifica2_calificador28,#verifica2_calificador29,#verifica2_calificador30,#verifica2_calificador31,#verifica2_calificador32').change(function(event) {
	var combo27 = document.getElementById("verifica2_calificador27");
	var selected27 = combo27.options[combo27.selectedIndex].text;
	var combo28 = document.getElementById("verifica2_calificador28");
	var selected28 = combo28.options[combo28.selectedIndex].text;
	var combo29 = document.getElementById("verifica2_calificador29");
	var selected29 = combo29.options[combo29.selectedIndex].text;
	var combo30 = document.getElementById("verifica2_calificador30");
	var selected30 = combo30.options[combo30.selectedIndex].text;
	var combo31 = document.getElementById("verifica2_calificador31");
	var selected31 = combo31.options[combo31.selectedIndex].text;
	var combo32 = document.getElementById("verifica2_calificador32");
	var selected32 = combo32.options[combo32.selectedIndex].text;


	var division = 0
	var suma7 = 0
	var arreglo7 = [selected27,selected28,selected29,selected30,selected31,selected32]
	for(var i =0;i<arreglo7.length;i++){
		if (arreglo7[i] == 'N/A' ) {
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
		$('#prom7').html(' ')
	}else {
		
	$('#prom7').html(promedio7.toFixed(2)+'%')
	}

});
$('#verifica2_calificador33,#verifica2_calificador34,#verifica2_calificador35').change(function(event) {
	var combo33 = document.getElementById("verifica2_calificador33");
	var selected33 = combo33.options[combo33.selectedIndex].text;
	var combo34 = document.getElementById("verifica2_calificador34");
	var selected34 = combo34.options[combo34.selectedIndex].text;
	var combo35 = document.getElementById("verifica2_calificador35");
	var selected35 = combo35.options[combo35.selectedIndex].text;

	var division = 0
	var suma8 = 0
	var arreglo8 = [selected33,selected34,selected35]
	for(var i =0;i<arreglo8.length;i++){
		if (arreglo8[i] == 'N/A' ) {
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
		$('#prom8').html(' ')
	}else {
		
	$('#prom8').html(promedio8.toFixed(2)+'%')
	}

});
$('#verifica2_calificador36,#verifica2_calificador37,#verifica2_calificador38').change(function(event) {
	var combo36 = document.getElementById("verifica2_calificador36");
	var selected36 = combo36.options[combo36.selectedIndex].text;
	var combo37 = document.getElementById("verifica2_calificador37");
	var selected37 = combo37.options[combo37.selectedIndex].text;
	var combo38 = document.getElementById("verifica2_calificador38");
	var selected38 = combo38.options[combo38.selectedIndex].text;

	var division = 0
	var suma9 = 0
	var arreglo9 = [selected36,selected37,selected38]
	for(var i =0;i<arreglo9.length;i++){
		if (arreglo9[i] == 'N/A' ) {
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
		$('#prom9').html(' ')
	}else {
		
	$('#prom9').html(promedio9.toFixed(2)+'%')
	}

});

$('#verifica2_calificador39,#verifica2_calificador40,#verifica2_calificador41,#verifica2_calificador42,#verifica2_calificador43,#verifica2_calificador44').change(function(event) {
	var combo39 = document.getElementById("verifica2_calificador39");
	var selected39 = combo39.options[combo39.selectedIndex].text;
	var combo40 = document.getElementById("verifica2_calificador40");
	var selected40 = combo40.options[combo40.selectedIndex].text;
	var combo41 = document.getElementById("verifica2_calificador41");
	var selected41 = combo41.options[combo41.selectedIndex].text;
	var combo42 = document.getElementById("verifica2_calificador42");
	var selected42 = combo42.options[combo42.selectedIndex].text;
	var combo43 = document.getElementById("verifica2_calificador43");
	var selected43 = combo43.options[combo43.selectedIndex].text;
	var combo44 = document.getElementById("verifica2_calificador44");
	var selected44 = combo44.options[combo44.selectedIndex].text;

	var division = 0
	var suma10 = 0
	var arreglo10 = [selected39,selected40,selected41,selected42,selected43,selected44]
	for(var i =0;i<arreglo10.length;i++){
		if (arreglo10[i] == 'N/A' ) {
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
		$('#prom10').html(' ')
	}else {
		
	$('#prom10').html(promedio10.toFixed(2)+'%')
	}

});
$('#verifica2_calificador45,#verifica2_calificador46').change(function(event) {
	var combo45 = document.getElementById("verifica2_calificador45");
	var selected45 = combo45.options[combo45.selectedIndex].text;
	var combo46 = document.getElementById("verifica2_calificador46");
	var selected46 = combo46.options[combo46.selectedIndex].text;

	var division = 0
	var suma11 = 0
	var arreglo11 = [selected45,selected46]
	for(var i =0;i<arreglo11.length;i++){
		if (arreglo11[i] == 'N/A' ) {
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
		$('#prom11').html(' ')
	}else {
		
	$('#prom11').html(promedio11.toFixed(2)+'%')
	}
});
// Promedios del Nivel 2
var promedio12 = 0
var promedio13 = 0
$('#verifica2_calificador47,#verifica2_calificador48').change(function(event) {
	var combo47 = document.getElementById("verifica2_calificador47");
	var selected47 = combo47.options[combo47.selectedIndex].text;
	var combo48 = document.getElementById("verifica2_calificador48");
	var selected48 = combo48.options[combo48.selectedIndex].text;

	var division = 0
	var suma12 = 0
	var arreglo12 = [selected47,selected48]
	for(var i =0;i<arreglo12.length;i++){
		if (arreglo12[i] == 'N/A' ) {
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
		$('#prom12').html(' ')
	}else {
		
	$('#prom12').html(promedio12.toFixed(2)+'%')
	}
});

$('#verifica2_calificador49,#verifica2_calificador50').change(function(event) {
	var combo49 = document.getElementById("verifica2_calificador49");
	var selected49 = combo49.options[combo49.selectedIndex].text;
	var combo50 = document.getElementById("verifica2_calificador50");
	var selected50 = combo50.options[combo50.selectedIndex].text;

	var division = 0
	var suma13 = 0
	var arreglo13 = [selected49,selected50]
	for(var i =0;i<arreglo13.length;i++){
		if (arreglo13[i] == 'N/A' ) {
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
		$('#prom13').html(' ')
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
	}else {	
	$('#total').html(prom_total.toFixed(2)+'%')
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
	var prom_total = suma_total/division
	if (isNaN(prom_total)) {
		$('#total2').html(' ')
	}else {	
	$('#total2').html(prom_total.toFixed(2)+'%')
	}

	if (Number(prom_total) < Number(50)) {
		$('#total2').removeClass('grey lighten-1')
		$('#total2').removeClass('green')
		$('#total2').addClass('red')
	}else {
		$('#total2').addClass('green')
	}
});




//------------------------------------ESTADISTICAS MODIFICAR
var promedio1 = $('#td1').val()
var promedio2 = $('#td2').val()
var promedio3 = $('#td3').val()
var promedio4 = $('#td4').val()
var promedio5 = $('#td5').val()
var promedio6 = $('#td6').val()
var promedio7 = $('#td7').val()
var promedio8 = $('#td8').val()
var promedio9 = $('#td9').val()
var promedio10 = $('#td10').val()
var promedio11 = $('#td11').val()
$('#verifica2_calificador_m5,#verifica2_calificador_m4,#verifica2_calificador_m3,#verifica2_calificador_m2,#verifica2_calificador_m1').change(function(event) {
	var combo1 = document.getElementById("verifica2_calificador_m1");
	var selected1 = combo1.options[combo1.selectedIndex].text;
	var combo2 = document.getElementById("verifica2_calificador_m2");
	var selected2 = combo2.options[combo2.selectedIndex].text;
	var combo3 = document.getElementById("verifica2_calificador_m3");
	var selected3 = combo3.options[combo3.selectedIndex].text;
	var combo4 = document.getElementById("verifica2_calificador_m4");
	var selected4 = combo4.options[combo4.selectedIndex].text;
	var combo5 = document.getElementById("verifica2_calificador_m5");
	var selected5 = combo5.options[combo5.selectedIndex].text;
	var division = 0
	var suma1 = 0
	var arreglo1 = [selected1,selected2,selected3,selected4,selected5]
	for(var i =0;i<arreglo1.length;i++){
		if (arreglo1[i] == 'N/A' ) {
		arreglo1[i] = 0
		division = division
	}else {
		division++
	}
	suma1 = suma1 + Number(arreglo1[i]);
	}
	 promedio1 = suma1/division*100
	if (isNaN(promedio1)) {
		// promedio1 = 0
		$('#prom1m').html('')
	}else {
		$('#prom1m').html(promedio1.toFixed(2)+'%')
	}
});

$('#verifica2_calificador_m6,#verifica2_calificador_m7,#verifica2_calificador_m8,#verifica2_calificador_m9,#verifica2_calificador_m10,#verifica2_calificador_m11,#verifica2_calificador_m12,#verifica2_calificador_m13').change(function(event) {
	var combo6 = document.getElementById("verifica2_calificador_m6");
	var selected6 = combo6.options[combo6.selectedIndex].text;
	var combo7 = document.getElementById("verifica2_calificador_m7");
	var selected7 = combo7.options[combo7.selectedIndex].text;
	var combo8 = document.getElementById("verifica2_calificador_m8");
	var selected8 = combo8.options[combo8.selectedIndex].text;
	var combo9 = document.getElementById("verifica2_calificador_m9");
	var selected9 = combo9.options[combo9.selectedIndex].text;
	var combo10 = document.getElementById("verifica2_calificador_m10");
	var selected10 = combo10.options[combo10.selectedIndex].text;
	var combo11 = document.getElementById("verifica2_calificador_m11");
	var selected11 = combo11.options[combo11.selectedIndex].text;
	var combo12 = document.getElementById("verifica2_calificador_m12");
	var selected12 = combo12.options[combo12.selectedIndex].text;
	var combo13 = document.getElementById("verifica2_calificador_m13");
	var selected13 = combo13.options[combo13.selectedIndex].text;
	var division = 0
	var suma2 = 0
	var arreglo2 = [selected6,selected7,selected8,selected9,selected10,selected11,selected12,selected13]
	for(var i =0;i<arreglo2.length;i++){
		if (arreglo2[i] == 'N/A' ) {
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
		$('#prom2m').html(' ')
	}else {
		
	$('#prom2m').html(promedio2.toFixed(2)+'%')
	}
});

$('#verifica2_calificador_m14,#verifica2_calificador_m15,#verifica2_calificador_m16,#verifica2_calificador_m17,#verifica2_calificador_m18').change(function(event) {
	var combo14 = document.getElementById("verifica2_calificador_m14");
	var selected14 = combo14.options[combo14.selectedIndex].text;
	var combo15 = document.getElementById("verifica2_calificador_m15");
	var selected15 = combo15.options[combo15.selectedIndex].text;
	var combo16 = document.getElementById("verifica2_calificador_m16");
	var selected16 = combo16.options[combo16.selectedIndex].text;
	var combo17 = document.getElementById("verifica2_calificador_m17");
	var selected17 = combo17.options[combo17.selectedIndex].text;
	var combo18 = document.getElementById("verifica2_calificador_m18");
	var selected18 = combo18.options[combo18.selectedIndex].text;
	var division = 0
	var suma3 = 0
	var arreglo3 = [selected14,selected15,selected16,selected17,selected18]
	for(var i =0;i<arreglo3.length;i++){
		if (arreglo3[i] == 'N/A' ) {
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
		$('#prom3m').html(' ')
	}else {
		
	$('#prom3m').html(promedio3.toFixed(2)+'%')
	}
});

$('#verifica2_calificador_m19,#verifica2_calificador_m20,#verifica2_calificador_m21').change(function(event) {
	var combo19 = document.getElementById("verifica2_calificador_m19");
	var selected19 = combo19.options[combo19.selectedIndex].text;
	var combo20 = document.getElementById("verifica2_calificador_m20");
	var selected20 = combo20.options[combo20.selectedIndex].text;
	var combo21 = document.getElementById("verifica2_calificador_m21");
	var selected21 = combo21.options[combo21.selectedIndex].text;
	var division = 0
	var suma4 = 0
	var arreglo4 = [selected19,selected20,selected21]
	for(var i =0;i<arreglo4.length;i++){
		if (arreglo4[i] == 'N/A' ) {
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
		$('#prom4m').html(' ')
	}else {
		
	$('#prom4m').html(promedio4.toFixed(2)+'%')
	}
});
$('#verifica2_calificador_m22').change(function(event) {
	var combo22 = document.getElementById("verifica2_calificador_m22");
	var selected22 = combo22.options[combo22.selectedIndex].text;

	var division = 0
	var suma5 = 0
	var arreglo5 = [selected22]
	for(var i =0;i<arreglo5.length;i++){
		if (arreglo5[i] == 'N/A' ) {
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
		$('#prom5m').html(' ')
	}else {
		
	$('#prom5m').html(promedio5.toFixed(2)+'%')
	}
});

$('#verifica2_calificador_m23,#verifica2_calificador_m24,#verifica2_calificador_m25,#verifica2_calificador_m26').change(function(event) {
	var combo23 = document.getElementById("verifica2_calificador_m23");
	var selected23 = combo23.options[combo23.selectedIndex].text;
	var combo24 = document.getElementById("verifica2_calificador_m24");
	var selected24 = combo24.options[combo24.selectedIndex].text;
	var combo25 = document.getElementById("verifica2_calificador_m25");
	var selected25 = combo25.options[combo25.selectedIndex].text;
	var combo26 = document.getElementById("verifica2_calificador_m26");
	var selected26 = combo26.options[combo26.selectedIndex].text;


	var division = 0
	var suma6 = 0
	var arreglo6 = [selected23,selected24,selected25,selected26]
	for(var i =0;i<arreglo6.length;i++){
		if (arreglo6[i] == 'N/A' ) {
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
		$('#prom6m').html(' ')
	}else {
		
	$('#prom6m').html(promedio6.toFixed(2)+'%')
	}

});
$('#verifica2_calificador_m27,#verifica2_calificador_m28,#verifica2_calificador_m29,#verifica2_calificador_m30,#verifica2_calificador_m31,#verifica2_calificador_m32').change(function(event) {
	var combo27 = document.getElementById("verifica2_calificador_m27");
	var selected27 = combo27.options[combo27.selectedIndex].text;
	var combo28 = document.getElementById("verifica2_calificador_m28");
	var selected28 = combo28.options[combo28.selectedIndex].text;
	var combo29 = document.getElementById("verifica2_calificador_m29");
	var selected29 = combo29.options[combo29.selectedIndex].text;
	var combo30 = document.getElementById("verifica2_calificador_m30");
	var selected30 = combo30.options[combo30.selectedIndex].text;
	var combo31 = document.getElementById("verifica2_calificador_m31");
	var selected31 = combo31.options[combo31.selectedIndex].text;
	var combo32 = document.getElementById("verifica2_calificador_m32");
	var selected32 = combo32.options[combo32.selectedIndex].text;


	var division = 0
	var suma7 = 0
	var arreglo7 = [selected27,selected28,selected29,selected30,selected31,selected32]
	for(var i =0;i<arreglo7.length;i++){
		if (arreglo7[i] == 'N/A' ) {
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
		$('#prom7m').html(' ')
	}else {
		
	$('#prom7m').html(promedio7.toFixed(2)+'%')
	}

});
$('#verifica2_calificador_m33,#verifica2_calificador_m34,#verifica2_calificador_m35').change(function(event) {
	var combo33 = document.getElementById("verifica2_calificador_m33");
	var selected33 = combo33.options[combo33.selectedIndex].text;
	var combo34 = document.getElementById("verifica2_calificador_m34");
	var selected34 = combo34.options[combo34.selectedIndex].text;
	var combo35 = document.getElementById("verifica2_calificador_m35");
	var selected35 = combo35.options[combo35.selectedIndex].text;

	var division = 0
	var suma8 = 0
	var arreglo8 = [selected33,selected34,selected35]
	for(var i =0;i<arreglo8.length;i++){
		if (arreglo8[i] == 'N/A' ) {
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
		$('#prom8m').html(' ')
	}else {
		
	$('#prom8m').html(promedio8.toFixed(2)+'%')
	}

});
$('#verifica2_calificador_m36,#verifica2_calificador_m37,#verifica2_calificador_m38').change(function(event) {
	var combo36 = document.getElementById("verifica2_calificador_m36");
	var selected36 = combo36.options[combo36.selectedIndex].text;
	var combo37 = document.getElementById("verifica2_calificador_m37");
	var selected37 = combo37.options[combo37.selectedIndex].text;
	var combo38 = document.getElementById("verifica2_calificador_m38");
	var selected38 = combo38.options[combo38.selectedIndex].text;

	var division = 0
	var suma9 = 0
	var arreglo9 = [selected36,selected37,selected38]
	for(var i =0;i<arreglo9.length;i++){
		if (arreglo9[i] == 'N/A' ) {
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
		$('#prom9m').html(' ')
	}else {
		
	$('#prom9m').html(promedio9.toFixed(2)+'%')
	}

});

$('#verifica2_calificador_m39,#verifica2_calificador_m40,#verifica2_calificador_m41,#verifica2_calificador_m42,#verifica2_calificador_m43,#verifica2_calificador_m44').change(function(event) {
	var combo39 = document.getElementById("verifica2_calificador_m39");
	var selected39 = combo39.options[combo39.selectedIndex].text;
	var combo40 = document.getElementById("verifica2_calificador_m40");
	var selected40 = combo40.options[combo40.selectedIndex].text;
	var combo41 = document.getElementById("verifica2_calificador_m41");
	var selected41 = combo41.options[combo41.selectedIndex].text;
	var combo42 = document.getElementById("verifica2_calificador_m42");
	var selected42 = combo42.options[combo42.selectedIndex].text;
	var combo43 = document.getElementById("verifica2_calificador_m43");
	var selected43 = combo43.options[combo43.selectedIndex].text;
	var combo44 = document.getElementById("verifica2_calificador_m44");
	var selected44 = combo44.options[combo44.selectedIndex].text;

	var division = 0
	var suma10 = 0
	var arreglo10 = [selected39,selected40,selected41,selected42,selected43,selected44]
	for(var i =0;i<arreglo10.length;i++){
		if (arreglo10[i] == 'N/A' ) {
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
		$('#prom10m').html(' ')
	}else {
		
	$('#prom10m').html(promedio10.toFixed(2)+'%')
	}

});
$('#verifica2_calificador_m45,#verifica2_calificador_m46').change(function(event) {
	var combo45 = document.getElementById("verifica2_calificador_m45");
	var selected45 = combo45.options[combo45.selectedIndex].text;
	var combo46 = document.getElementById("verifica2_calificador_m46");
	var selected46 = combo46.options[combo46.selectedIndex].text;

	var division = 0
	var suma11 = 0
	var arreglo11 = [selected45,selected46]
	for(var i =0;i<arreglo11.length;i++){
		if (arreglo11[i] == 'N/A' ) {
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
		$('#prom11m').html(' ')
	}else {
		
	$('#prom11m').html(promedio11.toFixed(2)+'%')
	}
});

// Promedios del Nivel 2

var promedio12 = $('#td12').val()
var promedio13 = $('#td13').val()
$('#verifica2_calificador_m47,#verifica2_calificador_m48').change(function(event) {
	var combo47 = document.getElementById("verifica2_calificador_m47");
	var selected47 = combo47.options[combo47.selectedIndex].text;
	var combo48 = document.getElementById("verifica2_calificador_m48");
	var selected48 = combo48.options[combo48.selectedIndex].text;

	var division = 0
	var suma12 = 0
	var arreglo12 = [selected47,selected48]
	for(var i =0;i<arreglo12.length;i++){
		if (arreglo12[i] == 'N/A' ) {
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
		$('#prom12m').html(' ')
	}else {
		
	$('#prom12m').html(promedio12.toFixed(2)+'%')
	}
});

$('#verifica2_calificador_m49,#verifica2_calificador_m50').change(function(event) {
	var combo49 = document.getElementById("verifica2_calificador_m49");
	var selected49 = combo49.options[combo49.selectedIndex].text;
	var combo50 = document.getElementById("verifica2_calificador_m50");
	var selected50 = combo50.options[combo50.selectedIndex].text;

	var division = 0
	var suma13 = 0
	var arreglo13 = [selected49,selected50]
	for(var i =0;i<arreglo13.length;i++){
		if (arreglo13[i] == 'N/A' ) {
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
		$('#prom13m').html(' ')
	}else {
		
	$('#prom13m').html(promedio13.toFixed(2)+'%')
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
		$('#totalm').html(' ')
	}else {	
	$('#totalm').html(prom_total.toFixed(2)+'%')
	}

	if (Number(prom_total) < Number(50)) {
		$('#totalm').removeClass('grey lighten-1')
		$('#totalm').removeClass('green')
		$('#totalm').addClass('red')
	}else {
		$('#totalm').addClass('green')
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
	var prom_total = suma_total/division
	if (isNaN(prom_total)) {
		$('#total2m').html(' ')
	}else {	
	$('#total2m').html(prom_total.toFixed(2)+'%')
	}

	if (Number(prom_total) < Number(50)) {
		$('#total2m').removeClass('grey lighten-1')
		$('#total2m').removeClass('green')
		$('#total2m').addClass('red')
	}else {
		$('#total2m').addClass('green')
	}
});