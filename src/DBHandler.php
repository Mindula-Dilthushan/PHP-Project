<?php
    include_once './DBConnector.php';

    $db = new DBConnect();

    $conn = $db->getConnection();

    if($conn) {
        echo "DataBase Connected";
    }else{
        echo "DataBase Not Connected";
    }
?>