<?php
require_once "AbstractView.php";

class CatedraView extends AbstractView
{

  function mostrar($Titulo, $carreras, $catedras, $lista_de, $mensaje=''){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Elementos',$catedras);
    $smarty->assign('sesion_activa', isset($_SESSION["User"]));
    $smarty->assign('lista_de', $lista_de);
    $smarty->assign('carreras', $carreras);
    $smarty->assign('Mensaje', $mensaje);
    $smarty->display('templates/mostrarCatedras.tpl');
  }

  function mostrarEditarCatedra($Titulo, $catedra, $elementos){
    // $this->show($Titulo, 'catedra', $catedra, 'templates/mostrarEditarCatedra.tpl');
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Catedra',$catedra);
    $smarty->assign('Elementos',$elementos);
    $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $smarty->assign('sesion_activa', isset($_SESSION["User"]));
    $smarty->display('templates/mostrarEditarCatedra.tpl');
  }

  function resultado($metodo, $afectados){
    $this->show($metodo, 'catedra', $afectados, 'templates/afectados.tpl');
  }

  function detalle($carrera, $catedra) {
        $smarty = new Smarty();
        $smarty->assign('Titulo', "Información detallada de catedra");
        $smarty->assign('sesion_activa', isset($_SESSION["User"]));
        $smarty->assign('carrera', $carrera);
        $smarty->assign('catedra', $catedra);
        $smarty->display('templates/catedraDetalle.tpl');
  }
}


 ?>
