<?php
/**
 *
 */
abstract class AbstractModel
{
  protected $db;

 
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web2_tp1;charset=utf8'
    , 'root', '');
  }

  function getAll($instance){
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare( "select * from $instance");
    $sentencia->execute();
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function delete($instance, $id){
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare( "delete from $instance where id=?");
    $sentencia->execute(array($id));
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->rowCount();
  }

  function getOne($instance, $id){
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare( "select * from $instance where id=?");
    $sentencia->execute(array($id));
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getByIdCarrera($instance, $id_carrera){
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare( "select * from $instance where id_carrera=?");
    $sentencia->execute(array($id_carrera));
    $this->db->commit();
    //$this->db->closeConnection();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);  
  }

}
