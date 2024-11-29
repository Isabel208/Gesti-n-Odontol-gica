public function consultarCitas($doc){
$gestorCita = new GestorCita();
$result = $gestorCita->consultarCitasPorDocumento($doc);
require_once 'Vista/html/consultarCitas.php';
}