<?php
require_once  "./View/CarreraView.php";
require_once  "./Model/CarreraModel.php";
require_once  "SecuredController.php";
class CarreraController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
    $this->view = new CarreraView();
    $this->model = new CarreraModel();
    $this->Titulo = "Carreras";
  }

  function home(){
    $carreras = $this->model->mostrar();
    $this->view->mostrar($this->Titulo, $carreras);
  }

  function agregar(){
    if (isset($_SESSION["User"])) {
      $nombre = $_POST["nombreForm"];
      $descripcion = $_POST["descripcionForm"];
      $this->model->agregar($nombre,$descripcion);
      header(HOME);
    }
    else
      header(HOME."/login");
  }

  function eliminar($param){
    if (isset($_SESSION["User"])) {
      $afectados = $this->model->eliminar($param[0]);
      if ($afectados)
        $this->view->resultado("eliminar carrera", $afectados);
      else
        $this->view->borrarCarreraCompleta("eliminar carrera", $param[0]);
    }
    else
      header(HOME."/login");
  }

  function editar($param){
    if (isset($_SESSION["User"])) {
      $idCarrera = $param[0];
      $carrera = $this->model->mostrarUno($idCarrera);
      $this->view->mostrarOne($this->Titulo, $carrera);
    }
    else
      header(HOME."/login");
  }

  function guardarEditar(){
    if (isset($_SESSION["User"])) {
      $id_carrera = $_POST["idForm"];
      $nombre = $_POST["nombreForm"];
      $descripcion = $_POST["descripcionForm"];
      $this->model->guardarEditar($nombre,$descripcion,$id_carrera);
      header(HOME);
    }
    else
      header(HOME."/login");
  }
}

 ?>
