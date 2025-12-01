<?php
    $servername = "common-srv-ts2.mysql.database.azure.com";
    $username = "dbadmin";
    $password = "PoC#2025";
    $dbname = "telegraph_vgn";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [
                PDO::MYSQL_ATTR_SSL_CA => null,  
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false 
            ]);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Test réussi, la base de données db_telegraph est accessible";
    } 
    catch(PDOException $e) {
        echo "Test échoué, la base de données db_telegraph est inaccessible: " . $e->getMessage();
    }
?>