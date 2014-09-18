<?php

/**
 * Con esta clase se maneja la base de datos
 *
 * @author aprendiz Luis fernando Ochoa vasquez
 */
class dataBaseClass {

  /**
   * esta bariable se usa para indicar en que host se encuentra
   *  la base de datos 
   * @var string 
   */
  static private $host = 'localhost';

  /**
   * esta bariable nos indica el puerto de conexion a bd
   * @var integer
   */
  static private $port =3306,
          $dbname = 'proyecto_1',
          $user = 'root',
          $password = '',
          $driver = 'mysql', 
          $instance = NULL;
  
  static public function getInstance() {
    if (!self::$instance) {
      self::connect();
    }
    return self::$instance;
  }

  static private function connect() {
    try {
      $dsn = self::$driver
              . ':host='. self::$host
              . ';port=' . self::$port
              . ';dbname=' . self::$dbname;
      self::$instance = new PDO($dsn, self::$user, self::$password);
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

}
?>
