<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/header.php"); ?>
<?php menu(); ?>

<?php
  $id=$_GET["id"];
  $str_1=mysql_query("select * from araba_bilgileri where id='$id' ");
  $row_1=mysql_fetch_array($str_1);
  $model=$row_1["model"];
  ?>

<div class="row" style=" margin-bottom: 30px ; margin-top: 10px;">
  <div class="col"></div>
  <div class="col-5 text-center">
    <h3>Renault <?php echo $model; ?></h3>
    <h1>Renault <?php echo $model; ?> iç ve dış tasarım</h1>
  </div>
  <div class="col"></div>
</div>
<?php //******************************Slider********************************* ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='5' ");
	         while($str_2=mysql_fetch_array($query)){
	  ?>
         <div class="carousel-item <?php if($str_2["baslik"]==0){echo "active";}?>">
            <img src="<?php echo $str_2["resim"]; ?>" class="img img-fluid" width="100%" height="100%" focusable="false" role="img" />
         </div>
    <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php //**************************************************************************** ?>
<hr width="%50" style=" margin-bottom: 30px ; margin-top: 30px;" color="#FFFF00"/>
<div class="row" style=" margin-bottom: 20px ; margin-top: 10px;">
  <div class="col"></div>
  <div class="col-5 text-center">
    <h3>Dış Tasarım</h3>
  </div>
  <div class="col"></div>
</div>

<?php //***************************Dış Tasarım******************************** ?>

<div class="row text-center">
  <?php $i=0;
        $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='6' ");
        while ($row=mysql_fetch_array($query)) { $i++;
  ?>
      <div class="col-sm-6 col-md bg-light">
          <div class="col-12 genel-bakis">
            <img src="<?php echo $row["resim"]; ?>" class="img-fluid" alt="<?php echo $i; ?>" />
            <div class="col-11">
              <h4><?php echo $row["baslik"]; ?></h4>
              <h6><?php echo $row["aciklama"]; ?></h6>
            </div>
          </div>
      </div>
  <?php } ?>
</div>

<?php //**************************************************************************** ?>

<hr width="%50" style=" margin-bottom: 30px ; margin-top: 30px;" color="#FFFF00"/>
<div class="row" style=" margin-bottom: 20px; margin-top: 10px;">
  <div class="col"></div>
  <div class="col-5 text-center">
    <h3>İç Tasarım</h3>
  </div>
  <div class="col"></div>
</div>

<?php //********************************İç Tasarım******************************* ?>

<div class="row text-center">
  <?php $i=0;
        $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='7' ");
        while ($row=mysql_fetch_array($query)) { $i++;
  ?>
      <div class="col-sm-6 col-md bg-light">
          <div class="col-12 genel-bakis">
            <img src="<?php echo $row["resim"]; ?>" class="img-fluid" alt="<?php echo $i; ?>" />
            <div class="col-11">
              <h4><?php echo $row["baslik"]; ?></h4>
              <h6><?php echo $row["aciklama"]; ?></h6>
            </div>
          </div>
      </div>
  <?php } ?>
</div>

<?php //**************************************************************************** ?>

<?php include_once("includes/footer.php"); ?>
