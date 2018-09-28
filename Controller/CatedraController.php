<?php
require_once  "./View/CatedraView.php";
require_once  "./Model/CatedraModel.php";

class CatedraController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new CatedraView();
    $this->model = new CatedraModel();
    $this->Titulo = "Lista de catedras";
  }

  function mostrar(){
      $catedras = $this->model->get();
      $this->view->mostrar($this->Titulo, $catedras);
  }

  function agregar(){
    $nombre = $_POST["nombreForm"];
    $link = $_POST["linkForm"];
    $idCarrera = $_POST["idCarreraForm"];
    $cant_alumnos = 1;
    $this->model->agregar($nombre, $link, $cant_alumnos, $idCarrera);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function eliminar($param){
    $this->model->eliminar($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function editar($param){
      $idCatedra = $param[0];
      $catedra = $this->model->getOne($idCatedra);
      $this->view->mostrarOne($this->Titulo, $catedra);
  }

  function guardarEditar(){
    $id_catedra = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $link = $_POST["linkForm"];
    $id_carrera = $_POST["id_carreraForm"];
    $cant_alumnos = 2;
    $this->model->guardarEditar($nombre,$link,$cant_alumnos,$id_carrera,$id_catedra);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
