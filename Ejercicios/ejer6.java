import java.util.*;
public class Main {

public static void main(String[] args) {
Scanner sc = new Scanner(System.in);
double velocidad;
System.out.println("Introduzca velocidad en Km/h: ");
velocidad = sc.nextDouble();
System.out.println(velocidad + " Km/h -> " + velocidad*1000/3600 + " m/s");
}