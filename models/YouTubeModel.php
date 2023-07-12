<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class YouTubeModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'sportsClanYoutubeLinks';
        } else {
            echo 'Connection Error: sportsClanYoutubeLinks';
            die();
        }
    }

    public function getYoutubeLinks() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table ORDER BY id ASC");
            $stmt->execute();

            $checkStatus = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($checkStatus) {
                return $checkStatus;
            } else { 
                return FALSE;
            }
        } catch (PDOException $e) {            
            return FALSE;
        } 
    }

}
?>