<?php

class Busqueda {
	public $titulo;
	public $capitulo;
	function __construct($titulo, $capitulo)
	{
		$this->titulo=$titulo;
		$this->capitulo=$capitulo;
	}

	public function getTitulo()
    {
        return $this->titulo;
    }
 
    public function getCapitulo()
    {
        return $this->capitulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    
     public function setCapitulo($capitulo)
    {
        $this->capitulo = $capitulo;
    }

 	public function datosver(){
	 	if ( !empty($_POST)) 
	 	{
	        $this->setTitulo($_POST['buscarTitulo']);
	        $this->setCapitulo($_POST['buscarCapitulo']);
	    }
    }

}
?>
