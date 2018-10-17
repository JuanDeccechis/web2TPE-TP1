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
    $this->Titulo = "Catedras";
    $this->carreraModel = new CarreraModel();
  }

/*  function mostrar(){
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
  }*/

  private function listaCarreras() { // retorna todas las carreras con sus catedras
    $carreras = $this->carreraModel->mostrar();
    for ($i=0; $i < count($carreras); $i++) {
      $catedras = $this->model->mostrarPorCarrera($carreras[$i]['id']);
      $carreras[$i]["catedras"] = $catedras;
    }
    return $carreras;
  }

  function mostrar(){
    $this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $this->listaCarreras(), 'carreras');
  }

  function mostrarUna($param){
    $id_carrera = $param[0];
    $carrera = $this->carreraModel->mostrarUno($id_carrera);
    $catedras = $this->model->mostrarPorCarrera($id_carrera);
    $carrera["catedras"] = $catedras;
    $lista_carreras [0] = $carrera;
    $this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $lista_carreras, 'catedras');
  }

  function mostrarEnDetalle($params) {
      $id_catedra = $params[0];
      $catedra = $this->model->mostrarUno($id_catedra);
      $carrera = $this->carreraModel->mostrarUno($catedra['id_carrera']);
      $this->view->detalle($carrera, $catedra);
  }

  function agregar(){
    if (isset($_SESSION["User"])) {
      $nombre = $_POST["nombreForm"];
      $link = $_POST["linkForm"];
      $nombre_carrera = $_POST["nombreCarreraForm"];
      // $id_carrera = $_POST["idCarreraForm"];
      $id_carrera = $this->carreraModel->getBy('nombre', $nombre_carrera, 1)['id'];
      $cant_alumnos = 1;
      $afectados = $this->model->agregar($nombre, $link, $cant_alumnos, $id_carrera);
      if ($afectados) {
       header(HOME."/mostrarCatedras");
      }else{
        $resul = "";
        $carreras = $this->carreraModel->mostrar();
        print("Las posibles carreras son: ". "<br>");
        for ($i=0; $i < count($carreras); $i++) {
          printf($carreras[$i]['id'] . " - " .$carreras[$i]['nombre']. "<br>");
        }
        $this->view->resultado("agregar catedra", $afectados);
      }
    }
    else
      //$this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $this->listaCarreras(), 'carreras');
      header(HOME."/login");
  }

  function eliminar($param){
    if (isset($_SESSION["User"])) {
      $this->model->eliminar($param[0]);
      header(HOME."/mostrarCatedras");
    }
    else
      //$this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $this->listaCarreras(), 'carreras');
      header(HOME."/login");
  }

  function editar($param){
    if (isset($_SESSION["User"])) {
      $idCatedra = $param[0];
      $catedra = $this->model->mostrarUno($idCatedra);
      $lista_carreras = $this->listaCarreras();
      $this->view->mostrarEditarCatedra($this->Titulo, $catedra, $lista_carreras);
    }
    else
      //$this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $this->listaCarreras(), 'carreras');
      header(HOME."/login");
  }

  function guardarEditar(){
    if (isset($_SESSION["User"])) {
      $id_catedra = $_POST["idForm"];
      $nombre = $_POST["nombreForm"];
      $link = $_POST["linkForm"];
      // $id_carrera = $_POST["id_carreraForm"];
      $nombre_carrera = $_POST["nombreCarreraForm"];
      $id_carrera = $this->carreraModel->getBy('nombre', $nombre_carrera, 1)['id'];
      $cant_alumnos = 2;
      $afectados = $this->model->guardarEditar($nombre,$link,$cant_alumnos,$id_carrera,$id_catedra);
      if ($afectados) {
        header(HOME."/mostrarCatedras");
      }else{
        $resul = "";
        $carreras = $this->carreraModel->mostrar();
        print("Las posibles carreras son: ". "<br>");
        for ($i=0; $i < count($carreras); $i++) {
          printf($carreras[$i]['id'] . " - " .$carreras[$i]['nombre']. "<br>");
        }
        $this->view->resultado("editar catedra", $afectados);
      } 
    }
    else
      header(HOME."/login");
  }

  function borrarCarreraCompleta($param){
    if (isset($_SESSION["User"])) {
      $id_carrera = $param[0];
      $catedras = $this->model->mostrarPorCarrera($id_carrera);
      for ($i=0; $i < count($catedras); $i++) {
        $this->model->eliminar($catedras[$i]['id']);
      }
      $this->carreraModel->eliminar($id_carrera);
      header(HOME);
    }
    else
      //$this->view->mostrar($this->Titulo, $this->carreraModel->getNombres(), $this->listaCarreras(), 'carreras');
      header(HOME."/login");
  }
}

 ?>
