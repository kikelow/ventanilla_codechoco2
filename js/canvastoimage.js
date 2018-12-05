
// var img  = document.getElementById('img_canvas');
var png  = document.getElementsByClassName('btn-ver');


$(".btn-ver").click(function() {

var canvas = document.getElementById("grafica");

var dataUrl = canvas.toDataURL("image/jpg");

    $.ajax({
        url: 'evaluacion/hoja_verificacion_2/img_grafica.php',  
        data:{ 
            img: dataUrl
        },                     
        type: 'POST',   
        success: function(data)
        {
          alert("Imagen guardada en servidor");                       
        }
    });     
});






       


// try {
//    canvas.getContext('2d').drawImage(image_target, left, top, width, height, 0, 0, width, height);
   
//     var dataUrl = canvas.toDataURL("image/png"); 

//     $.ajax({
//             url: '../evaluacion/hoja_verificacion_2/img_grafica.php',  
//             data:{ 
//                 img: dataUrl
//             },                     
//             type: 'POST',   
//             success: function(data)
//             {
//               alert("Imagen guardada en servidor");                       
//             }
//         });                
//     }
//     catch(err) {
//           alert("Ocurrio un error");
//     }  