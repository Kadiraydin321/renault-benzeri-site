<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}

mysql_query("delete from kullanici where id='$_GET[id]' ");
header("Location: kullaniciler.php");
?>
