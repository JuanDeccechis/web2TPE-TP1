<?php
require_once  "./View/CarreraView.php";
require_once  "./Model/CarreraModel.php";

class CarreraController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new CarreraView();
    $this->model = new CarreraModel();
    $this->Titulo = "Lista de carrera Controlador 1";
  }

  function home(){
    $carreras = $this->model->get();
    $this->view->mostrar($this->Titulo, $carreras);
  }

  function agregar(){
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $this->model->agregar($nombre,$descripcion);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function eliminar($param){
    $afectados = $this->model->eliminar($param[0]);
    $this->view->resultado("eliminar", $afectados);
    //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function editar($param){
      $idCarrera = $param[0];
      $carrera = $this->model->getOne($idCarrera);
      $this->view->mostrarOne($this->Titulo, $carrera);
  }

  function guardarEditar(){
    $id_carrera = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $this->model->guardarEditar($nombre,$descripcion,$id_carrera);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
