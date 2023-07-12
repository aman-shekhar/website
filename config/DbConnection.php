<?php
class DbConnection {

    private $DB_host, $DB_user, $DB_pass, $DB_name;
    private $conn = null;

    public function __construct() {

        $config = include(__DIR__ . '/EnvironmentSettings.php');

        $this->DB_host = $config['DbCredential']['host'];
        $this->DB_user = $config['DbCredential']['username'];
        $this->DB_pass = $config['DbCredential']['password'];
        $this->DB_name = $config['DbCredential']['db'];
    }

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->DB_host};dbname={$this->DB_name}", $this->DB_user, $this->DB_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return false;
    }
}
?>