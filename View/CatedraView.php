<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class CatedraView
{

  function mostrar($Titulo, $catedras){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Catedras',$catedras);
    $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $smarty->display('templates/mostrarCatedras.tpl');
  }

  function mostrarOne($Titulo, $catedra){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Cat',$catedra);
    $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $smarty->display('templates/mostrarEditarCatedra.tpl');
  }

  function resultado($metodo, $afectados){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$metodo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Car',$afectados);
    $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras");

    //$smarty->debugging = true;
    $smarty->display('templates/afectados.tpl');
  }
}


 ?>


