<?php

require_once('lib/nusoap.php');
include 'busqueda.php';

	$client = new nusoap_client('http://www.webservicex.net/BibleWebservice.asmx?WSDL','wsdl');

    	$busqueda = new busqueda ("genesis", 2);
    	$busqueda->datosver();
 
    	$titulo= $busqueda ->getTitulo();
    	$capitulo= $busqueda ->getCapitulo();

		$resultados = $client->call("GetBibleWordsByBookTitleAndChapter", array("BookTitle"=> $titulo, "chapter"=>$capitulo));

		$libro = $resultados['GetBibleWordsByBookTitleAndChapterResult'];
		echo "Resultados del  Libro  ".$titulo." Titulo  ".$capitulo ;
		echo "<br/>";
		echo "<br/>".$libro;

	
?>

	