<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php include_once("includes/header.php"); ?>

<div class="container">
  <div class="container">
    <div class="col-10">
      <form action="araba_eklendi.php" method="post">
        <input type="text" name="model" placeholder="Araba Modeli" class="form-control">
        <input type="text" name="fiyat" placeholder="Arabanın Fiyatı" class="form-control">
        <button type="submit" class="btn btn-outline-secondary" name="button">Kaydet</button>
      </form>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>
