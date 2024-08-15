<?php
class Robot {
    public $nombre;
    public $tipo;
    public $nivelEnergia;
    public $posicionX;
    public $posicionY;

    public function __construct($nombre, $tipo, $nivelEnergia, $posicionX = 0, $posicionY = 0) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->nivelEnergia = $nivelEnergia;
        $this->posicionX = $posicionX;
        $this->posicionY = $posicionY;
    }

    public function mover($x, $y) {
        $this->posicionX = $x;
        $this->posicionY = $y;
    }

    public function recargar() {
        $this->nivelEnergia = 100;
    }

    public function realizarTarea($tarea) {
        if ($this->nivelEnergia > 10) {
            $this->nivelEnergia -= 10;
            return "Realizando tarea: $tarea";
        } else {
            return "Nivel de energía insuficiente";
        }
    }
}
?>
