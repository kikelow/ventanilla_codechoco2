$(document).ready(function() {
$('#empresa').select2();

//tenencia tierra habilitar al seleccionar el check
$('[name="tierra[]"]#tt12').click(function() {

    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t12').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t12').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt13').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t13').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t13').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt14').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t14').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t14').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt15').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t15').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t15').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt16').click(function() {

    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t16').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t16').attr('disabled','disabled');
    }
});


$('[name="tierra[]"]#tt17').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t17').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t17').attr('disabled','disabled');
    }
})
//certificacion habilitar al seleccionar el check
$('[name="certificacion[]"]#ce1').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa1').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa1').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia1').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs1').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa1').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa1').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia1').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs1').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce2').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa2').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa2').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia2').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs2').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa2').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa2').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia2').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs2').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce3').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa3').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa3').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia3').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs3').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa3').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa3').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia3').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs3').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce4').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa4').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa4').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia4').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs4').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa4').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa4').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia4').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs4').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce5').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa5').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa5').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia5').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs5').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa5').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa5').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia5').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs5').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce6').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa6').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa6').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia6').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs6').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa6').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa6').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia6').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs6').attr('disabled','disabled');
    }
})

$('[name="certificacion[]"]#ce7').click(function() {
    if($(this).is(':checked')) {

      $('[name="cert_etapa[]"]#cert_etapa7').removeAttr('disabled');
      $('[name="cert_etapa[]"]#cert_etapa7').material_select();
      $('[name="cert_vigencia[]"]#cert_vigencia7').removeAttr('disabled');
       $('[name="cert_obs[]"]#cert_obs7').removeAttr('disabled');

    } else {
       $('[name="cert_etapa[]"]#cert_etapa7').attr('disabled','disabled');
        $('[name="cert_etapa[]"]#cert_etapa7').material_select();
       $('[name="cert_vigencia[]"]#cert_vigencia7').attr('disabled','disabled');
       $('[name="cert_obs[]"]#cert_obs7').attr('disabled','disabled');
    }
})

// Practicas de conservacion habilitar al seleccionar el check
$('[name="conservacion[]"]#conser1').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area1').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc1').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area1').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc1').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser2').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area2').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc2').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area2').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc2').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser3').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area3').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc3').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area3').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc3').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser4').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area4').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc4').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area4').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc4').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser5').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area5').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc5').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area5').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc5').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser6').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area6').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc6').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area6').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc6').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser7').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area7').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc7').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area7').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc7').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser8').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area8').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc8').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area8').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc8').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser9').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area9').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc9').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area9').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc9').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser10').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area10').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc10').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area10').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc10').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser11').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area11').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc11').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area11').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc11').attr('disabled','disabled');
    }
})

$('[name="conservacion[]"]#conser12').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area12').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc12').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area12').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc12').attr('disabled','disabled');
    }
})
$('[name="conservacion[]"]#conser13').click(function() {
    if($(this).is(':checked')) {
      $('[name="conser_area[]"]#conser_area13').removeAttr('disabled');
       $('[name="conser_desc[]"]#conser_desc13').removeAttr('disabled');

    } else {
       $('[name="conser_area[]"]#conser_area13').attr('disabled','disabled');
       $('[name="conser_desc[]"]#conser_desc13').attr('disabled','disabled');
    }
})

// Plan de manejo habilitar al seleccionar el check
$('[name="plan[]"]#plan1').click(function() {
    if($(this).is(':checked')) {
      $('[name="plan_a_na[]"]#plan_a_na1').removeAttr('disabled');
      $('[name="plan_a_na[]"]#plan_a_na1').material_select();
      $('[name="plan_c_nc[]"]#plan_c_nc1').removeAttr('disabled');
      $('[name="plan_c_nc[]"]#plan_c_nc1').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia1').removeAttr('disabled');
       $('[name="plan_desc[]"]#plan_desc1').removeAttr('disabled');

    } else {
       $('[name="plan_a_na[]"]#plan_a_na1').attr('disabled','disabled');
        $('[name="plan_a_na[]"]#plan_a_na1').material_select();
       $('[name="plan_c_nc[]"]#plan_c_nc1').attr('disabled','disabled');
       $('[name="plan_c_nc[]"]#plan_c_nc1').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia1').attr('disabled','disabled');
       $('[name="plan_desc[]"]#plan_desc1').attr('disabled','disabled');
    }
})
$('[name="plan[]"]#plan2').click(function() {
    if($(this).is(':checked')) {
      $('[name="plan_a_na[]"]#plan_a_na2').removeAttr('disabled');
      $('[name="plan_a_na[]"]#plan_a_na2').material_select();
      $('[name="plan_c_nc[]"]#plan_c_nc2').removeAttr('disabled');
      $('[name="plan_c_nc[]"]#plan_c_nc2').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia2').removeAttr('disabled');
       $('[name="plan_desc[]"]#plan_desc2').removeAttr('disabled');

    } else {
       $('[name="plan_a_na[]"]#plan_a_na2').attr('disabled','disabled');
        $('[name="plan_a_na[]"]#plan_a_na2').material_select();
       $('[name="plan_c_nc[]"]#plan_c_nc2').attr('disabled','disabled');
       $('[name="plan_c_nc[]"]#plan_c_nc2').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia2').attr('disabled','disabled');
       $('[name="plan_desc[]"]#plan_desc2').attr('disabled','disabled');
    }
})
$('[name="plan[]"]#plan3').click(function() {
    if($(this).is(':checked')) {
      $('[name="plan_a_na[]"]#plan_a_na3').removeAttr('disabled');
      $('[name="plan_a_na[]"]#plan_a_na3').material_select();
      $('[name="plan_c_nc[]"]#plan_c_nc3').removeAttr('disabled');
      $('[name="plan_c_nc[]"]#plan_c_nc3').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia3').removeAttr('disabled');
       $('[name="plan_desc[]"]#plan_desc3').removeAttr('disabled');

    } else {
       $('[name="plan_a_na[]"]#plan_a_na3').attr('disabled','disabled');
        $('[name="plan_a_na[]"]#plan_a_na3').material_select();
       $('[name="plan_c_nc[]"]#plan_c_nc3').attr('disabled','disabled');
       $('[name="plan_c_nc[]"]#plan_c_nc3').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia3').attr('disabled','disabled');
       $('[name="plan_desc[]"]#plan_desc3').attr('disabled','disabled');
    }
})
$('[name="plan[]"]#plan4').click(function() {
    if($(this).is(':checked')) {
      $('[name="plan_a_na[]"]#plan_a_na4').removeAttr('disabled');
      $('[name="plan_a_na[]"]#plan_a_na4').material_select();
      $('[name="plan_c_nc[]"]#plan_c_nc4').removeAttr('disabled');
      $('[name="plan_c_nc[]"]#plan_c_nc4').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia4').removeAttr('disabled');
       $('[name="plan_desc[]"]#plan_desc4').removeAttr('disabled');

    } else {
       $('[name="plan_a_na[]"]#plan_a_na4').attr('disabled','disabled');
        $('[name="plan_a_na[]"]#plan_a_na4').material_select();
       $('[name="plan_c_nc[]"]#plan_c_nc4').attr('disabled','disabled');
       $('[name="plan_c_nc[]"]#plan_c_nc4').material_select();
       $('[name="plan_vigencia[]"]#plan_vigencia4').attr('disabled','disabled');
       $('[name="plan_desc[]"]#plan_desc4').attr('disabled','disabled');
    }
})

//Area de ecosistema habilitar al seleccionar el check
$('[name="ecosistemas[]"]#ecosistemas1').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area1').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area1').attr('disabled','disabled');
    }
})

$('[name="ecosistemas[]"]#ecosistemas2').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area2').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area2').attr('disabled','disabled');
    }
})
$('[name="ecosistemas[]"]#ecosistemas3').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area3').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area3').attr('disabled','disabled');
    }
})
$('[name="ecosistemas[]"]#ecosistemas4').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area4').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area4').attr('disabled','disabled');
    }
})
$('[name="ecosistemas[]"]#ecosistemas5').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area5').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area5').attr('disabled','disabled');
    }
})
$('[name="ecosistemas[]"]#ecosistemas6').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area6').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area6').attr('disabled','disabled');
    }
})
$('[name="ecosistemas[]"]#ecosistemas7').click(function() {

    if($(this).is(':checked')) {
      $('[name="ecosistemas_area[]"]#ecosistemas_area7').removeAttr('disabled');

    } else {
      $('[name="ecosistemas_area[]"]#ecosistemas_area7').attr('disabled','disabled');
    }
})

//actividades habilitar al seleccionar el check
$('[name="actividad[]"]#actividad1').click(function() {
    if($(this).is(':checked')) {

      $('[name="actividad_desc[]"]#actividad_desc1').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso1').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso1').material_select();
      

    } else {
     $('[name="actividad_desc[]"]#actividad_desc1').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso1').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso1').material_select();
       
    }
})
$('[name="actividad[]"]#actividad2').click(function() {
    if($(this).is(':checked')) {

      $('[name="actividad_desc[]"]#actividad_desc2').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso2').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso2').material_select();
      

    } else {
     $('[name="actividad_desc[]"]#actividad_desc2').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso2').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso2').material_select();
       
    }
})
$('[name="actividad[]"]#actividad3').click(function() {
    if($(this).is(':checked')) {

      $('[name="actividad_desc[]"]#actividad_desc3').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso3').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso3').material_select();
      

    } else {
     $('[name="actividad_desc[]"]#actividad_desc3').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso3').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso3').material_select();
       
    }
})
$('[name="actividad[]"]#actividad4').click(function() {
    if($(this).is(':checked')) {

      $('[name="actividad_desc[]"]#actividad_desc4').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso4').removeAttr('disabled');
      $('[name="actividad_recurso[]"]#actividad_recurso4').material_select();
      

    } else {
     $('[name="actividad_desc[]"]#actividad_desc4').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso4').attr('disabled','disabled');
       $('[name="actividad_recurso[]"]#actividad_recurso4').material_select();
       
    }
})

//Programas habilitar al seleccionar el check
$('[name="programa[]"]#programa1').click(function() {
    if($(this).is(':checked')) {
      $('[name="programa_desc[]"]#programa_desc1').removeAttr('disabled');      
    } else {
     $('[name="programa_desc[]"]#programa_desc1').attr('disabled','disabled');
    }
})
$('[name="programa[]"]#programa2').click(function() {
    if($(this).is(':checked')) {
      $('[name="programa_desc[]"]#programa_desc2').removeAttr('disabled');      
    } else {
     $('[name="programa_desc[]"]#programa_desc2').attr('disabled','disabled');
    }
})
$('[name="programa[]"]#programa3').click(function() {
    if($(this).is(':checked')) {
      $('[name="programa_desc[]"]#programa_desc3').removeAttr('disabled');      
    } else {
     $('[name="programa_desc[]"]#programa_desc3').attr('disabled','disabled');
    }
})
$('[name="programa[]"]#programa4').click(function() {
    if($(this).is(':checked')) {
      $('[name="programa_desc[]"]#programa_desc4').removeAttr('disabled');      
    } else {
     $('[name="programa_desc[]"]#programa_desc4').attr('disabled','disabled');
    }
})

//verificar si selecciona si en el div de institucion
$('#insti').find('*').prop('disabled', true);
$('#insti').hide()
$('#valida_institucion').change(function(event) {
  if ($('#valida_institucion').val() == 1) {
      $('#insti').find('*').prop('disabled', true);
      $('[name="apoyo_tipo_entidad[]"]').material_select()
      $('#insti').hide()
  }else{
    $('#insti').find('*').prop('disabled', false);
     $('select').find('*').prop('disabled', false);
    $('[name="apoyo_tipo_entidad[]"]').material_select()
     $('#insti').show()
  }
});
//verificar si selecciona si en el div de trabajadores
$('#trabaja').find('*').prop('disabled', true);
$('#trabaja').hide()
$('#valida_trabajadores').change(function(event) {
  if ($('#valida_trabajadores').val() == 1) {
    $('#trabaja').find('*').prop('disabled', true);
      $('#trabaja').hide()
  }else{
    $('#trabaja').find('[name="programa[]"]').prop('disabled', false);
    $('#otro_pro').find('*').prop('disabled', false);
     $('#trabaja').show()
  }
});
//verificar si selecciona si en el div de actividades
$('#div_activi').find('*').prop('disabled', true);
$('#div_activi').hide()
$('#valida_actividades').change(function(event) {
  if ($('#valida_actividades').val() == 1) {
      $('#div_activi').find('*').prop('disabled', true);
       $('#otro_activi_recurso').material_select()
      $('#div_activi').hide()
  }else{
    $('#div_activi').find('[name="actividad[]"]').prop('disabled', false);
     $('#otro_act').find('*').prop('disabled', false);
    $('select').find('*').prop('disabled', false);
    $('#otro_activi_recurso').material_select()
     $('#div_activi').show()
  }
});
//verificar si selecciona si en el div de involucra
$('#div_involucra').find('*').prop('disabled', true);
$('#div_involucra').hide()
$('#valida_involucra').change(function(event) {
  if ($('#valida_involucra').val() == 1) {
      $('#div_involucra').find('*').prop('disabled', true);
      $('#div_involucra').hide()
  }else{
    $('#div_involucra').find('*').prop('disabled', false);
    $('#div_certificacion').find('[name="involucra[]"]').prop('disabled', false);
     $('#div_involucra').show()
  }
});
//verificar si selecciona si en el div de certificacion
$('#div_certificacion').find('*').prop('disabled', true);
$('#div_certificacion').hide()
$('#valida_certificacion').change(function(event) {
  if ($('#valida_certificacion').val() == 1) {
    $('#div_certificacion').find('*').prop('disabled', true);
    $('#otro_cert_etapa').material_select()
    $('#div_certificacion').hide()
  }else{
     $('#div_certificacion').find('[name="certificacion[]"]').prop('disabled', false);
     $('#otr_cert').find('*').prop('disabled', false);
      $('select').find('*').prop('disabled', false);
     $('#otro_cert_etapa').material_select()
     $('#div_certificacion').show()

  }
});

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
 })
});


$('#registrar_informacion').click(function(event) {
  event.preventDefault();

//valiadacion combo emrpesa
if ($('#empresa').val() == null) {
	$('#empresa').selected = true;
	var $toastContent = $('<span>Debe escoger un emprendimiento</span>');
	Materialize.toast($toastContent, 1800);
  document.getElementById('div_empresa').scrollIntoView();
}


else {
alert('todo bien')
var empresa = $('#empresa').val() 
	$.ajax({
		url: 'evaluacion/formato_informacion_as/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_informacion').serialize(),
	})
	.done(function(respuesta) {
		console.log(respuesta);
	})
	}
});





