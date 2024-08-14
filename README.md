# Aplicaciones
Repositorio con distintos objetos que podrían ser utilizados para la realización de una aplicación.
<?php
class Empleado {
    public $empleadoID;
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $salarioBase;
    public $foto;

    public function __construct($empleadoID, $nombre, $apellido, $fechaNacimiento, $salarioBase, $foto) {
        $this->empleadoID = $empleadoID;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->salarioBase = $salarioBase;
        $this->foto = $foto;
    }

    public function calcularAnticipo() {
        return $this->salarioBase * 0.45;
    }

    public function actualizarSalario($nuevoSalario) {
        $this->salarioBase = $nuevoSalario;
    }

    public function obtenerEdad() {
        $fechaActual = new DateTime();
        $fechaNacimiento = new DateTime($this->fechaNacimiento);
        $edad = $fechaActual->diff($fechaNacimiento);
        return $edad->y;
    }
}
?>
