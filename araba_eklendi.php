<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php
      $query="insert into araba_bilgileri set
              model='$_POST[model]',
              fiyat='$_POST[fiyat]'
              ";
      mysql_query($query);
      $que=mysql_query("select * from araba_bilgileri where model='$_POST[model]' ");
      $rw=mysql_fetch_array($que);
      $id=$rw["id"];
      header("Location: a_index_ekle.php?id=$id");
 ?>
