$(document).ready(function() {

var i = 1

$('#empresa').select2();
$('#empresa_m').select2();

// impacto ambiental
$('[name="impacto_amb[]"]#impacto_amb1').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no1').removeAttr('disabled');
      $('#impacto_amb_si_no1').material_select();

    } else {
      $('#impacto_amb_si_no1').attr('disabled','disabled');
      $('#impacto_amb_si_no1').material_select();
    }
});

$('[name="impacto_amb[]"]#impacto_amb2').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no2').removeAttr('disabled');
      $('#impacto_amb_si_no2').material_select();

    } else {
      $('#impacto_amb_si_no2').attr('disabled','disabled');
      $('#impacto_amb_si_no2').material_select();
    }
});

$('[name="impacto_amb[]"]#impacto_amb3').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no3').removeAttr('disabled');
      $('#impacto_amb_si_no3').material_select();

    } else {
      $('#impacto_amb_si_no3').attr('disabled','disabled');
      $('#impacto_amb_si_no3').material_select();
    }
});

$('[name="impacto_amb[]"]#impacto_amb4').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no4').removeAttr('disabled');
      $('#impacto_amb_si_no4').material_select();

    } else {
      $('#impacto_amb_si_no4').attr('disabled','disabled');
      $('#impacto_amb_si_no4').material_select();
    }
});

$('[name="impacto_amb[]"]#impacto_amb5').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no5').removeAttr('disabled');
      $('#impacto_amb_si_no5').material_select();

    } else {
      $('#impacto_amb_si_no5').attr('disabled','disabled');
      $('#impacto_amb_si_no5').material_select();
    }
});


$('[name="impacto_amb[]"]#impacto_amb6').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no6').removeAttr('disabled');
      $('#impacto_amb_si_no6').material_select();

    } else {
      $('#impacto_amb_si_no6').attr('disabled','disabled');
      $('#impacto_amb_si_no6').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb7').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no7').removeAttr('disabled');
      $('#impacto_amb_si_no7').material_select();

    } else {
      $('#impacto_amb_si_no7').attr('disabled','disabled');
      $('#impacto_amb_si_no7').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb8').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no8').removeAttr('disabled');
      $('#impacto_amb_si_no8').material_select();

    } else {
      $('#impacto_amb_si_no8').attr('disabled','disabled');
      $('#impacto_amb_si_no8').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb9').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no9').removeAttr('disabled');
      $('#impacto_amb_si_no9').material_select();

    } else {
      $('#impacto_amb_si_no9').attr('disabled','disabled');
      $('#impacto_amb_si_no9').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb10').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no10').removeAttr('disabled');
      $('#impacto_amb_si_no10').material_select();

    } else {
      $('#impacto_amb_si_no10').attr('disabled','disabled');
      $('#impacto_amb_si_no10').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb11').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no11').removeAttr('disabled');
      $('#impacto_amb_si_no11').material_select();

    } else {
      $('#impacto_amb_si_no11').attr('disabled','disabled');
      $('#impacto_amb_si_no11').material_select();
    }
});
$('[name="impacto_amb[]"]#impacto_amb12').click(function() {
    if($(this).is(':checked')) {
      $('#impacto_amb_si_no12').removeAttr('disabled');
      $('#impacto_amb_si_no12').material_select();

    } else {
      $('#impacto_amb_si_no12').attr('disabled','disabled');
      $('#impacto_amb_si_no12').material_select();
    }
});



// Buenas practicas
$('[name="b_practicas[]"]#b_practicas1').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no1').removeAttr('disabled');
      $('#b_practicas_si_no1').material_select();

    } else {
      $('#b_practicas_si_no1').attr('disabled','disabled');
      $('#b_practicas_si_no1').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas2').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no2').removeAttr('disabled');
      $('#b_practicas_si_no2').material_select();

    } else {
      $('#b_practicas_si_no2').attr('disabled','disabled');
      $('#b_practicas_si_no2').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas3').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no3').removeAttr('disabled');
      $('#b_practicas_si_no3').material_select();

    } else {
      $('#b_practicas_si_no3').attr('disabled','disabled');
      $('#b_practicas_si_no3').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas4').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no4').removeAttr('disabled');
      $('#b_practicas_si_no4').material_select();

    } else {
      $('#b_practicas_si_no4').attr('disabled','disabled');
      $('#b_practicas_si_no4').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas5').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no5').removeAttr('disabled');
      $('#b_practicas_si_no5').material_select();

    } else {
      $('#b_practicas_si_no5').attr('disabled','disabled');
      $('#b_practicas_si_no5').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas6').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no6').removeAttr('disabled');
      $('#b_practicas_si_no6').material_select();

    } else {
      $('#b_practicas_si_no6').attr('disabled','disabled');
      $('#b_practicas_si_no6').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas7').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no7').removeAttr('disabled');
      $('#b_practicas_si_no7').material_select();

    } else {
      $('#b_practicas_si_no7').attr('disabled','disabled');
      $('#b_practicas_si_no7').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas8').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no8').removeAttr('disabled');
      $('#b_practicas_si_no8').material_select();

    } else {
      $('#b_practicas_si_no8').attr('disabled','disabled');
      $('#b_practicas_si_no8').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas9').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no9').removeAttr('disabled');
      $('#b_practicas_si_no9').material_select();

    } else {
      $('#b_practicas_si_no9').attr('disabled','disabled');
      $('#b_practicas_si_no9').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas10').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no10').removeAttr('disabled');
      $('#b_practicas_si_no10').material_select();

    } else {
      $('#b_practicas_si_no10').attr('disabled','disabled');
      $('#b_practicas_si_no10').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas11').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no11').removeAttr('disabled');
      $('#b_practicas_si_no11').material_select();

    } else {
      $('#b_practicas_si_no11').attr('disabled','disabled');
      $('#b_practicas_si_no11').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas12').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no12').removeAttr('disabled');
      $('#b_practicas_si_no12').material_select();

    } else {
      $('#b_practicas_si_no12').attr('disabled','disabled');
      $('#b_practicas_si_no12').material_select();
    }
});
$('[name="b_practicas[]"]#b_practicas13').click(function() {
    if($(this).is(':checked')) {
      $('#b_practicas_si_no13').removeAttr('disabled');
      $('#b_practicas_si_no13').material_select();

    } else {
      $('#b_practicas_si_no13').attr('disabled','disabled');
      $('#b_practicas_si_no13').material_select();
    }
});
// Area de conservacion

$('[name="conservacion[]"]#conservacion1').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area1').removeAttr('disabled');
    } else {
      $('#conservacion_area1').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion2').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area2').removeAttr('disabled');
    } else {
      $('#conservacion_area2').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion3').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area3').removeAttr('disabled');
    } else {
      $('#conservacion_area3').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion4').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area4').removeAttr('disabled');
    } else {
      $('#conservacion_area4').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion5').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area5').removeAttr('disabled');
    } else {
      $('#conservacion_area5').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion6').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area6').removeAttr('disabled');
    } else {
      $('#conservacion_area6').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion7').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area7').removeAttr('disabled');
    } else {
      $('#conservacion_area7').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion8').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area8').removeAttr('disabled');
    } else {
      $('#conservacion_area8').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion9').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area9').removeAttr('disabled');
    } else {
      $('#conservacion_area9').attr('disabled','disabled');
    }
});
$('[name="conservacion[]"]#conservacion10').click(function() {
    if($(this).is(':checked')) {
      $('#conservacion_area10').removeAttr('disabled');
    } else {
      $('#conservacion_area10').attr('disabled','disabled');
    }
});




//certificacion habilitar al seleccionar el check
 $('[name="certificacion[]"]#certificacion1').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa1').removeAttr('disabled');
       $('#certificacion_etapa1').material_select();
       $('#certificacion_vigencia1').removeAttr('disabled');
        $('#certificacion_observacion1').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa1').attr('disabled','disabled');
         $('#certificacion_etapa1').material_select();
        $('#certificacion_vigencia1').attr('disabled','disabled');
        $('#certificacion_observacion1').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion2').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa2').removeAttr('disabled');
       $('#certificacion_etapa2').material_select();
       $('#certificacion_vigencia2').removeAttr('disabled');
        $('#certificacion_observacion2').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa2').attr('disabled','disabled');
         $('#certificacion_etapa2').material_select();
        $('#certificacion_vigencia2').attr('disabled','disabled');
        $('#certificacion_observacion2').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion3').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa3').removeAttr('disabled');
       $('#certificacion_etapa3').material_select();
       $('#certificacion_vigencia3').removeAttr('disabled');
        $('#certificacion_observacion3').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa3').attr('disabled','disabled');
         $('#certificacion_etapa3').material_select();
        $('#certificacion_vigencia3').attr('disabled','disabled');
        $('#certificacion_observacion3').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion4').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa4').removeAttr('disabled');
       $('#certificacion_etapa4').material_select();
       $('#certificacion_vigencia4').removeAttr('disabled');
        $('#certificacion_observacion4').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa4').attr('disabled','disabled');
         $('#certificacion_etapa4').material_select();
        $('#certificacion_vigencia4').attr('disabled','disabled');
        $('#certificacion_observacion4').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion5').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa5').removeAttr('disabled');
       $('#certificacion_etapa5').material_select();
       $('#certificacion_vigencia5').removeAttr('disabled');
        $('#certificacion_observacion5').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa5').attr('disabled','disabled');
         $('#certificacion_etapa5').material_select();
        $('#certificacion_vigencia5').attr('disabled','disabled');
        $('#certificacion_observacion5').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion6').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa6').removeAttr('disabled');
       $('#certificacion_etapa6').material_select();
       $('#certificacion_vigencia6').removeAttr('disabled');
        $('#certificacion_observacion6').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa6').attr('disabled','disabled');
         $('#certificacion_etapa6').material_select();
        $('#certificacion_vigencia6').attr('disabled','disabled');
        $('#certificacion_observacion6').attr('disabled','disabled');
     }
 })
 $('[name="certificacion[]"]#certificacion7').click(function() {
     if($(this).is(':checked')) {
 
       $('#certificacion_etapa7').removeAttr('disabled');
       $('#certificacion_etapa7').material_select();
       $('#certificacion_vigencia7').removeAttr('disabled');
        $('#certificacion_observacion7').removeAttr('disabled');
 
     } else {
        $('#certificacion_etapa7').attr('disabled','disabled');
         $('#certificacion_etapa7').material_select();
        $('#certificacion_vigencia7').attr('disabled','disabled');
        $('#certificacion_observacion7').attr('disabled','disabled');
     }
 })


 
 //actividades habilitar al seleccionar el check

 $('[name="actividades[]"]#actividades1').click(function() {
     if($(this).is(':checked')) {
 
       $('#actividades_recurso1').removeAttr('disabled');
       $('#actividades_recurso1').material_select();
       $('#actividades_desc1').removeAttr('disabled');
       
 
     } else {
        $('#actividades_recurso1').attr('disabled','disabled');
        $('#actividades_recurso1').material_select();
        $('#actividades_desc1').attr('disabled','disabled');
        
     }
 })

 $('[name="actividades[]"]#actividades2').click(function() {
     if($(this).is(':checked')) {
 
       $('#actividades_recurso2').removeAttr('disabled');
       $('#actividades_recurso2').material_select();
       $('#actividades_desc2').removeAttr('disabled');
       
 
     } else {
        $('#actividades_recurso2').attr('disabled','disabled');
        $('#actividades_recurso2').material_select();
        $('#actividades_desc2').attr('disabled','disabled');
        
     }
 })
 $('[name="actividades[]"]#actividades3').click(function() {
     if($(this).is(':checked')) {
 
       $('#actividades_recurso3').removeAttr('disabled');
       $('#actividades_recurso3').material_select();
       $('#actividades_desc3').removeAttr('disabled');
       
 
     } else {
        $('#actividades_recurso3').attr('disabled','disabled');
        $('#actividades_recurso3').material_select();
        $('#actividades_desc3').attr('disabled','disabled');
        
     }
 })
 $('[name="actividades[]"]#actividades4').click(function() {
     if($(this).is(':checked')) {
 
       $('#actividades_recurso4').removeAttr('disabled');
       $('#actividades_recurso4').material_select();
       $('#actividades_desc4').removeAttr('disabled');
       
 
     } else {
        $('#actividades_recurso4').attr('disabled','disabled');
        $('#actividades_recurso4').material_select();
        $('#actividades_desc4').attr('disabled','disabled');
        
     }
 })


//programa habilitar al seleccionar el check
 $('[name="programa[]"]#programa1').click(function() {
     if($(this).is(':checked')) {
 
       $('#programa_recurso1').removeAttr('disabled');
       $('#programa_recurso1').material_select();
       $('#programa_desc1').removeAttr('disabled');
       
 
     } else {
        $('#programa_recurso1').attr('disabled','disabled');
        $('#programa_recurso1').material_select();
        $('#programa_desc1').attr('disabled','disabled');
        
     }
 })
 $('[name="programa[]"]#programa2').click(function() {
     if($(this).is(':checked')) {
 
       $('#programa_recurso2').removeAttr('disabled');
       $('#programa_recurso2').material_select();
       $('#programa_desc2').removeAttr('disabled');
       
 
     } else {
        $('#programa_recurso2').attr('disabled','disabled');
        $('#programa_recurso2').material_select();
        $('#programa_desc2').attr('disabled','disabled');
        
     }
 })
 $('[name="programa[]"]#programa3').click(function() {
     if($(this).is(':checked')) {
 
       $('#programa_recurso3').removeAttr('disabled');
       $('#programa_recurso3').material_select();
       $('#programa_desc3').removeAttr('disabled');
       
 
     } else {
        $('#programa_recurso3').attr('disabled','disabled');
        $('#programa_recurso3').material_select();
        $('#programa_desc3').attr('disabled','disabled');
        
     }
 })
 $('[name="programa[]"]#programa4').click(function() {
     if($(this).is(':checked')) {
 
       $('#programa_recurso4').removeAttr('disabled');
       $('#programa_recurso4').material_select();
       $('#programa_desc4').removeAttr('disabled');
       
 
     } else {
        $('#programa_recurso4').attr('disabled','disabled');
        $('#programa_recurso4').material_select();
        $('#programa_desc4').attr('disabled','disabled');
        
     }
 })

 //verificar si selecciona si en certificacion
$('#contenido_certificacion').hide()
$('#accedio_certificacion, #proceso_certificacion').change(function(event) {
  if ($('#accedio_certificacion').val() != 1 && $('#proceso_certificacion').val() != 1 ) {
    $('#contenido_certificacion').hide()
  }else {
    $('#contenido_certificacion').show()
  }
});

//verificar si selecciona si en la cadena de valor
$('#cadena_contenido').hide()
$('#cadena_si_no').change(function(event) {
  if ($(this).val() == 1) {
    $('#cadena_contenido').show()
  }else {
    $('#cadena_contenido').hide()
  }
});

//verificar si selecciona si en la turismo
$('#turismo_contenido').hide()
$('#turismo_si_no').change(function(event) {
  if ($(this).val() == 1) {
    $('#turismo_contenido').show()
  }else {
    $('#turismo_contenido').hide()
  }
});

var total_empleado = 0
var total_directo = 0
var total_indirecto = 0
var total_temporal = 0
var total_18_30 = 0
var total_30_50 = 0
var total_mayor50 = 0
var total_discapacitado = 0
var total_madre = 0
var total_adulto = 0
var total_indigena = 0
var total_negra = 0
var total_campesino = 0
var total_reinsertado = 0
var total_victima = 0
var total_vulnerable = 0
var total_otro_vulnerablidad = 0
var total_primaria = 0
var total_bachillerato = 0
var total_tecnico = 0
var total_tecnologo = 0
var total_universitario = 0
var total_otro_nivel = 0
var total_temporada_alta = 0
var total_temporada_baja = 0

var total_s_discapacitado = 0
var total_s_madre = 0
var total_s_adulto = 0
var total_s_indigena = 0
var total_s_negra = 0
var total_s_campesino = 0
var total_s_reinsertado = 0
var total_s_victima = 0
var total_s_vulnerable = 0
var total_s_vunerable_otro = 0

//validacion de total de empleados
$('.key_total_empleados').keyup(function(event) {
 total_empleado = Number( $('#t_masculino').val()) + Number($('#t_femenino').val())
 $('#t_empleados').val(total_empleado)
});
//validacion total directos
$('.key_directo').keyup(function(event) {
 total_directo = Number( $('#directo_m').val()) + Number($('#directo_f').val())
 $('#t_directo').val(total_directo)
});
//validacion total indirecto
$('.key_indirecto').keyup(function(event) {
 total_indirecto = Number($('#indirecto_m').val()) + Number($('#indirecto_f').val())
 $('#t_indirecto').val(total_indirecto)
});
//validacion total temporal
$('.key_temporal').keyup(function(event) {
 total_temporal = Number($('#temporal_m').val()) + Number($('#temporal_f').val())
 $('#t_temporal').val(total_temporal)
});
//validacion total 18-30
$('.key_18-30').keyup(function(event) {
 total_18_30 = Number($('#18-30_m').val()) + Number($('#18-30_f').val())
 $('#t_18-30').val(total_18_30)
});
//validacion total 30-50
$('.key_30-50').keyup(function(event) {
 total_30_50 = Number($('#30-50_m').val()) + Number($('#30-50_f').val())
 $('#t_30-50').val(total_30_50)
});
//validacion total mayor50
$('.key_mayor50').keyup(function(event) {
 total_mayor50 = Number($('#mayor50_m').val()) + Number($('#mayor50_f').val())
 $('#t_mayor50').val(total_mayor50)
});
//validacion total discapacitados
$('.key_discapacitado').keyup(function(event) {
 total_discapacitado = Number($('#discapacitado_m').val()) + Number($('#discapacitado_f').val())
 $('#t_discapacitado').val(total_discapacitado)
});
//validacion total madre
$('.key_madre').keyup(function(event) {
 total_madre = Number($('#madre_m').val()) + Number($('#madre_f').val())
 $('#t_madre').val(total_madre)
});
//validacion total adulto
$('.key_adulto').keyup(function(event) {
 total_adulto = Number($('#adulto_m').val()) + Number($('#adulto_f').val())
 $('#t_adulto').val(total_adulto)
});
//validacion total indigena
$('.key_indigena').keyup(function(event) {
 total_indigena = Number($('#indigena_m').val()) + Number($('#indigena_f').val())
 $('#t_indigena').val(total_indigena)
});
//validacion total comunidades negras 
$('.key_negra').keyup(function(event) {
 total_negra = Number($('#negras_m').val()) + Number($('#negras_f').val())
 $('#t_negra').val(total_negra)
});
//validacion total campesino 
$('.key_campesino').keyup(function(event) {
 total_campesino = Number($('#campesino_m').val()) + Number($('#campesino_f').val())
 $('#t_campesino').val(total_campesino)
});
//validacion total reinsertado 
$('.key_reinsertado').keyup(function(event) {
 total_reinsertado = Number($('#reinsertado_m').val()) + Number($('#reinsertado_f').val())
 $('#t_reinsertado').val(total_reinsertado)
});
//validacion total victima 
$('.key_victima').keyup(function(event) {
 total_victima = Number($('#victima_m').val()) + Number($('#victima_f').val())
 $('#t_victima').val(total_victima)
});
//validacion total victima 
$('.key_vulnerable').keyup(function(event) {
 total_vulnerable = Number($('#vulnerable_m').val()) + Number($('#vulnerable_f').val())
 $('#t_vulnerable').val(total_vulnerable)
});
//validacion total victima 
$('.key_otro_vulne').keyup(function(event) {
 total_otro_vulnerablidad = Number($('#otro_vulnerablidad_m').val()) + Number($('#otro_vulnerablidad_f').val())
 $('#otro_vulnerablidad_total').val(total_otro_vulnerablidad)
});
//validacion total primaria 
$('.key_primaria').keyup(function(event) {
 total_primaria = Number($('#primaria_m').val()) + Number($('#primaria_f').val())
 $('#t_primaria').val(total_primaria)
});
//validacion total bachillerato 
$('.key_bachillerato').keyup(function(event) {
 total_bachillerato = Number($('#bachillerato_m').val()) + Number($('#bachillerato_f').val())
 $('#t_bachillerato').val(total_bachillerato)
});
//validacion total tecnico 
$('.key_tecnico').keyup(function(event) {
 total_tecnico = Number($('#tecnico_m').val()) + Number($('#tecnico_f').val())
 $('#t_tecnico').val(total_tecnico)
});
//validacion total tecnologo 
$('.key_tecnologo').keyup(function(event) {
 total_tecnologo = Number($('#tecnologo_m').val()) + Number($('#tecnologo_f').val())
 $('#t_tecnologo').val(total_tecnologo)
});
//validacion total universitario 
$('.key_universitario').keyup(function(event) {
 total_universitario = Number($('#universitario_m').val()) + Number($('#universitario_f').val())
 $('#t_universitario').val(total_universitario)
});
//validacion total otro nivel educativo 
$('.key_otro_nivel').keyup(function(event) {
 total_otro_nivel = Number($('#otro_nivel_m').val()) + Number($('#otro_nivel_f').val())
 $('#t_otro_nivel').val(total_otro_nivel)
});
// validacion total temporada alta
$('.key_alta').keyup(function(event) {
 total_temporada_alta = Number($('#alta_m').val()) + Number($('#alta_f').val())
 $('#t_alta').val(total_temporada_alta)
});
// validacion total temporada baja
$('.key_baja').keyup(function(event) {
 total_temporada_baja = Number($('#baja_m').val()) + Number($('#baja_f').val())
 $('#t_baja').val(total_temporada_baja)
});

// validacion total discapacidad socio
$('.key_s_discapacitado').keyup(function(event) {
 total_s_discapacitado = Number($('#s_discapacitado_m').val()) + Number($('#s_discapacitado_f').val())
 $('#t_s_discapacitado').val(total_s_discapacitado)
});
// validacion total madres cabeza de familia socio
$('.key_s_madre').keyup(function(event) {
 total_s_madre = Number($('#s_madre_m').val()) + Number($('#s_madre_f').val())
 $('#t_s_madre').val(total_s_madre)
});
// validacion total adultos mayores socio
$('.key_s_adulto').keyup(function(event) {
 total_s_adulto = Number($('#s_adulto_m').val()) + Number($('#s_adulto_f').val())
 $('#t_s_adulto').val(total_s_adulto)
});
// validacion total indigenas socio
$('.key_s_indigena').keyup(function(event) {
 total_s_indigena = Number($('#s_indigena_m').val()) + Number($('#s_indigena_f').val())
 $('#t_s_indigena').val(total_s_indigena)
});
// validacion total comunidades negras socio
$('.key_s_negra').keyup(function(event) {
 total_s_negra = Number($('#s_negra_m').val()) + Number($('#s_negra_f').val())
 $('#t_s_negra').val(total_s_negra)
});

// validacion total campesinos socio
$('.key_s_campesino').keyup(function(event) {
 total_s_campesino = Number($('#s_campesino_m').val()) + Number($('#s_campesino_f').val())
 $('#t_s_campesino').val(total_s_campesino)
});

// validacion total reinsertado socio
$('.key_s_reinsertado').keyup(function(event) {
 total_s_reinsertado = Number($('#s_reinsertado_m').val()) + Number($('#s_reinsertado_f').val())
 $('#t_s_reinsertado').val(total_s_reinsertado)
});

// validacion total victima socio
$('.key_s_victima').keyup(function(event) {
 total_s_victima = Number($('#s_victima_m').val()) + Number($('#s_victima_f').val())
 $('#t_s_victima').val(total_s_victima)
});
// validacion total vunerable socio
$('.key_s_vulnerable').keyup(function(event) {
 total_s_vulnerable = Number($('#s_vulnerable_m').val()) + Number($('#s_vulnerable_f').val())
 $('#t_s_vulnerable').val(total_s_vulnerable)
});
// validacion total otro vulnerable socio
$('.key_otro_vulne_s').keyup(function(event) {
 total_s_vunerable_otro = Number($('#otro_vulne_m_s').val()) + Number($('#otro_vulne_f_s').val())
 $('#otro_vulne_total').val(total_s_vunerable_otro)
});

// validacion total masculino socio
var total_masculino_s = 0
var total_femenino_s = 0
$('.total_socio, total_socio_f').keyup(function(event) {
 total_masculino_s = Number($('#s_discapacitado_m').val())+Number($('#s_madre_m').val())
 +Number($('#s_adulto_m').val())+Number($('#s_indigena_m').val())+Number($('#s_negra_m').val())
 +Number($('#s_campesino_m').val())+Number($('#s_reinsertado_m').val())+Number($('#s_victima_m').val())
 +Number($('#s_vulnerable_m').val())+Number($('#otro_vulne_m_s').val());
 $('#total_m_s').val(total_masculino_s)
 
});
//total socio fememenino
$('.total_socio_f').keyup(function(event) {
 total_femenino_s = Number($('#s_discapacitado_f').val())+Number($('#s_madre_f').val())
 +Number($('#s_adulto_f').val())+Number($('#s_indigena_f').val())+Number($('#s_negra_f').val())
 +Number($('#s_campesino_f').val())+Number($('#s_reinsertado_f').val())+Number($('#s_victima_f').val())
 +Number($('#s_vulnerable_f').val())+Number($('#otro_vulne_f_s').val());
 $('#total_f_s').val(total_femenino_s)
 
});
$('.total_socio, .total_socio_f').keyup(function(event) {
$('#total_s').val(total_masculino_s+total_femenino_s)
});

var total_s_socio = 0
var total_s_directo = 0
var total_s_indirecto = 0
var total_s_temporal = 0
var total_otro_involucra = 0
// validacion total involucra socio
$('.key_socio').keyup(function(event) {
 total_s_socio = Number($('#socio_m').val()) + Number($('#socio_f').val())
 $('#t_socio').val(total_s_socio)
});

// validacion total involucra directo
$('.key_directo_s').keyup(function(event) {
 total_s_directo = Number($('#directo_m_s').val()) + Number($('#directo_f_s').val())
 $('#t_directo_s').val(total_s_directo)
});
// validacion total involucra indirecto
$('.key_indirecto_s').keyup(function(event) {
 total_s_indirecto = Number($('#indirecto_m_s').val()) + Number($('#indirecto_f_s').val())
 $('#t_indirecto_f').val(total_s_indirecto)
});
// validacion total involucra temporal
$('.key_temporal_s').keyup(function(event) {
 total_s_temporal = Number($('#temporal_m_s').val()) + Number($('#temporal_f_s').val())
 $('#t_temporal_s').val(total_s_temporal)
});
// validacion total otro involucra
$('.key_otro_involucra').keyup(function(event) {
 total_otro_involucra = Number($('#otro_involucra_m').val()) + Number($('#otro_involucra_f').val())
 $('#total_otro_involucra').val(total_otro_involucra)
});







 // alert(total_ventas)
});

//cargar bienes y servicios
$('#empresa').change(function(event) { 
var empresa_id = $('#empresa').val()

$.ajax({
  url: 'evaluacion/formato_informacion_as/bien_servicio.php',
   type: 'POST',
   data: {empresa_id: empresa_id},
 })
 .done(function(respuesta) {

  $('#bien_servi').html(respuesta)
  $('[name="unidad_medida[]"]').material_select();
  $('[name="ingresos_sup_costo[]"]').material_select();
  $('#ingresos_sup_costo_otro').material_select();
 })
});
 
//__________________________________Registrar__________________________________________________

$('#registrar_informacion').click(function(event) {
  event.preventDefault();
var total_contrato = Number($('#t_directo').val())+Number($('#t_indirecto').val())
+Number($('#t_temporal').val());

var total_etaria = Number($('#t_18-30').val())+Number($('#t_30-50').val())+Number($('#t_mayor50').val())

var total_condicion_vul = Number($('#t_discapacitado').val())+Number($('#t_madre').val())
+Number($('#t_adulto').val())+Number($('#t_indigena').val())+Number($('#t_negra').val())+
Number($('#t_campesino').val())+Number($('#t_reinsertado').val())+Number($('#t_victima').val())+
Number($('#t_vulnerable').val())+Number($('#otro_vulnerablidad_total').val())

var total_nivel_educativo = Number($('#t_primaria').val())+Number($('#t_bachillerato').val())
+Number($('#t_tecnico').val())+Number($('#t_tecnologo').val())+Number($('#t_universitario').val())
+Number($('#t_otro_nivel').val())
// alert(total_contrato)
//valiadacion combo emrpesa
if ($('#empresa').val() == null) {
	$('#empresa').selected = true;
	var $toastContent = $('<span>Debe escoger un emprendimiento</span>');
	Materialize.toast($toastContent, 3000);
}else if (Number($('#t_empleados').val()) != total_contrato) {
  var $toastContent = $('<span>el total tipo de contrato y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
  $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
  $('#t_directo').addClass('invalid')
  $('#t_indirecto').addClass('invalid')
  $('#t_temporal').addClass('invalid')
  $('html, body').animate({scrollTop: $( $( '#t_masculino' ) ).offset().top}, 1000);
}else if (Number($('#t_empleados').val()) != total_etaria) {
  var $toastContent = $('<span>el total descripcion etaria y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
   $('#t_directo').removeClass('invalid')
  $('#t_indirecto').removeClass('invalid')
  $('#t_temporal').removeClass('invalid')
   $('#t_18-30').addClass('invalid')
  $('#t_30-50').addClass('invalid')
  $('#t_mayor50').addClass('invalid')
  $('html, body').animate({scrollTop: $( $( '#t_masculino' ) ).offset().top}, 1000);
}else if (Number($('#t_empleados').val()) != total_condicion_vul ) {
  var $toastContent = $('<span>el total condicion de vulnerabilidad y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
  $('#t_18-30').removeClass('invalid')
  $('#t_30-50').removeClass('invalid')
  $('#t_mayor50').removeClass('invalid')

   $('#t_discapacitado').addClass('invalid')
  $('#t_madre').addClass('invalid')
  $('#t_adulto').addClass('invalid')
   $('#t_indigena').addClass('invalid')
  $('#t_negra').addClass('invalid')
  $('#t_campesino').addClass('invalid')
   $('#t_reinsertado').addClass('invalid')
  $('#t_victima').addClass('invalid')
  $('#t_vulnerable').addClass('invalid')
  $('#otro_vulnerablidad_total').addClass('invalid')

  $('html, body').animate({scrollTop: $( $( '#discapacitado_m' ) ).offset().top}, 1000);

}else if (Number($('#t_empleados').val()) != total_nivel_educativo) {
  var $toastContent = $('<span>el total nivel educativo y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
   $('#t_discapacitado').removeClass('invalid')
  $('#t_madre').removeClass('invalid')
  $('#t_adulto').removeClass('invalid')
   $('#t_indigena').removeClass('invalid')
  $('#t_negra').removeClass('invalid')
  $('#t_campesino').removeClass('invalid')
   $('#t_reinsertado').removeClass('invalid')
  $('#t_victima').removeClass('invalid')
  $('#t_vulnerable').removeClass('invalid')
  $('#otro_vulnerablidad_total').removeClass('invalid')

  $('#t_primaria').addClass('invalid')
  $('#t_bachillerato').addClass('invalid')
  $('#t_tecnico').addClass('invalid')
   $('#t_tecnologo').addClass('invalid')
  $('#t_universitario').addClass('invalid')
  $('#t_otro_nivel').addClass('invalid')
$('html, body').animate({scrollTop: $( $( '#primaria_m' ) ).offset().top}, 1000);

}
else {

var empresa = $('#empresa').val() 
	$.ajax({
		url: 'evaluacion/formato_informacion_as/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_informacion').serialize(),
    beforeSend: function() {
      // $('#registrar_informacion').attr('disabled', 'disabled');
    // console.log('cargando')
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
      // setTimeout("document.location=document.location",1500);
    }
	})
	
	}
});


//-------------Cargar formulario-----------
$('#empresa_m').change(function(event) {
  event.preventDefault();
  var empresa_m = $('#empresa_m').val()
  $.ajax({
    url: 'evaluacion/formato_informacion_as/modificar/llenar_formulario.php',
    type: 'POST',
    data: {empresa_m: empresa_m},
    beforeSend: function() {
      $('#form_modificar_informacion').hide()
      $('#preload').addClass('progress')

    
    },
    success: function(respuesta) {
      $('#form_modificar_informacion').show()
      $('#preload').removeClass('progress')
      $('#cargar_info').html(respuesta)
    }
  })
  // .done(function(respuesta) {
  //   // console.log(respuesta)
  //   $('#cargar_info').html(respuesta)
  // })

});

//----------validaciones para modificar-------------------------


//boton de modificar
$('#modificar_informacion').click(function(event) {
  event.preventDefault();
  var total_contrato = Number($('#t_directo').val())+Number($('#t_indirecto').val())
+Number($('#t_temporal').val());

var total_etaria = Number($('#t_18-30').val())+Number($('#t_30-50').val())+Number($('#t_mayor50').val())

var total_condicion_vul = Number($('#t_discapacitado').val())+Number($('#t_madre').val())
+Number($('#t_adulto').val())+Number($('#t_indigena').val())+Number($('#t_negra').val())+
Number($('#t_campesino').val())+Number($('#t_reinsertado').val())+Number($('#t_victima').val())+
Number($('#t_vulnerable').val())+Number($('#otro_vulnerablidad_total').val())

var total_nivel_educativo = Number($('#t_primaria').val())+Number($('#t_bachillerato').val())
+Number($('#t_tecnico').val())+Number($('#t_tecnologo').val())+Number($('#t_universitario').val())
+Number($('#t_otro_nivel').val())

if (Number($('#t_empleados').val()) != total_contrato) {
  var $toastContent = $('<span>el total tipo de contrato y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
  $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
  $('#t_directo').addClass('invalid')
  $('#t_indirecto').addClass('invalid')
  $('#t_temporal').addClass('invalid')
  $('html, body').animate({scrollTop: $( $( '#t_masculino' ) ).offset().top}, 1000);
}else if (Number($('#t_empleados').val()) != total_etaria) {
  var $toastContent = $('<span>el total descripcion etaria y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
   $('#t_directo').removeClass('invalid')
  $('#t_indirecto').removeClass('invalid')
  $('#t_temporal').removeClass('invalid')
   $('#t_18-30').addClass('invalid')
  $('#t_30-50').addClass('invalid')
  $('#t_mayor50').addClass('invalid')
  $('html, body').animate({scrollTop: $( $( '#t_masculino' ) ).offset().top}, 1000);
}else if (Number($('#t_empleados').val()) != total_condicion_vul ) {
  var $toastContent = $('<span>el total condicion de vulnerabilidad y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
  $('#t_18-30').removeClass('invalid')
  $('#t_30-50').removeClass('invalid')
  $('#t_mayor50').removeClass('invalid')

   $('#t_discapacitado').addClass('invalid')
  $('#t_madre').addClass('invalid')
  $('#t_adulto').addClass('invalid')
   $('#t_indigena').addClass('invalid')
  $('#t_negra').addClass('invalid')
  $('#t_campesino').addClass('invalid')
   $('#t_reinsertado').addClass('invalid')
  $('#t_victima').addClass('invalid')
  $('#t_vulnerable').addClass('invalid')
  $('#otro_vulnerablidad_total').addClass('invalid')

  $('html, body').animate({scrollTop: $( $( '#discapacitado_m' ) ).offset().top}, 1000);

}else if (Number($('#t_empleados').val()) != total_nivel_educativo) {
  var $toastContent = $('<span>el total nivel educativo y total de empleados deben ser iguales</span>');
  Materialize.toast($toastContent, 6000);
   $('.collapsible').collapsible('close', 1);
  $('.collapsible').collapsible('open', 1);
   $('#t_discapacitado').removeClass('invalid')
  $('#t_madre').removeClass('invalid')
  $('#t_adulto').removeClass('invalid')
   $('#t_indigena').removeClass('invalid')
  $('#t_negra').removeClass('invalid')
  $('#t_campesino').removeClass('invalid')
   $('#t_reinsertado').removeClass('invalid')
  $('#t_victima').removeClass('invalid')
  $('#t_vulnerable').removeClass('invalid')
  $('#otro_vulnerablidad_total').removeClass('invalid')

  $('#t_primaria').addClass('invalid')
  $('#t_bachillerato').addClass('invalid')
  $('#t_tecnico').addClass('invalid')
   $('#t_tecnologo').addClass('invalid')
  $('#t_universitario').addClass('invalid')
  $('#t_otro_nivel').addClass('invalid')
$('html, body').animate({scrollTop: $( $( '#primaria_m' ) ).offset().top}, 1000);

}
else{
   var empresa_m = $('#empresa_m').val()
  $.ajax({
    url: 'evaluacion/formato_informacion_as/modificar/modificar.php?empresa='+empresa_m,
    type: 'POST',
    data: $('#form_modificar_informacion').serialize(),
    beforeSend: function() {
      $('#modificar_informacion').attr('disabled', 'disabled');
    // console.log('cargando')
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
           text: "Datos MODIFICADOS exitosamente!",
           button: {
            visible: false
          },
      });
      setTimeout("document.location=document.location",1500);
    }
  })
 
}
 
  
});