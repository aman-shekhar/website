<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class NewsletterModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'newsLetter';
        } else {
            echo 'Connection Error: newsLetter';
            die();
        }
    }
    
    public function insertNewsLetter($subscribeEmail) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO $this->table(subscribeEmail)VALUES(:subscribeEmail)");
            $stmt->bindParam(":subscribeEmail", $subscribeEmail);

            $checkStatus = $stmt->execute();

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