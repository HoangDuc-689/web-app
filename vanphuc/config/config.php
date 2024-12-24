<?php
class Database {
    private $host = "web-servervp.database.windows.net";
    private $db_name = "web-servervp";
    private $username = "duch@web-servervp.database.windows.net";
    private $password = "Duch@123";
    public $conn;

    // Hàm kết nối cơ sở dữ liệu
    public function getConnection() {
        $this->conn = null;

        try {
            $dsn = "sqlsrv:Server=$this->host,1433;Database=$this->db_name";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
