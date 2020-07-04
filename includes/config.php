<?php session_start();

    $host="localhost";
    $user_name="root";
    $password="";

    $database="renault";

    $con=mysql_connect($host,$user_name,$password) or die("Mysql bağlantısı hatası: ".mysql_error());

    mysql_select_db($database,$con) or die("Veritabanı bağlantı hatası: ".mysql_error());

    mysql_query("SET NAMES UTF8") or die("Sorgulama hatası: ".mysql_error());

?>
