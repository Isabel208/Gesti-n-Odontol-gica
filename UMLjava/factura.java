import java.util.Arraylits;

public class Factura extends Comprobante {
  
  private Arraylist<Producto> mProducto;
  private float total;
  private Cliente mCliente;
  
  public Factura () {
  }
  public Cliente getCliente () {
    return mCliente;
  }
  public void setCliente (Cliente val) {
    this.mCliente = val;
  }
  public float getTotal () {
    return total;
  }
  public void setTotal (float val) {
    this.total = val;
  }
  public ArrayList<Producto> getProducto () {
    return mProducto;
  }
  public void setProducto (ArrayList<Producto> val) {
    this.mProducto = val;
  }
}
