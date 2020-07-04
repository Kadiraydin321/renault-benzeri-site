<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php
    $id=$_GET["id"];
//*************************************************************

    $total = count($_FILES['slider']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        $tmpFilePath = $_FILES['slider']['tmp_name'][$i];

        $dosya_adi=$_FILES['slider']['name'][$i];
        $uzanti=end(explode(".",$dosya_adi));
        $yeni= substr(md5(microtime()),0,16);

        if (!empty($tmpFilePath)){
          $newFilePath = "images/" . $yeni.".".$uzanti;
          move_uploaded_file($tmpFilePath, $newFilePath);

          mysql_query("insert into genelleme set
                       araba_id ='$id',
                       icerik_id='5',
                       baslik='$i',
                       resim='$newFilePath' ");
    }
  }

//*************************************************************
    if(isset($_FILES["dis_tas_resim_1"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["dis_tas_resim_1"]["name"];
      $dosya_yol=$_FILES["dis_tas_resim_1"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $dis_tas_aciklama_1=htmlentities($_POST["dis_tas_aciklama_1"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='6',
                baslik='$_POST[dis_tas_baslik_1]',
                resim='$knm',
                aciklama='$dis_tas_aciklama_1'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["dis_tas_resim_2"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["dis_tas_resim_2"]["name"];
      $dosya_yol=$_FILES["dis_tas_resim_2"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $dis_tas_aciklama_2=htmlentities($_POST["dis_tas_aciklama_2"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='6',
                baslik='$_POST[dis_tas_baslik_2]',
                resim='$knm',
                aciklama='$dis_tas_aciklama_2'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["ic_tas_resim_1"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["ic_tas_resim_1"]["name"];
      $dosya_yol=$_FILES["ic_tas_resim_1"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $ic_tas__aciklama_1=htmlentities($_POST["ic_tas__aciklama_1"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='7',
                baslik='$_POST[ic_tas_baslik_1]',
                resim='$knm',
                aciklama='$ic_tas__aciklama_1'
                ") or die(mysql_error());
//*************************************************************
    if(isset($_FILES["ic_tas_resim_2"]["tmp_name"])){
      $gidecegi_konum="images/";
      $dosya_adi=$_FILES["ic_tas_resim_2"]["name"];
      $dosya_yol=$_FILES["ic_tas_resim_2"]["tmp_name"];

      $uzanti=end(explode(".",$dosya_adi));
      $yeni= substr(md5(microtime()),0,16);
      $knm= $gidecegi_konum.$yeni.".".$uzanti;
      move_uploaded_file($dosya_yol, $knm);
    }
    if (substr($knm,-1)==".") {
      $knm="";
    }
    $ic_tas__aciklama_2=htmlentities($_POST["ic_tas__aciklama_2"], ENT_QUOTES, "UTF-8");
    mysql_query("insert into genelleme set
                araba_id='$id',
                icerik_id='7',
                baslik='$_POST[ic_tas_baslik_2]',
                resim='$knm',
                aciklama='$ic_tas__aciklama_2'
                ") or die(mysql_error());
    header("Location: a_ozellik_ekle.php?id=$id");
 ?>
