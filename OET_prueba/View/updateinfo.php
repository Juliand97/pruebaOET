<?php 
require_once ("../Controller/ControllerMain.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <label for="">Ingrese su numero placa o numero de indentificacion</label>
            <input type="text" id="search" placeholder="Ingrese su numero placa o numero de indentificacion">
        </div>
        <div>
            <div><button type="button" id="createV">Buscar Vehiculo</button></div>
            <div><button  type="button" id="createU">Buscar Propietario / Transportador</button></div>
        </div>
        <div id="formUserAct">
            <form action="" method="post">
            <div>
                <div class="col-6">
                    <label for="">Identificacion</label>
                    <input type="number" name="iddoc" id="iddoc">
                </div>
                <div class="col-6">
                    <label for="">Primer Nombre</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="col-6">
                    <label for="">Segundo Nombre</label>
                    <input type="text" name="secondname" id="secondname">
                </div>
                <div>
                    <label for="">Apellido </label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div >
                    <label for="">Tipo De Usuario </label>
                    <select name="typeuser" id="typeuser">
                        <?=$selectTypeUser?>
                    </select>
                        
                </div>
            </div>
            <hr>
            <div>
                <div>
                    <label for="">Direccion</label>
                    <input type="text" name="address" id="address"> 
                </div>
                <div>
                    <label for="">Telefono</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div>
                    <button id="sendinfo2" type="button" value="5">Enviar</button>
                </div>
            </div>
         </form>
        </div>

        <!--form vehiculos-->
        <div id="formVAct">
            <form action="" method="post">
            <div>
                <div class="col-6">
                    <label for="">Placa</label>
                    <input type="text" name="placa" id="placa">
                </div>
                <div class="col-6">
                    <label for="">Color</label>
                    <input type="text" name="color" id="color">
                </div>
                <div >
                    <label for="">Conductor </label>
                    <select name="conductor" id="conductor">
                        <?=$selectTypeCar?>
                    </select>        
                </div>
                <div >
                    <label for="">Tipo De Vehiculo </label>
                    <select name="typeuser" id="typeuser">
                        <?=$selectTypeCar?>
                    </select>
                        
                </div>
            </div>
            <div>
                <div >
                    <label for="">Propietario</label>
                    <select name="propietario" id="propietario">
                        <?=$selectTypeCar?>
                    </select>
                        
                </div>
                <div>
                    <label for="">Marca</label>
                    <input type="text" name="marca" id="marca">
                </div>
                <div>
                    <button id="sendinfov" type="button" value="5">Enviar</button>
                </div>
            </div>
         </form>
        </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../assets/app/updateInfo.js"></script>
</body>
</html>