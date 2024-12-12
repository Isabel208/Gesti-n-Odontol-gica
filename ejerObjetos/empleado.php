<?php
class Empleado
{
protected $cargo;
protected $identificacion;
protected $nombre;
protected $salario;
public function __Construct($identificacion,$nombre,$cargo)
{
$this->identificacion=$identificacion;
$this->nombre=$nombre;
$this->cargo=$cargo;
}
protected function getCargo()
{
return $this->cargo;
}
protected function getIdentificacion()
{
return $this->identificacion;
}
protected function getNombre()
{
return $this->nombre;
}
protected function getSalario()
{
return $this->salario;
}
protected function setCargo($newVal)
{
$this->cargo = $newVal;
}
protected function setIdentificacion($newVal)
{
$this->identificacion = $newVal;
}
protected function setNombre($newVal)
{
$this->nombre = $newVal;
}
protected function setSalario($newVal)

{
$this
-
>salario = $newVal
;

}
}
?>

<?php
class Planta extends Empleado
{
private $deducciones;
private $sueldoBasico;
private $valorExtras;
//Constructor
public function Planta($identificacion,$nombre,$cargo)
{
//Se ejecuta el constructor de la clase Padre Empleado
parent::__Construct($identificacion,$nombre,$cargo);
}
public function calcularSalario()
{
$this->salario=$this->sueldoBasico + $this->valorExtras -
$this->deducciones;
}
public function getDeducciones()
{
return $this->deducciones;
}
public function getSueldoBasico()
{
return $this->sueldoBasico;
}
public function getValorExtras()
{
return $this->valorExtras;
}
public function getCargo()
{
return $this->cargo;
}
public function getIdentificacion()
{
return $this->identificacion;
}
public function getNombre()
{
return $this->nombre;
}
public function getSalario()

{
return $this->salario;
}
public function setDeducciones($newVal)
{
$this->deducciones = $newVal;
}
public function setSueldoBasico($newVal)
{
$this->sueldoBasico = $newVal;
}
public function setValorExtras($newVal)
{
$this->valorExtras = $newVal;
}
}
?>