//------------------------------------ESTADISTICAS MODIFICAR
$('#empresa_m').select2();
//-----------------------------------Cargar formulario----------------------------------
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_2/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
		beforeSend: function() {
			$('#form_modificar_verificacion2').hide()
			$('#preload').addClass('progress')

   	
    },
    success: function(respuesta) {
    	$('#form_modificar_verificacion2').show()
    	$('#preload').removeClass('progress')
    	$('#cargar_info').html(respuesta)
    }
	})
});

// ------------------------------Modificar
$('#form_modificar_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa_m').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
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
	  	//$('#modificar_verificacion2').attr('disabled', 'disabled');
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
    	//setTimeout("document.location=document.location",1500);
    }
	 })
	 // .done(function(respuesta) {
	 // 	console.log(respuesta);
	 // }) 
}
});
// Estadisticas
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
$('#calificador_m19,#calificador_m18,#calificador_m17,#calificador_m16,#calificador_m15,#calificador_m14,#calificador_m13,#calificador_m12,#calificador_m11').change(function(event) {

	var combo1 = document.getElementById("calificador_m11");
	var selected1 = combo1.options[combo1.selectedIndex].text;
	var combo2 = document.getElementById("calificador_m12");
	var selected2 = combo2.options[combo2.selectedIndex].text;
	var combo3 = document.getElementById("calificador_m13");
	var selected3 = combo3.options[combo3.selectedIndex].text;
	var combo4 = document.getElementById("calificador_m14");
	var selected4 = combo4.options[combo4.selectedIndex].text;
	var combo5 = document.getElementById("calificador_m15");
	var selected5 = combo5.options[combo5.selectedIndex].text;
	var combo6 = document.getElementById("calificador_m16");
	var selected6 = combo6.options[combo6.selectedIndex].text;
	var combo7 = document.getElementById("calificador_m17");
	var selected7 = combo7.options[combo7.selectedIndex].text;
	var combo8 = document.getElementById("calificador_m18");
	var selected8 = combo8.options[combo8.selectedIndex].text;
	var combo9 = document.getElementById("calificador_m19");
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
		$('#prom1m').html('0.00%')
	}else {
		$('#prom1m').html(promedio1.toFixed(2)+'%')
	}
	
	
});

$('#calificador_m21,#calificador_m22,#vcalificador_m23,#calificador_m24').change(function(event) {
	var combo10 = document.getElementById("calificador_m21");
	var selected10 = combo10.options[combo10.selectedIndex].text;
	var combo11 = document.getElementById("calificador_m22");
	var selected11 = combo11.options[combo11.selectedIndex].text;
	var combo12 = document.getElementById("calificador_m23");
	var selected12 = combo12.options[combo12.selectedIndex].text;
	var combo13 = document.getElementById("calificador_m24");
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
		$('#prom2m').html('0.00%')
	}else {
		
	$('#prom2m').html(promedio2.toFixed(2)+'%')
	}
});


$('#calificador_m31,#calificador_m32,#calificador_m33').change(function(event) {
	var combo31 = document.getElementById("calificador_m31");
	var selected31 = combo31.options[combo31.selectedIndex].text;
	var combo32 = document.getElementById("calificador_m32");
	var selected32 = combo32.options[combo32.selectedIndex].text;
	var combo33 = document.getElementById("calificador_m33");
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
		$('#prom3m').html('0.00%')
	}else {
		
	$('#prom3m').html(promedio3.toFixed(2)+'%')
	}
});

$('#calificador_m41,#calificador_m42').change(function(event) {
	var combo41 = document.getElementById("calificador_m41");
	var selected41 = combo41.options[combo41.selectedIndex].text;
	var combo42 = document.getElementById("calificador_m42");
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
		$('#prom4m').html('0.00%')
	}else {
		
	$('#prom4m').html(promedio4.toFixed(2)+'%')
	}
});


$('#calificador_m51,#calificador_m52').change(function(event) {
	var combo51 = document.getElementById("calificador_m51");
	var selected51 = combo51.options[combo51.selectedIndex].text;
	var combo52 = document.getElementById("calificador_m52");
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
		$('#prom5m').html('0.00%')
	}else {
		
	$('#prom5m').html(promedio5.toFixed(2)+'%')
	}
});


$('#calificador_m61,#calificador_m62,#calificador_m63').change(function(event) {
	var combo61 = document.getElementById("calificador_m61");
	var selected61 = combo61.options[combo61.selectedIndex].text;
	var combo62 = document.getElementById("calificador_m62");
	var selected62 = combo62.options[combo62.selectedIndex].text;
	var combo63 = document.getElementById("calificador_m63");
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
		$('#prom6m').html('0.00%')
	}else {
		
	$('#prom6m').html(promedio6.toFixed(2)+'%')
	}

});


$('#calificador_m71,#calificador_m72,#calificador_m73').change(function(event) {
	var combo71 = document.getElementById("calificador_m71");
	var selected71 = combo71.options[combo71.selectedIndex].text;
	var combo72 = document.getElementById("calificador_m72");
	var selected72 = combo72.options[combo72.selectedIndex].text;
	var combo73 = document.getElementById("calificador_m73");
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
		$('#prom7m').html('0.00%')
	}else {
		
	$('#prom7m').html(promedio7.toFixed(2)+'%')
	}

});


$('#calificador_m81,#calificador_m82,#calificador_m83,#calificador_m84').change(function(event) {
	var combo81 = document.getElementById("calificador_m81");
	var selected81 = combo81.options[combo81.selectedIndex].text;
	var combo82 = document.getElementById("calificador_m82");
	var selected82 = combo82.options[combo82.selectedIndex].text;
	var combo83 = document.getElementById("calificador_m83");
	var selected83 = combo83.options[combo83.selectedIndex].text;
	var combo84 = document.getElementById("calificador_m84");
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
		$('#prom8m').html('0.00%')
	}else {
		
	$('#prom8m').html(promedio8.toFixed(2)+'%')
	}

});
$('#calificador_m91,#calificador_m92,#calificador_m93').change(function(event) {
	var combo91 = document.getElementById("calificador_m91");
	var selected91 = combo91.options[combo91.selectedIndex].text;
	var combo92 = document.getElementById("calificador_m92");
	var selected92 = combo92.options[combo92.selectedIndex].text;
	var combo93 = document.getElementById("calificador_m93");
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
		$('#prom9m').html('0.00%')
	}else {
		
	$('#prom9m').html(promedio9.toFixed(2)+'%')
	}

});

$('#calificador_m101,#calificador_m102,#calificador_m103,#calificador_m104,#calificador_m105,#calificador_m106').change(function(event) {
	var combo101 = document.getElementById("calificador_m101");
	var selected101 = combo101.options[combo101.selectedIndex].text;
	var combo102 = document.getElementById("calificador_m102");
	var selected102 = combo102.options[combo102.selectedIndex].text;
	var combo103 = document.getElementById("calificador_m103");
	var selected103 = combo103.options[combo103.selectedIndex].text;
	var combo104 = document.getElementById("calificador_m104");
	var selected104 = combo104.options[combo104.selectedIndex].text;
	var combo105 = document.getElementById("calificador_m105");
	var selected105 = combo105.options[combo105.selectedIndex].text;
	var combo106 = document.getElementById("calificador_m106");
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
		$('#prom10m').html('0.00%')
	}else {
		
	$('#prom10m').html(promedio10.toFixed(2)+'%')
	}

});

$('#calificador_m111,#calificador_m112,#calificador_m113').change(function(event) {
	var combo111 = document.getElementById("calificador_m111");
	var selected111 = combo111.options[combo111.selectedIndex].text;
	var combo112 = document.getElementById("calificador_m112");
	var selected112 = combo112.options[combo112.selectedIndex].text;
	var combo113 = document.getElementById("calificador_m113");
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
		$('#prom11m').html('0.00%')
	}else {
		
	$('#prom11m').html(promedio11.toFixed(2)+'%')
	}
});



// Promedios del Nivel 2
var promedio12 = 0
var promedio13 = 0
$('#calificador_m121,#calificador_m122').change(function(event) {
	var combo121 = document.getElementById("calificador_m121");
	var selected121 = combo121.options[combo121.selectedIndex].text;
	var combo122 = document.getElementById("calificador_m122");
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
		$('#prom12m').html('0.00%')
	}else {
		
	$('#prom12m').html(promedio12.toFixed(2)+'%')
	}
});

$('#calificador_m131,#calificador_m132,#calificador_m133').change(function(event) {
	var combo131 = document.getElementById("calificador_m131");
	var selected131 = combo131.options[combo131.selectedIndex].text;
	var combo132 = document.getElementById("calificador_m132");
	var selected132 = combo132.options[combo132.selectedIndex].text;
	var combo133 = document.getElementById("calificador_m133");
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
		$('#prom13m').html('0.00%')
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
		$('#puntaje1m').html('0.00%')
	}else {	
	$('#totalm').html(prom_total.toFixed(2)+'%')
	$('#puntaje1m').html(prom_total.toFixed(2)+'%')
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
	var prom_total2 = suma_total/division
	if (isNaN(prom_total2)) {
		$('#total2m').html(' ')
		$('#puntaje2m').html('0.00%')
	}else {	
	$('#total2m').html(prom_total2.toFixed(2)+'%')
		$('#puntaje2m').html(prom_total2.toFixed(2)+'%')
	}

	if (Number(prom_total2) < Number(50)) {
		$('#total2m').removeClass('grey lighten-1')
		$('#total2m').removeClass('green')
		$('#total2m').addClass('red')
	}else {
		$('#total2m').addClass('green')
	}

	var sum_puntaje = Number(prom_total) + Number(prom_total2);
	var resultado = sum_puntaje/2;
	if (isNaN(resultado)) {
		$('#resultado_m').html('0.00%')
	}
	// else {	
	// $('#resultado_m').html(resultado.toFixed(2)+'%')
	// }
	if (prom_total >= 0 && prom_total <= 10) {
		$('#resultado_m').html('Inicial')
	}else if (prom_total > 10 && prom_total <= 30) {
		$('#resultado_m').html('Básico')
	}else if (prom_total > 30 && prom_total <= 50) {
		$('#resultado_m').html('Intermedio')
	}else if (prom_total > 50 && prom_total <= 80) {
		$('#resultado_m').html('Satisfactorio')
	}else if (prom_total > 80 && prom_total <= 100 && prom_total2 < 50) {
		$('#resultado_m').html('Avanzado')
	}else if (prom_total > 80 && prom_total <= 100 && prom_total2 >= 50 ) {
		$('#resultado_m').html('Ideal')
	}
	$('#prom_form_m').val(prom_total)
});
	