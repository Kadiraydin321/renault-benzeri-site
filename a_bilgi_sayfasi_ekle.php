<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php require_once("includes/header.php"); ?>
<div class="row">
    <div class="col"></div>
    <div class="col-5">
      <h1>Bilgi Sayfası Ekleme</h1>
    </div>
    <div class="col"></div>
</div>
      <?php $id=$_GET["id"]; ?>
<form action="a_b_s_eklendi.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col"></div>
            <div class="col-7">
              <div class="form-control">
                <input type="file" name="s_basi_resim" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
              <input type="text" name="s_basi_baslik" class="form-control" >
              <textarea class="form-control" name="s_basi_aciklama" rows="5"></textarea>
            </div>
            <div class="col"></div>
          </div>
        </div>

    <hr width="%100" color="#FFFF00"/>

        <div class="container">
          <div class="row">
            <div class="col">
              <div class="form-control">
                <input type="file" name="s_orta_resim_1" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
              <input type="text" name="s_orta_baslik_1" class="form-control" >
              <textarea class="form-control" name="s_orta_aciklama_1" rows="5"></textarea>
            </div>
            <div class="col">
              <div class="form-control">
                <input type="file" name="s_orta_resim_2" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
              <input type="text" name="s_orta_baslik_2" class="form-control" >
              <textarea class="form-control" name="s_orta_aciklama_2" rows="5"></textarea>
            </div>
            <div class="col">
              <div class="form-control">
                <input type="file" name="s_orta_resim_3" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Resim Seçilmedi...</label>
              </div>
              <input type="text" name="s_orta_baslik_3" class="form-control" >
              <textarea class="form-control" name="s_orta_aciklama_3" rows="5"></textarea>
            </div>
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
          <button type="submit" class="btn btn-outline-secondary">Kaydet</button>
      </div>

</form>

<?php require_once("includes/footer.php"); ?>
