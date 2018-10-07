<?php
require_once "AbstractView.php";

class CatedraView extends AbstractView
{

  function mostrar($Titulo, $catedras){
  	if(isset($_SESSION["User"]))
    	$this->show($Titulo, 'catedra', $catedras, 'templates/mostrarCatedras_admin.tpl');
    else
    	$this->show($Titulo, 'catedra', $catedras, 'templates/mostrarCatedras.tpl');
  }

  function mostrarOne($Titulo, $catedra){
    $this->show($Titulo, 'catedra', $catedra, 'templates/mostrarEditarCatedra.tpl');
  }

  function resultado($metodo, $afectados){
    $this->show($metodo, 'catedra', $afectados, 'templates/afectados.tpl');
  }
}


 ?>


