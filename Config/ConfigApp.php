<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'CarreraController#home',
      'agregar'=> 'CarreraController#agregar',
      'eliminar'=> 'CarreraController#eliminar',
      'editar'=> 'CarreraController#editar',
      'guardarEditar'=> 'CarreraController#guardarEditar',
      'mostrarCatedras'=> 'CatedraController#mostrar',
      'agregarCatedra'=> 'CatedraController#agregar',
      'eliminarCatedra'=> 'CatedraController#eliminar',
      'editarCatedra'=> 'CatedraController#editar',
      'guardarEditarCatedra'=> 'CatedraController#guardarEditar',
      'borrarCarreraCompleta' => 'CatedraController#borrarCarreraCompleta',
      'mostrarUna' => 'CatedraController#mostrarUna'
    ];

}

 ?>
