<?php
/**
 *
 */
require_once "AbstractModel.php";

class CarreraModel extends AbstractModel
{
  const INSTANCE = "carrera";

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function mostrar(){
    return $this->getAll(CarreraModel::INSTANCE);
  }

  function getBy($columna, $valor, $cantidad) {
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare( "select * from carrera where $columna=? limit $cantidad");
    $sentencia->execute(array($valor));
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function getNombres() { // Solo id y nombre de todas las carreras
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare("select id, nombre from carrera");
    $sentencia->execute();
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function mostrarUno($id){
    return $this->getOne(CarreraModel::INSTANCE, $id);
  }

  function eliminar($id){
    $afectados = $this->delete(CarreraModel::INSTANCE, $id);
    printf("Registros borrados: %d\n", $afectados);
    return $afectados;
  }

  function agregar($nombre,$descripcion){
    $sentencia = $this->db->prepare("INSERT INTO carrera(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombre,$descripcion));
  }

  function guardarEditar($nombre,$descripcion,$id){
    $sentencia = $this->db->prepare( "update carrera set nombre = ?, descripcion = ? where id=?");
    $sentencia->execute(array($nombre,$descripcion,$id));
  }
}


 ?>
