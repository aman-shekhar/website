<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class ReferelModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'referelCode';
        } else {
            echo 'Connection Error:referelCode';
            die();
        }
    }

    public function insertReferel($referPhoneNumber,$refCode,$optionalParam) {

        try {
            $stmt = $this->conn->prepare("INSERT INTO $this->table (referPhoneNumber,refCode,optionalParam)VALUES('$referPhoneNumber','$refCode','$optionalParam')");
            
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