<?php
class Evento {
    public $titulo;
    public $descripcion;
    public $fecha;
    public $horaInicio;
    public $horaFin;
    public $ubicacion;

    public function __construct($titulo, $descripcion, $fecha, $horaInicio, $horaFin, $ubicacion) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->ubicacion = $ubicacion;
    }

    public function programarEvento($fecha, $horaInicio, $horaFin) {
        $this->fecha = $fecha;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    public function cambiarUbicacion($nuevaUbicacion) {
        $this->ubicacion = $nuevaUbicacion;
    }

    public function cancelarEvento() {
        $this->fecha = null;
        $this->horaInicio = null;
        $this->horaFin = null;
        $this->ubicacion = null;
    }
}
?>
