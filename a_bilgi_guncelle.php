<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php require_once("includes/header.php"); ?>
<div class="row">
    <div class="col"></div>
    <div class="col-5">
      <h1>Bilgi Sayfası Güncelleme</h1>
    </div>
    <div class="col"></div>
</div>
      <?php $id=$_GET["id"];  ?>
<form action="a_bilgi_guncellendi.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col"></div>
            <div class="col-7">
              <?php $qr=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='1'");
                    $row=mysql_fetch_array($qr);
               ?>
              <div class="form-control">
                <input type="file" name="s_basi_resim" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
              <input type="text" name="s_basi_baslik" value="<?php echo $row["baslik"]; ?>" class="form-control" >
              <textarea class="form-control" name="s_basi_aciklama" rows="5"><?php echo $row["aciklama"]; ?></textarea>
            </div>
            <div class="col"></div>
          </div>
        </div>

    <hr width="%100" color="#FFFF00"/>


        <div class="container">
          <div class="row">
            <?php $qr=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='2'");$i=1;
                  while($row=mysql_fetch_array($qr)){ ?>
              <div class="col">
                <div class="form-control">
                  <input type="file" name="s_orta_resim_<?php echo $i; ?>" class="custom-file-input" id="inputGroupFile04">
                  <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
                </div>
                <input type="text" name="s_orta_baslik_<?php echo $i; ?>" value="<?php echo $row["baslik"]; ?>" class="form-control" >
                <textarea class="form-control" name="s_orta_aciklama_<?php echo $i; ?>" rows="5"><?php echo $row["aciklama"]; ?></textarea>
              </div>
          <?php $i++; } ?>
          </div>
        </div>

    <hr width="%100" color="#FFFF00"/>
      <div class="container">
          <div class="row">
            <div class="col"></div>
            <div class="col-7">
              <div class="form-control">
                <input type="file" name="s_sonu_resim" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
            </div>
            <div class="col"></div>
          </div>
          <button type="submit" class="btn btn-outline-secondary">Güncelle</button>
      </div>

</form>

<?php require_once("includes/footer.php"); ?>
