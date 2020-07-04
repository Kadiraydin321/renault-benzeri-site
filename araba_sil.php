<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php
   $id=$_GET["id"];

  mysql_query("delete from araba_bilgileri where id='$id'");
  mysql_query("delete from genelleme where araba_id='$id'");
  mysql_query("delete from ekipman where araba_id='$id'");
  mysql_query("delete from teknik_ozellikler where araba_id='$id'");

  header("Location: index.php");
 ?>
