<?php
define('host','localhost');
define('DB_NAME','voiture');
define('USER','root');
define('PASS','');

try {
    $bdd = new PDO("mysql:host=".HOST.";dbname".DB_NAME,USER,PASS);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"connect > OK!";
    }catch (PDOException $e) {
    echo $e;
}

?>