<?php
    include_once __DIR__ . '/../config/DbConnection.php';
?>

<?php

class BlogModel {

    private $conn = null;
    private $table = null;

    public function __construct() {
        $dbConnection = new DbConnection();
        $this->conn = $dbConnection->connect();

        if ($this->conn) {
            $this->table = 'blog';
        } else {
            echo 'Connection Error: blog';
            die();
        }
    }
    
    public function fetchAllBlog() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table");
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

    public function fetchSingleBlog($blogId) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id=$blogId");
            $stmt->execute();

            $checkStatus = $stmt->fetch(PDO::FETCH_OBJ);

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