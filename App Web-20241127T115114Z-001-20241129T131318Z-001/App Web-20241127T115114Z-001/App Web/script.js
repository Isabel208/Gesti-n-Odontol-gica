$(document).ready(function(){
    $("#frmPaciente").dialog({
    autoOpen: false,
    height: 310,
    width: 400,
    modal: true,
    buttons: {
    "Insertar":insertarPaciente,
    "Cancelar":cancelar
    }
    });
    });
    function consultarPaciente(){
    var url = "index.php?accion=consultarPaciente&documento=" +
    $("#asignarDocumento").val();
    $("#paciente").load(url,function(){
    });
    }
    function mostrarFormulario(){
    documento = "" + $("#asignarDocumento").val();
    $("#PacDocumento").attr("value",documento);
    $("#frmPaciente").dialog('open');
    }

    function insertarPaciente(){
        queryString = $("#agregarPaciente").serialize();
        url = "index.php?accion=ingresarPaciente&" + queryString ;
        $("#paciente").load(url);
        $("#frmPaciente").dialog('close');
        }
        function cancelar(){
        $(this).dialog('close');
        }
    
        function cargarHoras(){
            if( ($("#medico").val() == -1 ) || ($("#fecha").val() == "")){
            $("#hora").html("<option value='-1' selected='selected'>--Selecione la
            - hora <option/>")
            } 
            else {
            queryString = "medico="+$("#medico").val()+"&fecha="+$("#fecha").val();
            url = "index.php?accion=consultarHora&" + queryString ;
            $("#hora").load(url);
            }
            }
<tr>
<td>Hora</td>
<td>
<select id="hora" name="hora">
<option value="-1" selected="selected">---Seleccione
la hora ---</option>
<option>08:00:00</option>
<option>08:20:00</option>
<option>08:40:00</option>
<option>09:00:00</option>

</select>
</td>
</tr>


select<
<tr>
<td>Hora</td>
<td>
<select id="hora" name="hora" onmousedown="seleccionarHora()">
<option value="-1" selected="selected">---Seleccione
la hora ---</option>

FAVA - Formación en Ambientes Virtuales de Aprendizaje
SENA - Servicio Nacional de Aprendizaje. 92

Desarrollo de aplicaciones web en PHP

</select>
</td>
</tr>
