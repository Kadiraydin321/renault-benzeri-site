<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}

$sifre=md5($_POST["sifre"]);
mysql_query("insert into kullanici set
              adi_soyadi='$_POST[adi_soyadi]',
              k_adi='$_POST[k_adi]',
              sifre='$sifre'
              ");

header("Location: k_ekle.php");
 ?>
