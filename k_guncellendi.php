<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}


if (!empty($_POST["sifre"])) {

  $sifre=md5($_POST["sifre"]);

  $query="update kullanici set
                adi_soyadi='$_POST[adi_soyadi]',
                k_adi='$_POST[k_adi]',
                sifre='$sifre' where id='$_GET[id]' ";
}
else {
  $query="update kullanici set
                adi_soyadi='$_POST[adi_soyadi]',
                k_adi='$_POST[k_adi]' where id='$_GET[id]' ";
}
mysql_query($query);

header("Location: k_guncelle.php?id=$_GET[id]");
 ?>
