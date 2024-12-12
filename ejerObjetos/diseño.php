<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
//se incluye el archivo donde esta el código de la clase Persona
include "Persona.php";
//Se instancia el primer Objeto
$objPersona = new Persona("Pedro Picapiedra");
echo "Nombre del primer objeto Persona: " . $objPersona->getNombre();
/* Para poder mostrar en pantalla el nombre de la
persona se debe utilizar el método getNombre(), ya que
el atributo $nombre es privado.*/
//Ahora se instancia otra vez la clase persona
$objPersona2 = new Persona("Vilma");
echo "<br> Nombre del segundo objeto Persona: " . $objPersona2->getNombre();
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
//Se incluye el archivo donde esta el codigo de la clase Persona
include "Estudiante.php";
//Se instancia el primer objeto tipo Estudiante
$objEstudiante = new Estudiante("Cesar Cuellar", "ADSI");
//SE crea otro objeto de tipo Estudiante
$objEstudiante2 = new Estudiante("Marcela Mendez", "Multimedia");
echo "ESTUDIANTES INSCRITOS";
/*Se muestra por pantalla los datos de los estudiantes
se accede al metodo getNombre() que lo hereda de la clase Persona*/
echo "<br>Nombre del estudiante: " . $objEstudiante->getNombre();
/*Ahora se va a imprimir en pantalla el Curso, para ello
se accede al método getCurso() propio de la clase Estudiante.*/
echo "<br> Curso que se encuentra el Estudiante : ". $objEstudiante->getCurso();
echo "<br> Nombre del Estudiante : ". $objEstudiante2->getNombre();
echo "<br> Curso que se encuentra el Estudiante : ". $objEstudiante2->getCurso();
?>
</body>
</html>

<?php
