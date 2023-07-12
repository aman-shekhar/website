<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class ContactUsModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'contactUs';
        } else {
            echo 'Connection Error: contactUs';
            die();
        }
    }

    public function insertContactUs($name,$email,$comments) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO $this->table(name,email,comments)VALUES('$name','$email','$comments')");
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