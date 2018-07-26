<?php
  class Generos {

    public static $TodosLosGeneros;


    public static function ListadoGeneros() {
      if (!isset(self::$TodosLosGeneros)) {

      require_once 'connect.php';

      try {
        $sql = "SELECT name FROM genres";
        $query = $db->prepare($sql);
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $generos;
      }
      catch( PDOException $Exception ) {
        var_dump($Exception);
      }
    }
  }
}
?>
