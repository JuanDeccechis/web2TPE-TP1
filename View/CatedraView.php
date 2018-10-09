<?php
require_once "AbstractView.php";

class CatedraView extends AbstractView
{

  function mostrar($Titulo, $catedras, $lista_de, $path, $id_catedra_detalle){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Elementos',$catedras);
    $smarty->assign('home', $path);
    $smarty->assign('sesion_activa', isset($_SESSION["User"]));
    $smarty->assign('lista_de', $lista_de);
    $smarty->assign('id_catedra_detalle', $id_catedra_detalle);
  	//if(isset($_SESSION["User"]))
    //	$smarty->display('templates/mostrarCatedras_admin.tpl');
    //else
    	$smarty->display('templates/mostrarCatedras.tpl');
  }

  function mostrarOne($Titulo, $catedra){
    $this->show($Titulo, 'catedra', $catedra, 'templates/mostrarEditarCatedra.tpl');
  }

  function resultado($metodo, $afectados){
    $this->show($metodo, 'catedra', $afectados, 'templates/afectados.tpl');
  }
}


 ?>


