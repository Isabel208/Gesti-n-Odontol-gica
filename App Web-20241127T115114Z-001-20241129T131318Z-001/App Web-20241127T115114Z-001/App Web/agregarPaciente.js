
public function agregarPaciente($doc, $nom, $ape, $fec, $sex) {
    $paciente = new Paciente($doc, $nom, $ape, $fec, $sex);
    $gestorCita = new GestorCita();
    $registros = $gestorCita - agregarPaciente($paciente);
    if ($registros > 0) {

        FAVA - Formación; en; Ambientes; Virtuales; de; Aprendizaje;
        SENA - Servicio; Nacional; de; Aprendizaje.; 87;

        Desarrollo; de; aplicaciones; web; en; PHP;

        echo; "Se insertó el paciente con exito";
    } else {
        echo; "Error al grabar el paciente";
    }
}

elseif($_GET["accion"] == "ingresarPaciente"){
    $controlador-agregarPaciente(
    $_GET["PacDocumento"],
    $_GET["PacNombres"],
    $_GET["PacApellidos"],
    $_GET["PacNacimiento"],
    $_GET["PacSexo"]
    );
    }
