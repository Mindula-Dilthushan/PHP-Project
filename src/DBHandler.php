<?php
    include_once './DBConnector.php';

    $db = new DBConnector();

    $conn = $db->getConnection();

    if($conn) {
        echo "DataBase Connected\n";

       $query = "CREATE TABLE student(
                            stid char(20) PRIMARY KEY,
                            fname varchar(40),
                            lname varchar(40),
                            age int)";

        $respond = mysqli_query($conn,$query);

        if($respond){
            echo "Table Created";
        }else{
            echo "Table Not Created";
        }

    }else{
        echo "DataBase Not Connected";
    }
?>