var option="../Controller/"
$(document).ready(function() {
    $("#titleform").html("Registro De Usuarios");
    $('#sendinfo2').on('click',function(){
        saveInfo();
    });
   
    $('#sendinfov').on('click',function(){
        saveInfoV();
    });
     $('#formUser').show();
     $('#formV').hide();
    $('#createU').on('click',function(){
        $("#titleform").html("Registro De Usuarios");
        $('#formUser').show();
        $('#formV').hide();
    });
    $('#createV').on('click',function(){
        $("#titleform").html("Registro De Vehiculos");
        $('#formUser').hide();
        $('#formV').show();
    });
    
});

function saveInfo(){
 let idClient=$("#iddoc").val();
 let fname=$("#firstname").val();
 let sname=$("#secondname").val();
 let lastname=$("#lastname").val();
 let address=$("#address").val();
 let phone=$("#phone").val();
 let typeUser=$("#typeUser").val();

 $.post(option+"ControllerMain.php", { 
    idClient: idClient,
    name1: fname,
    name2: sname,
    lastname: lastname,
    address: address,
    phone:phone,
    typeUser:typeUser,
    functionMethod:"saveInfo"
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
