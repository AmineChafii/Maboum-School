<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="maboum_school";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo"La connecion a été bien établie";
    }
    catch (PDOException $e){
        echo "La connecion a echoué:" .$e->getMessage();
    }
?>