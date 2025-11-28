<?php
    $servername = "mysql-telegraph.mysql.database.azure.com:3306";
    $username = "dbadmin";
    $password = ".MaVoitureEstRouge";
    $dbname = "db_telegraph";

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