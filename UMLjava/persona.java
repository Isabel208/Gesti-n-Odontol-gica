public class Persona {
  private String nombre; //propiedad
  private int edad; //propiedad

  public Persona () {  //constructor
  }
  public int getEdad () {  //asesor a carrera
    return edad;
  }
  public void setEdad (int val) {  //mutador de carrera
    this.edad = val;
  }
  public String getNombre () {  // asesor a legajo
    return nombre;
  }
  public void setNombre (String val) {  // mutador de legajo
    this.nombre = val;
  }
}
