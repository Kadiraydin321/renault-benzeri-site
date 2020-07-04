<?php include_once("includes/config.php"); ?>
<?php
    $id=$_GET["id"];
//*************************************************************
    if(isset($_FILES["s_basi_resim"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_basi_resim"]["name"];
      $dosya_yol=$_FILES["s_basi_resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $s_basi_aciklama=htmlentities($_POST["s_basi_aciklama"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id ='$id',
                icerik_id='1',
                baslik='$_POST[s_basi_baslik]',
                resim='$knm',
                aciklama='$s_basi_aciklama'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["s_orta_resim_1"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_orta_resim_1"]["name"];
      $dosya_yol=$_FILES["s_orta_resim_1"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $s_orta_aciklama_1=htmlentities($_POST["s_orta_aciklama_1"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='2',
                baslik='$_POST[s_orta_baslik_1]',
                resim='$knm',
                aciklama='$s_orta_aciklama_1'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["s_orta_resim_2"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_orta_resim_2"]["name"];
      $dosya_yol=$_FILES["s_orta_resim_2"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $s_orta_aciklama_2=htmlentities($_POST["s_orta_aciklama_2"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='2',
                baslik='$_POST[s_orta_baslik_2]',
                resim='$knm',
                aciklama='$s_orta_aciklama_2'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["s_orta_resim_3"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_orta_resim_3"]["name"];
      $dosya_yol=$_FILES["s_orta_resim_3"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $s_orta_aciklama_3=htmlentities($_POST["s_orta_aciklama_3"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='2',
                baslik='$_POST[s_orta_baslik_3]',
                resim='$knm',
                aciklama='$s_orta_aciklama_3'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["s_sonu_resim"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["s_sonu_resim"]["name"];
      $dosya_yol=$_FILES["s_sonu_resim"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='4',
                resim='$knm'
                ") or die(mysql_error());
    header("Location: a_tasarim_sayfasi_ekle.php?id=$id");
 ?>
