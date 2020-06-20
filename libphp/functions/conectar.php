<?php

class conectar{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    // private $conn = new PDO("mysql:host=$servername;dbname=datacursos", $username, $password);
    public function pdo($servername, $username, $password)
    {
        //$servername = "localhost";
        //$username = "root";
        //$password = "";
        try 
        {
          $conn = new PDO("mysql:host=$servername;dbname=datacursos", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } 
        catch(PDOException $e) 
        {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    public function dc_cursos()
    {
        $this->pdo();
        $query = 'SELECT * FROM dc_cursos';
        $cons = $conn->prepare($query);
        $cons->execute();
        $row = $cons->fetch();
        echo $row['nome_cursos'];
    }
}


?>