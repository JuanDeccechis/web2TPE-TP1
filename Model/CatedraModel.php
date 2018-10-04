<?php
/**
 *
 */
require_once "AbstractModel.php";

class CatedraModel extends AbstractModel
{
  const INSTANCE = "catedra";
  
  function __construct()
  {
    $this->db = $this->Connect();
  }

  function mostrar(){
      return $this->getAll(CatedraModel::INSTANCE);
  }

  function eliminar($id){
    $afectados = $this->delete(CatedraModel::INSTANCE, $id);
  }

  function mostrarUno($id){
    return $this->getOne(CatedraModel::INSTANCE, $id);
  }

  function mostrarPorCarrera($id_carrera){
    return $this->getByIdCarrera(CatedraModel::INSTANCE, $id_carrera);
  }

  function agregar($nombre,$link, $cant_alumnos, $id_carrera){
    $sentencia = $this->db->prepare("INSERT INTO catedra(nombre, link, cant_alumnos, id_carrera) VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre,$link, $cant_alumnos, $id_carrera));
    $resul = $sentencia->rowCount();
        printf("Registros agregados: %d\n", $resul);
    return $resul;
  }

  function guardarEditar($nombre,$link,$cant_alumnos,$id_carrera,$id){
    $sentencia = $this->db->prepare( "update catedra set nombre = ?, link = ?, cant_alumnos = ?, id_carrera = ? where id=?");
    $sentencia->execute(array($nombre,$link, $cant_alumnos, $id_carrera, $id));
    $resul = $sentencia->rowCount();
    if ($resul) {
      printf("Registros editados: %d\n", $resul);
    }else{
      printf("No se editaron Registros: %d\n", $resul);
    }
    return $resul;
  }

}


 ?>
