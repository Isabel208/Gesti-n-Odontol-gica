/*
* Ejemplo de programa con estructura condicional
* Programa que lea un carácter por teclado y compruebe si es un número
*/
import java.io.*;
public class condicional1_7 {
public static void main(String[] args) throws IOException {
char car1;
System.out.print("Introduzca carácter: ");
car1 = (char)System.in.read(); //lee un carácter
if(Character.isDigit(car1)) //utilizamos el método isDigit de la clase Character
System.out.println("Es un número");
else
System.out.println("No es un número");
}
}