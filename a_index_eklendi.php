<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php
    $id=$_GET["id"];

    if(!empty($_FILES["resim"]["name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["resim"]["name"];
      $dosya_yol=$_FILES["resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $link="http://localhost/renault/araba_bilgi.php?id=".$id;
    $aciklama=htmlentities($_POST["aciklama"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id ='$id',
                icerik_id='3',
                baslik='$_POST[baslik]',
                resim='$knm',
                aciklama='$aciklama',
                link='$link'
                ");
    header("Location: a_bilgi_sayfasi_ekle.php?id=$id");
?>
