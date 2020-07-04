<?php include_once("includes/config.php"); ?>
<?php
    $id=$_GET["id"];
//*************************************************************
    $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='1'");
    $rw=mysql_fetch_array($query);
    $s_basi_aciklama=htmlentities($_POST["s_basi_aciklama"], ENT_QUOTES, "UTF-8");
    if(!empty($_FILES["s_basi_resim"]["tmp_name"])){

      unlink($rw["resim"]);

      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_basi_resim"]["name"];
      $dosya_yol=$_FILES["s_basi_resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
      $query="update genelleme set
                  araba_id ='$id',
                  icerik_id='1',
                  baslik='$_POST[s_basi_baslik]',
                  resim='$knm',
                  aciklama='$s_basi_aciklama' where id='$rw[id]'";
    }
    else {$query="update genelleme set
                araba_id ='$id',
                icerik_id='1',
                baslik='$_POST[s_basi_baslik]',
                aciklama='$s_basi_aciklama' where id='$rw[id]'";
    }
    mysql_query($query) or die(mysql_error());

//*************************************************************
$query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='2'");$i=1;
while($rw=mysql_fetch_array($query))
{   $s_orta_aciklama=htmlentities($_POST["s_orta_aciklama_".$i], ENT_QUOTES, "UTF-8");
    $baslik=$_POST["s_orta_baslik_".$i];
    if(!empty($_FILES["s_orta_resim_".$i]["tmp_name"])){

      unlink($rw["resim"]);

      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_orta_resim_".$i]["name"];
      $dosya_yol=$_FILES["s_orta_resim_".$i]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
      $query="update genelleme set
                  araba_id='$id',
                  icerik_id='2',
                  baslik='$baslik',
                  resim='$knm',
                  aciklama='$s_orta_aciklama' where id='$rw[id]'";
    }
    else {
      $query="update genelleme set
                  araba_id='$id',
                  icerik_id='2',
                  baslik='$baslik',
                  aciklama='$s_orta_aciklama' where id='$rw[id]'";  }
    mysql_query($query) or die(mysql_error());
$i++;  }
//*************************************************************
$query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='4'");
$rw=mysql_fetch_array($query);
    if(!empty($_FILES["s_sonu_resim"]["tmp_name"])){

      unlink($rw["resim"]);

      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_sonu_resim"]["name"];
      $dosya_yol=$_FILES["s_sonu_resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
      $query="update genelleme set
                  araba_id='$id',
                  icerik_id='4',
                  resim='$knm'where id='$rw[id]'";
    }
    else {
      $query="update genelleme set
                  araba_id='$id',
                  icerik_id='4' where id='$rw[id]'";
    }
    mysql_query($query) or die(mysql_error());
    header("Location: araba_bilgi.php?id=$id");
 ?>
