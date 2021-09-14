var option="../Controller/"
$(document).ready(function() {
    $("#titleform").html("Registro De Usuarios");
    $('#formUserAct').hide();
    $('#formVAct').hide();
    $('#sendinfo2').on('click',function(){
        saveInfo();
    });
   
    $('#sendinfov').on('click',function(){
        saveInfoV();
    });

    $('#createU').on('click',function(){
    //   console.log(23456)
        searchInfo();
    });
    $('#createV').on('click',function(){
        $("#titleform").html("Actualizacion De Vehiculos");
        $('#formUserAct').hide();
        $('#formVAct').show();
        searchInfo();
    });
    
});

function searchInfo(){
 let search=$("#search").val();
alert(search);
 $.post(option+"ControllerMain.php", { 
    id:search,
    functionMethod:"searchPerson"
}, function(response) {
    let r=JSON.parse(response);
    alert(r.message);
})

}


function saveInfoV(){
    let placa=$("#placa").val();
    let color=$("#color").val();
    let conductor=$("#conductor").val();
    let typev=$("#typeuser").val();
    let propietario=$("#propietario").val();
    let marca=$("#marca").val();

   
    $.post(option+"ControllerMain.php", {
        placa: placa,
        color: color,
        conductor: conductor,
        propietario:propietario,
        typeUser:typev,
        marca:marca,
       functionMethod:"saveInfoV"
   }, function(response) {
        let r=JSON.parse(response);
        alert(r.message);
   })
   
   }
