<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php require_once("includes/header.php"); ?>

<?php $id=$_GET["id"]; ?>
<div class="row">
    <div class="col"></div>
    <div class="col-5">
      <h1>Ana Sayfa Model Güncelleme</h1>
    </div>
    <div class="col"></div>
</div>
<form action="a_i_g_tamam.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-7">
      <div class="form-control">
        <input type="file" accept="image/*" name="resim" class="custom-file-input" id="inputGroupFile04">
        <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
      </div>
      <?php $query=mysql_query("select * from genelleme where araba_id='$id' and icerik_id='3'");
            $rw=mysql_fetch_array($query);?>
      <input type="text" name="baslik" value="<?php echo $rw["baslik"]; ?>" class="form-control" >
      <textarea class="form-control" name="aciklama" rows="3"><?php echo $rw["aciklama"]; ?></textarea>
      <button type="submit" class="btn btn-outline-secondary">Güncelle</button>
    </div>
    <div class="col"></div>
  </div>

</div>
</form>

<?php require_once("includes/footer.php"); ?>
