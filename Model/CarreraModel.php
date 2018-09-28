<?php
/**
 *
 */
class CarreraModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web2_tp1;charset=utf8'
    , 'root', '');
  }

  function get(){

      $sentencia = $this->db->prepare( "select * from carrera");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function agregar($nombre,$descripcion){
    $sentencia = $this->db->prepare("INSERT INTO carrera(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombre,$descripcion));
  }

  function eliminar($id){
    $sentencia = $this->db->prepare( "delete from carrera where id=?");
    $sentencia->execute(array($id));
    $resul = $sentencia->rowCount();
        printf("Registros borrados: %d\n", $resul);
    return $resul;
  }

  function getOne($id){
      $sentencia = $this->db->prepare( "select * from carrera where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarEditar($nombre,$descripcion,$id){
    $sentencia = $this->db->prepare( "update carrera set nombre = ?, descripcion = ? where id=?");
    $sentencia->execute(array($nombre,$descripcion,$id));
  }
}


 ?>
