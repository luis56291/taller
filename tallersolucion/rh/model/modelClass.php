<?php

/**
 * Description of modelClass
 *
 * @author julianlasso
 */
class modelClass {
  
  static public function getRow($cod_rh) {
    try {
      $sql = 'SELECT rh.cod_rh, rh.desc_rh from rh where rh.cod_rh ='.$cod_rh;
      return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }
  
  static public function certifycod_rh($cod_rh) {
    try {
      $sql = 'SELECT rh.cod_rh, rh.desc_rh from rh where rh.cod_rh ='.$cod_rh;
      return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }
  
  /**
   * Método para actualizar la información del usuario
   * @param integer $id Variables contenedora del ID del usuario
   * @param array $data Array asociativo, cada posición es el nombre de las columnas en base de datos
   * @return \PDOException
   * @throws PDOException
   */
  static public function updrh($cod_rh, $data) {
    try {

      $sql = "UPDATE rh SET ";

      foreach ($data as $key => $value) {
        $sql = $sql . " " . $key . " = '" . $value . "', ";
      }

      $newLeng = strlen($sql) - 2;
      $sql = substr($sql, 0, $newLeng);

      $sql = $sql . " WHERE cod_rh = " . $cod_rh;

      dataBaseClass::getInstance()->beginTransaction();
      $rsp = dataBaseClass::getInstance()->exec($sql);
      dataBaseClass::getInstance()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("El rh no se ha guardado", 1530);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getInstance()->rollback();
      return $e;
    }
  }
  
  static public function delrh($cod_rh) {
    try {

      $sql = "DELETE FROM rh WHERE cod_rh = " . $cod_rh;

      dataBaseClass::getInstance()->beginTransaction();
      $rsp = dataBaseClass::getInstance()->exec($sql);
      dataBaseClass::getInstance()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("rh no ha sido eliminado", 1313);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getInstance()->rollback();
      return $e;
    }
  }

  /**
   * 
   * @return \PDOException
   */
  static public function getAll() {
    try {
      $sql = 'SELECT rh.cod_rh, rh.desc_rh, FROM rh';
      return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
      
        if($e->getCode() === 10) {
        echo 'Base de Datos no encotrada';
        
      
    }
  }

  /**
   * 
   * @param type $user
   * @param type $password
   * @param type $activate
   * @return \PDOException
   */
  static public function putNrh($user, $password, $activate) {
    try {
      $sql = "INSERT INTO rh( cod_rh, desc_rh) VALUES ('$user', '" . $cod_rh . "', $desc_rh)";
      dataBaseClass::getInstance()->beginTransaction();
      $rsp = dataBaseClass::getInstance()->exec($sql);
      dataBaseClass::getInstance()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("Elrh ha sido rejistrado", 4527);
    

      return $rsp;
    } catch (PDOException $e) {
      return $e;
    }
  }

}
?>