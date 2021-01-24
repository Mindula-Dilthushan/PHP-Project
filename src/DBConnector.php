<?php
include_once './DBConfig.php';
class DBConnector{
    private $conn;

    function __construct(){
        //connect to db
        $this->connect();
    }

    function __destruct(){
        $this->close();
    }

    function getConnection(){
        return $this->conn;
    }

    function connect(){
        include_once dirname(__FILE__).'/DBConfig.php';
        $this->conn = mysqli_connect(HOST,USERNAME,PASSWORD)or die(mysqli_errno());

        mysqli_set_charset($this->conn,"utf8");

        mysqli_select_db($this->conn,DATABASE_NAME)or die(mysqli_errno());

        return $this->conn;
    }

    function close(){
        mysqli_close($this->conn);
    }
}
?>