<?php
require('libs/Smarty.class.php');
/**
 *
 */
class CarreraView
{
  public $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrar($Titulo, $carreras){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Carreras',$carreras);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/home.tpl');
  }

  function mostrarOne($Titulo, $carrera){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Car',$carrera);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/mostrarEditarCarrera.tpl');
  }

  function resultado($metodo, $afectados){
    $this->Smarty->assign('Titulo',$metodo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Car',$afectados);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/afectados.tpl');
  }

  function borrarCarreraCompleta($metodo, $afectados){
    $this->Smarty->assign('Titulo',$metodo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Car',$afectados);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/borrarCarreraCompleta.tpl');
  }
  

}

 ?>
