<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php require_once("includes/header.php"); ?>

<?php 	$sorgu="Select * from kullanici where id='$_GET[id]'";
      	$slct=mysql_query($sorgu);
      	$row=mysql_fetch_array($slct);
        $k_adi=$row["k_adi"];
        $adi_soyadi=$row["adi_soyadi"];
   ?>

<form name="login" method="post" action="k_guncellendi.php?id=<?php echo  $_GET["id"];?>">
<div class="container">
  <div class="container">
    <div class="col-10">
      <input class="form-control" type="text" value="<?php echo $adi_soyadi; ?>" maxlength="50" name="adi_soyadi" placeholder="Ad Soyad">
      <input class="form-control" type="text" value="<?php echo $k_adi; ?>" maxlength="30" name="k_adi" placeholder="Kullanıcı Adı">
      <div class="input-group mb-3">
        <input class="form-control" type="password" id="password" id="formGroupExampleInput" maxlength="30" name="sifre" placeholder="Şifre" />
        <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">Göster</button>
        </div>
      </div>
      <button class="btn btn-outline-secondary" >Güncelle</button>
    </div>
  </div>
</div>
</form>
<script>
    function togglePassword() {
        var element = document.getElementById('password');
        element.type = (element.type == 'password' ? 'text' : 'password');
    }
</script>
<?php require_once("includes/footer.php"); ?>
