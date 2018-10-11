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
    $nombre = $_POST["nombreForm"];
    $descripcion = $_POST["descripcionForm"];
    $this->model->agregar($nombre,$descripcion);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function eliminar($param){
    $afectados = $this->model->eliminar($param[0]);
    if ($afectados) {
      $this->view->resultado("eliminar carrera", $afectados);
    }else{
      print("esta carrera tiene catedras dependiendo. ". "<br>");
      print("Desea eliminar la carrera junto con todas sus catedras?. ". "<br>");
      $this->view->borrarCarreraCompleta("eliminar carrera", $param[0]);
    }
    //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function editar($param){
      $idCarrera = $param[0];
      $carrera = $this->model->mostrarUno($idCarrera);
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
