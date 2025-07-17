<?php
// include_once "config.php";
    class ConnectDB {
        public $conn;
        function __construct($servername, $dbname, $username, $password) {
            try {
                $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $this->conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // return $this->conn=$conn;
            } catch (PDOException $e) {
                die("Mat Ket Noi: " . $e->getMessage());
            }
        }
        function sql_query_all($sql) {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }
    }
?>