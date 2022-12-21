<?php
/**
 * Created by PhpStorm.
 * User: Fabricio Maldonado
 * Date: 6/10/2018
 * Time: 14:43
 */

function getDB()
{

    $host='localhost:3306';
    $dbname='simulador';
    $user='root';
    $pass='';

    try {
        $pdo = new PDO("mysql:host=$host;port=5432;dbname=$dbname;", $user, $pass);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $pdo;
    }
    catch(PDOException $e) {
        echo "Se ha producido un error al intentar conectar al servidor Postgres: ".$e->getMessage();

    }
}

?>