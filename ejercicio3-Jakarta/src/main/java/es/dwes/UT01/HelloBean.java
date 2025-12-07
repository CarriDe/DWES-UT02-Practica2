package es.dwes.UT01;

import java.io.Serializable;
import java.util.List;
import java.util.Map;
import java.util.HashMap;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {
    // Práctica 2: Genera en este bean el listado de usuarios que se mostrará en la página.xhtml
    private Usuario[] usuarios;
 
    public HelloBean() {
        Usuario sabrina = new Usuario("Sabrina", "Spellman", "11111111A", "sabrina@greendale.com", 16);
        sabrina.addPago("Enero", 30.0);
        sabrina.addPago("Febrero", 30.0);

        Usuario harvey = new Usuario("Harvey", "Kinkle", "22222222B", "harvey@greendale.com", 17);
        harvey.addPago("Enero", null);  
        harvey.addPago("Febrero", 25.0);

        // Array final con los dos usuarios
        usuarios = new Usuario[] { sabrina, harvey };
    }

    public Usuario[] getUsuarios() {
        return usuarios;
    }

    public List<Producto> getProductos() {
        return 
        List.of(
            new Producto("Manzanas", 2.5),
            new Producto("Peras", 3.0),
            new Producto("Plátanos", 1.8)
        );
 }

    // Clase interna para productos
    public static class Producto {
        private String nombre;
        private double precio;

        public Producto(String nombre, double precio) {
            this.nombre = nombre;
            this.precio = precio;
        }

        public String getNombre() { return nombre; }
        public double getPrecio() { return precio; }
    }

    // Práctica 2: Crea aquí la clase que defina a un usuario
    public static class Usuario {
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos;
        private double totalpagos;

        // Constructor
        public Usuario(String nombre, String apellidos, String dni, String email, int edad) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = new HashMap<>();
        }

        // Getters
        public String getNombre() { return nombre; }
        public String getApellidos() { return apellidos; }
        public String getDni() { return dni; }
        public String getEmail() { return email; }
        public int getEdad() { return edad; }
        public Map<String, Double> getPagos() { return pagos; }

        // Poner pagos en el mapa
        public void addPago(String mes, Double cantidad) {
            pagos.put(mes, cantidad);
        }
    }

}
