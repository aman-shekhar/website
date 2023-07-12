<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class GameModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'games';
        } 
        // else {
        //     echo 'Connection Error: game';
        //     die();
        // }
    }
    
    public function fetchAllSportGames() {
        try {
            // $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE gameType='Sport'");
            // $stmt->execute();

            // $checkStatus = $stmt->fetchAll(PDO::FETCH_OBJ);

            // if ($checkStatus) {
            //     return $checkStatus;
            // } else { 
            //     return FALSE;
            // }
        } catch (PDOException $e) {            
            return FALSE;
        }
    }

    public function fetchAllTraditionalGames() {
        try {
            // $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE gameType='Traditional'");
            // $stmt->execute();

            // $checkStatus = $stmt->fetchAll(PDO::FETCH_OBJ);

            // if ($checkStatus) {
            //     return $checkStatus;
            // } else { 
            //     return FALSE;
            // }
        } catch (PDOException $e) {            
            return FALSE;
        } 
    }

}
?>