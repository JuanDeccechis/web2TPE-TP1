<?php
require_once "AbstractView.php";

class CatedraView extends AbstractView
{

  function mostrar($Titulo, $catedras){
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


