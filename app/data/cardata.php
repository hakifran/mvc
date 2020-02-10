<?php
  /**
   *
   */
  class cardata
  {
    public $conn;

    function __construct()
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $this->conn = new PDO("mysql:host=$servername;dbname=car", $username, $password);
    }

    function getAllCars()
    {
      $result = [];
      try {
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->conn->prepare("SELECT * from cars");
        $stmt->execute();
        $result = $stmt->fetchAll();
        }
      catch(PDOException $e)
        {
          echo $e.message;
        }
        return $result;
    }

    function getCar($id)
    {

      $result = [];
      try {
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->conn->prepare("SELECT * from cars where id=".$id."");
        $stmt->execute();
        $result = $stmt->fetchAll();
        }
      catch(PDOException $e)
        {
          echo $e.message;
        }
        return $result;
    }

    function createcar($params){

      $sql = "INSERT INTO cars (marque, serie, annee, km) VALUES ('".$params['marque']."','". $params['serie']."','". $params['annee']."','". $params['km']."')";
      $this->conn->query($sql);

    }

    function update($params) {
      $sql = "UPDATE cars SET marque='".$params['marque']."', serie='". $params['serie']."', annee='". $params['annee']."', km='". $params['km']."' where id='". $params['id']."'";
      $this->conn->query($sql);
    }

    function delete($id) {
      $sql =  "DELETE FROM cars where id='".$id."'";
      $this->conn->query($sql);
    }
  }

 ?>
