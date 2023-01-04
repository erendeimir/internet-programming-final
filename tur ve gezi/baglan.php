<?php 
try{
    $db = new PDO("mysql:host=lotus; dbname=kayit; charset=utf8", 'root', 'secret');
    //echo "Veritabanı bağlantısı başarılı";
}
catch(Exception $e)
{
    echo $e->getMessage();
}



?>
