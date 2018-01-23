<?php


  Class BaseDeDados{
    private $conn;

    function getConnection(){

          if($conn){
            return $conn;
          }

          $conn = new mysqli('localhost', 'root', 'senha', 'testeAula');
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          return $conn;
      }

      function closeConnection(){
        if($conn) {
          $conn->close();
        }
      }

    }



?>
