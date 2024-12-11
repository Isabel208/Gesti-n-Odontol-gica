/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
package javaapplication1;
import java.util.ArrayList;
/**
*
* @author Usuario
*/
public class Empresa {

private ArrayList<Empleado> empleados;
//constructor
public Empresa()
{
empleados= new ArrayList<Empleado>();
}
//método que agrega empleados a la empresa
public void contratarEmpleado(Empleado e)
{
empleados.add(e);
}
//método que obtiene el total de empleados
public int getTotalEmpleados()
{
return empleados.size();
}
//método que muestra el nombre y salario de todos los empleados
public void nombreSalario()
{
for(Empleado e:empleados)
{
System.out.println(“Nombre: “+e.getNombre()+” Salario: “+e.getSalario());
}
}
//método que retorna el total de dinero pagado a todos los empleados
public double getTotalSalarios()
{
double total=0;
for(Empleado e:empleados)

Programación orientada a objetos aplicada en JAVA

{
total=total+e.getSalario();
}
return total;
}
//método que muestra el nombre, cargo y salario del empleado que más dinero gana
public void empleadoMayorSalario()
{
Empleado empMayorSalario=empleados.get(0);
double maxSalario=empleados.get(0).getSalario();
for(Empleado e:empleados)
{
if(e.getSalario()>maxSalario)
{
maxSalario=e.getSalario();
empMayorSalario=e;
}
}
System.out.println(“El empleado que mas dinero gana es “);
System.out.print(“Nombre:”+empMayorSalario.getNombre());
System.out.print(“ Cargo:”+empMayorSalario.getCargo());
System.out.println(“ Salario:”+empMayorSalario.getSalario());
}
//método que muestra el nombre, cargo y salario del empleado que menos dinero
gana
public void empleadoMenorSalario()
{
Empleado empMenorSalario=empleados.get(0);
double menSalario=empleados.get(0).getSalario();

for(Empleado e:empleados)
{
if(e.getSalario()<menSalario)
{
menSalario=e.getSalario();
empMenorSalario=e;
}
}
System.out.println(“El empleado que menos dinero gana es “);
System.out.print(“Nombre:”+empMenorSalario.getNombre());
System.out.print(“ Cargo:”+empMenorSalario.getCargo());
System.out.println(“ Salario:”+empMenorSalario.getSalario());
}
}