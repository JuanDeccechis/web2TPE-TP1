<?php
require('libs/Smarty.class.php');

abstract class AbstractView
{
  function show($Titulo, $table, $elementos, $template){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Table',$table);
    $smarty->assign('Elementos',$elementos);
    $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $smarty->assign('sesion_activa', isset($_SESSION["User"]));
    $smarty->display($template);
  }
}


?>