<?php
/**/

define("DB_NAME","lastexam");
define("DB_USER","mummuter");
define("DB_PASSWORD","Contraseña");
define("DB_HOST","localhost");
define("DB_PORT","3306");

try{
    $connection = "mysql:dbname=".DB_NAME.";host=".DB_HOST.";port=".DB_PORT.";";
    $db = new PDO($connection, DB_USER,DB_PASSWORD);
    $db->exec('SET NAMES utf8');
}catch(PDOException $e){
    echo "No se ha podido conectar a la base de datos.";
    die();
}

$cache=false;
if($cache){
    $cacheOff="";
}else{
    $cacheOff="?time=".time();
}


?>