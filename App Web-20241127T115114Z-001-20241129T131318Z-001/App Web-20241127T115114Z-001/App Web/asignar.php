<form id="frmasignar" action="index.php?accion=guardarCita" method="post">
<table>
<tr>
<td>Documento del paciente</td>
<td><input type="text" name="asignarDocumento" id="asignarDocumento"></
td>
</tr>
<tr>
<td colspan="2"><input type="button" value="Consultar"
name="asignarConsultar" id="asignarConsultar"></td>

</tr>
<tr><td colspan="2"><div id="paciente"></div></td>
</tr>
<tr>
<td>Médico</td>
<td>
<select id="medico" name="medico">
<option value="-1" selected="selected">---Selecione el
Médico</option>
<option value="12345">12345-Pepito Pérez</option>
<option value="67890">67890-Pepita Mendieta</option>
</select>
</td>
</tr>
<tr>
<td>Fecha</td>
<td>
<input type="date" id="fecha" name="fecha">
</td>
</tr>
<tr>
<td>Hora</td>
<td>
<select id="hora" name="hora">
<option value="-1" selected="selected">---Seleccione la
hora ---</option>
<option>08:00:00</option>
<option>08:20:00</option>
<option>08:40:00</option>
<option>09:00:00</option>
</select>
</td>
</tr>
<tr>
<td>Consultorio</td>
<td>
<select id="consultorio" name="consultorio">
<option value="-1" selected="selected">---Seleccione el
Consultorio---</option>
<option value="1">1 Consultas 1</option>
<option value="2">2 Tratamientos 1</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="asignarEnviar" value="Enviar"

id="asignarEnviar">
</td>
</tr>
</table>
</form>

<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
<script src="Vista/jquery/jquery-3.2.1.min.js" type="text/javascript"></
script>
<script src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.js"
type="text/javascript"></script>
<link href="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.min.css"
rel="stylesheet" type="text/css"/>
<script src="Vista/js/script.js" type="text/javascript"></script>
<script>
</script>
</head>

<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
<script src="Vista/jquery/jquery-3.2.1.min.js" type="text/javascript"></
script>
<script src="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.js"
type="text/javascript"></script>
<link href="Vista/jquery/jquery-ui-1.12.1.custom/jquery-ui.min.css"
rel="stylesheet" type="text/css"/>
<script src="Vista/js/script.js" type="text/javascript"></script>
<script>
</script>

<div id="frmPaciente" title="Agregar Nuevo Paciente">
<form id="agregarPaciente">
<table>
<tr>
<td>Documento</td>

<td><input type="text" name="PacDocumento"

id="PacDocumento"></td>
</tr>
<tr>

<td>Nombres</td>

<td><input type="text" name="PacNombres"

id="PacNombres"></td>
</tr>
<tr>

<td>Apellidos</td>

<td><input type="text" name="PacApellidos"

id="PacApellidos"></td>
</tr>
<tr>

<td>Fecha de Nacimiento</td>

<td><input type="text" name="PacNacimiento"

id="PacNacimiento"></td>
</tr>
<tr>

<td>Sexo</td>

<td>

<select id="pacSexo" name="PacSexo">
<option value="-1"

selected="selected">--Selecione el sexo ---</option>
<option value="M">Masculino</option>
<option value="F">Femenino</option>

</select>
</td>
</tr>
</table>
</form>
</div>

<select id="medico" name="medico" onchange="cargarHoras()">
<input type="date" id="fecha" name="fecha" onchange="cargarHoras()">