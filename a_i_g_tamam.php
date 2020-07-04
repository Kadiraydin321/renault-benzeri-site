<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php
    $id=$_GET["id"];

    $link="http://localhost/renault/araba_bilgi.php?id=".$id;
    $aciklama=htmlentities($_POST["aciklama"], ENT_QUOTES, "UTF-8");

    $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='3'");
    $rw=mysql_fetch_array($query);
    if(!empty($_FILES["resim"]["name"])){

      unlink($rw["resim"]);

      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["resim"]["name"];
      $dosya_yol=$_FILES["resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
      $query="update genelleme set
                  araba_id ='$id',
                  icerik_id='3',
                  baslik='$_POST[baslik]',
                  resim='$knm',
                  aciklama='$aciklama',
                  link='$link' where id='$rw[id]'
                  ";
    }
    else {
      $query="update genelleme set
                  araba_id ='$id',
                  icerik_id='3',
                  baslik='$_POST[baslik]',
                  aciklama='$aciklama',
                  link='$link' where id='$rw[id]'
                  ";
    }
    mysql_query($query) or die(mysql_error());
    header("Location: index.php");
?>
