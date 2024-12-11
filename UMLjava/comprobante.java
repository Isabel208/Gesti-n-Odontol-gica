public class comprobante {
  private char tipo;
  private int numero;
  private fecha fecha;

public comprobante () {
}
public Fecha getFecha () {
  return fecha;
}
public void setFecha (Fecha val) {
  this.fecha = val;
}
public int getNumero (int val) {
  return numero;
}
public void setNumero (int val) {
  this.numero = val;
}
public char getTipo () {
  return tipo;
}
public void setTipo (char val) {
  this.tipo = val;
  }
}
