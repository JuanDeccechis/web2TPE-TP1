<?php
require_once  "./View/CatedraView.php";
require_once  "./Model/CatedraModel.php";
require_once  "./Model/CarreraModel.php";
require_once  "SecuredController.php";

class CatedraController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;
  private $carreraModel;

  function __construct()
  {
    parent::__construct();
    $this->view = new CatedraView();
    $this->model = new CatedraModel();
    $this->Titulo = "Lista de catedras";
    $this->carreraModel = new CarreraModel();
  }

  function mostrar(){
      //$catedras = $this->model->get();
    $lista=[];
    $carreras = $this->carreraModel->mostrar();
    for ($i=0; $i < count($carreras); $i++) { 
      array_push($lista, $carreras[$i]);
      $catedras = $this->model->mostrarPorCarrera($carreras[$i]['id']);
      for ($j=0; $j < count($catedras); $j++) { 
        array_push($lista, $catedras[$j]);        
      }
    }
    $this->view->mostrar($this->Titulo, $lista);
  }

  function mostrarUna($param){
    $id_carrera = $param[0];
    $catedras = $this->model->mostrarPorCarrera($id_carrera);
    $this->view->mostrar($this->Titulo, $catedras);
  }

  function agregar(){
    $nombre = $_POST["nombreForm"];
    $link = $_POST["linkForm"];
    $id_carrera = $_POST["idCarreraForm"];
    $cant_alumnos = 1;
    $afectados = $this->model->agregar($nombre, $link, $cant_alumnos, $id_carrera);
    if ($afectados) {
     header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras"); 
    }else{
      $resul = "";
      $carreras = $this->carreraModel->mostrar();
      print("los posibles id de carrera son: ". "<br>");
      for ($i=0; $i < count($carreras); $i++) { 
        printf($carreras[$i]['id'] . " - " .$carreras[$i]['nombre']. "<br>");
      }
      $this->view->resultado("agregar catedra", $afectados);
    }
    //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras");
  }

  function eliminar($param){
    $this->model->eliminar($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras");
  }

  function editar($param){
      $idCatedra = $param[0];
      $catedra = $this->model->mostrarUno($idCatedra);
      $this->view->mostrarOne($this->Titulo, $catedra);
  }

  function guardarEditar(){
    $id_catedra = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $link = $_POST["linkForm"];
    $id_carrera = $_POST["id_carreraForm"];
    $cant_alumnos = 2;
    $afectados = $this->model->guardarEditar($nombre,$link,$cant_alumnos,$id_carrera,$id_catedra);
    if ($afectados) {
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras");
    }else{
      $resul = "";
      $carreras = $this->carreraModel->mostrar();
      print("los posibles id de carrera son: ". "<br>");
      for ($i=0; $i < count($carreras); $i++) { 
        printf($carreras[$i]['id'] . " - " .$carreras[$i]['nombre']. "<br>");
      }
      $this->view->resultado("editar catedra", $afectados);
    }
    //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"])."/mostrarCatedras");
  }

  function borrarCarreraCompleta($param){
    $id_carrera = $param[0];
    $catedras = $this->model->mostrarPorCarrera($id_carrera);
    print(count($catedras));
    for ($i=0; $i < count($catedras); $i++) { 
      $this->model->eliminar($catedras[$i]['id']);
    }
    $this->carreraModel->eliminar($id_carrera);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    
  }
}

 ?>
