<?php
class Libro {
    public $titulo;
    public $autor;
    public $isbn;
    public $numeroPaginas;
    public $paginasLeidas;

    public function __construct($titulo, $autor, $isbn, $numeroPaginas, $paginasLeidas = 0) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->numeroPaginas = $numeroPaginas;
        $this->paginasLeidas = $paginasLeidas;
    }

    public function marcarPagina($pagina) {
        $this->paginasLeidas = $pagina;
    }

    public function obtenerProgreso() {
        return ($this->paginasLeidas / $this->numeroPaginas) * 100;
    }
}
?>
