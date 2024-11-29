<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php

if( isset($_GET["accion"])){
    if($_GET["accion"] == "asignar"){
    $controlador->verPagina('Vista/html/asignar.php');
    }
    elseif($_GET["accion"] == "consultar"){
    $controlador->verPagina('Vista/html/consultar.php');
    }
    elseif($_GET["accion"] == "cancelar"){
    $controlador->verPagina('Vista/html/cancelar.php');
    }
    elseif($_GET["accion"] == "guardarCita"){
    $controlador->agregarCita(
        $_POST["asignarDocumento"],

        $_POST["medico"],
        $_POST["fecha"],
        $_POST["hora"],
        $_POST["consultorio"]);
        
        }
        elseif($_GET["accion"] == "consultarCita"){
        $controlador->consultarCitas($_POST["consultarDocumento"]);
        }
        } else {
        $controlador->verPagina('Vista/html/inicio.php');
        }

    ?>  
    </body>

    <div id="contenido">
<h2>Información General</h2>
<p>El Sistema de Gestión Odontológica permite administrar la información de los
pacientes,

tratamientos y citas a través de una interfaz web.</p>
<p>El sistema cuenta con las siguientes secciones:
<ul>
<li>Asignar cita</li>
<li>Consultar cita</li>
<li>Cancelar cita</li>
</ul>
</p>
</div>
