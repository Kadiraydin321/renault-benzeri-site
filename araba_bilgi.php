<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/header.php"); ?>
<?php menu();  $id=$_GET["id"];?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <?php
        $query=mysql_query("select * from genelleme where araba_id='$_GET[id]' and icerik_id='1' ");
        $rw=mysql_fetch_array($query);
      ?>
        <img src="<?php echo $rw["resim"]; ?>" class="d-block w-100" alt="<?php echo $rw["baslik"]; ?>">
        <div class="carousel-caption d-none d-md-block">
          <div class="transbox">
              <h1><?php echo $rw["baslik"]; ?></h1>
              <h4><?php echo $rw["aciklama"]; ?></h4>
           </div>
        </div>
    </div>
  </div>
</div>
<div class="container">
  <?php $qu=mysql_query("select * from araba_bilgileri where id='$_GET[id]'");
        $rw=mysql_fetch_array($qu);
        if (!empty($rw["fiyat"])) {
    ?>
        <p>BAŞLANGIÇ FİYATI<br/>
         ₺ <?php echo $rw["fiyat"]; } ?>
  </p>
</div>
<hr width="%100" color="#FFFF00"/>
<div class="row text-center">
  <?php $i=0;
        $query=mysql_query("select * from genelleme where araba_id='$_GET[id]' and icerik_id='2' ");
        while ($row=mysql_fetch_array($query)) { $i++;
  ?>
      <div class="col-sm-6 col-md bg-light">
          <div class="col-12 genel-bakis">
            <img src="<?php echo $row["resim"]; ?>" class="img-fluid" alt="<?php echo $i; ?>" />
            <div class="col-11">
              <h5><?php echo $row["baslik"]; ?></h5>
              <h7><?php echo $row["aciklama"]; ?></h7>
            </div>
          </div>
      </div>
  <?php } ?>
</div>
<hr width="%100"  color="#FFFF00"/>
<div class="col text-center genel-bakis">
  <?php $query=mysql_query("select * from genelleme where araba_id='$_GET[id]' and icerik_id='4' ");
  $row=mysql_fetch_array($query); ?>
  <img src="<?php echo $row["resim"]; ?>" class="img-fluid" alt="<?php echo $i; ?>" />
</div>
<?php if (isset($_SESSION["admin"])) {?>
  <div class="row" style="margin: 10px;">
    <div class="col-10"></div>
    <div class="col-2" style="padding-left: 75px;"><a href="a_bilgi_guncelle.php?id=<?php echo $id; ?>" class="btn btn-outline-secondary">Güncelle</a> </div>
  </div>
<?php } ?>
<?php include_once("includes/footer.php"); ?>
