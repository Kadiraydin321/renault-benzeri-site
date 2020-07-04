<?php require_once("includes/config.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include_once("includes/header.php"); ?>

<h1 class="text-center">RENAULT</h1>

<div class="row">
  <div class="col-1">
  </div>

  <div class="col kenarlik">
      <div class="row">
        <?php $i=0;
              $query=mysql_query("select * from genelleme where icerik_id='3' ");
              while ($row=mysql_fetch_array($query)) { $i++;
        ?>
            <div class="col-lg col-xl-4 bg-light text-center ana_sayfa_ic_div">
                <h2><a class="text-dark" href="<?php echo $row["link"];?>"><?php echo $row["baslik"]; ?></a></h2>
                <h6><?php echo $row["aciklama"]; ?></h6>
                <img src="<?php echo $row["resim"]; ?>" class="img-fluid" alt="<?php echo $i; ?>" />
                <?php if (isset($_SESSION["admin"])): ?>
                  <a class="btn btn-outline-secondary" style=" margin_bottom: 10px;" href="a_i_g.php?id=<?php echo $row["araba_id"]; ?>">Güncelle ></a>
                  <a class="btn btn-outline-secondary" style=" margin_bottom: 10px;" href="araba_sil.php?id=<?php echo $row["araba_id"]; ?>">Sil ></a>
                <?php endif; ?>
                <a class="btn btn-outline-secondary" style=" margin_bottom: 10px;" href="<?php echo $row["link"];?>">Daha Fazla Bilgi ></a>
            </div>
        <?php } ?>

      </div>
  </div>

  <div class="col-1">
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
