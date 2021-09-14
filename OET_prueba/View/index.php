<?php 
require_once ("../Controller/ControllerMain.php");
$controller= new ControllerMain();
$table=$controller->gridRow();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <div>
        <button id="add" type="submit">Agregar</button>
    </div>
    <div>
        <button id="edit" type="submit">Editar</button>
    </div>
    <div>
        <table id="contentData">
            <thead>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
            </thead>
            <tbody>
                <?=$table?>
            </tbody>
            <tfoot>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
            </tfoot>
        </table>
    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/app/querys.js"></script>
</body>
</html>