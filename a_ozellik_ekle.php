<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php include_once("includes/header.php"); ?>
<?php
      error_reporting(0);
      if ($_GET["idsiz"] == 1) {
              mysql_query("
              insert into ekipman set
              araba_id='$_GET[id]',
              kategori_id='$_POST[kategori_id]',
              ekipman_adi='$_POST[ekipman_adi]'
              ");
          }

      if ($_GET["idli"] == 1) {
                    mysql_query("
                    insert into ekipman set
                    araba_id='$_POST[araba_id]',
                    kategori_id='$_POST[kategori_id]',
                    ekipman_adi='$_POST[ekipman_adi]'
                    ");
          }

      if ($_GET["idsiz"] == 2) {
                    mysql_query("
                    insert into teknik_ozellikler set
                    araba_id='$_GET[id]',
                    kategori_id='$_POST[kategori_id]',
                    teknik_ozellik_adi='$_POST[teknik_ozellik_adi]',
                    deger='$_POST[deger]'
                    ");
          }

    if ($_GET["idli"] == 2) {
                  mysql_query("
                  insert into teknik_ozellikler set
                  araba_id='$_POST[araba_id]',
                  kategori_id='$_POST[kategori_id]',
                  teknik_ozellik_adi='$_POST[teknik_ozellik_adi]',
                  deger='$_POST[deger]'
                  ");
        }
?>
<div class="container">
<?php if (isset($_GET["id"])) {
  $id=$_GET["id"];?>
  <div class="row">
    <div class="col"></div>
    <div class="col-4"><h4 class="text-center">Ekipman Ekle</h4></div>
    <div class="col"></div>
  </div>
  <form action="?idsiz=1&id=<?php echo $_GET["id"]; ?>" method="post">
      <select class="form-control" id="exampleFormControlSelect1" name="kategori_id">
            <option>Lütfen Kategori Seçiniz...</option>
          <?php
          $sorgu=mysql_query("Select * from ekipman_kategorisi");
          while($row=mysql_fetch_array($sorgu))
          {
          $id=$row['id'];
                 echo "<option value=$id >".htmlspecialchars($row['kategori_adi'])."</option>";
             }
          ?>
      </select>
      <input type="text" name="ekipman_adi" placeholder="Ekipman Adı" class="form-control">
      <button type="submit" class="btn btn-outline-secondary">Kayıt</button>
  </form>
  </div>
  <hr width="%100" color="#FFFF00"/>
  <div class="row">
  <div class="col"></div>
  <div class="col-4"><h4 class="text-center">Teknik Özellik Ekle</h4></div>
  <div class="col"></div>
  </div>
  <div class="container">
  <form action="?idsiz=2&id=<?php echo $_GET["id"]; ?>" method="post">
    <select class="form-control" id="exampleFormControlSelect1" name="kategori_id">
          <option>Lütfen Kategori Seçiniz...</option>
        <?php
        $sorgu=mysql_query("Select * from teknik_ozellikler_kategorisi");
        while($row=mysql_fetch_array($sorgu))
        {
        $id=$row['id'];
               echo "<option value=$id >".htmlspecialchars($row['kategori_adi'])."</option>";
           }
        ?>
    </select>
    <input type="text" name="teknik_ozellik_adi" placeholder="Teknik Özellik Adı" class="form-control">
    <input type="text" name="deger" placeholder="Girilecek Değer" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Kayıt</button>
  </form>

<?php } ?>

<?php if (!isset($_GET["id"])) {
  ?>
  <div class="row">
    <div class="col"></div>
    <div class="col-4"><h4 class="text-center">Ekipman Ekle</h4></div>
    <div class="col"></div>
  </div>
  <form action="?idli=1" method="post">
    <select class="form-control" id="exampleFormControlSelect1" name="araba_id">
          <option>Lütfen Araba Modeli Seçiniz...</option>
        <?php
        $sorgu=mysql_query("Select * from araba_bilgileri");
        while($row=mysql_fetch_array($sorgu))
        {
        $id=$row['id'];
               echo "<option value=$id >".htmlspecialchars($row['model'])."</option>";
           }
        ?>
    </select>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori_id">
          <option>Lütfen Kategori Seçiniz...</option>
        <?php
        $sorgu=mysql_query("Select * from ekipman_kategorisi");
        while($row=mysql_fetch_array($sorgu))
        {
        $id=$row['id'];
               echo "<option value=$id >".htmlspecialchars($row['kategori_adi'])."</option>";
           }
        ?>
    </select>
    <input type="text" name="ekipman_adi" placeholder="Ekipman Adı" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Kayıt</button>
  </form>
</div>
<hr width="%100" color="#FFFF00"/>
<div class="row">
  <div class="col"></div>
  <div class="col-4"><h4 class="text-center">Tekinik Özellik Ekle</h4></div>
  <div class="col"></div>
</div>
<div class="container">
  <form action="?idli=2" method="post">
    <select class="form-control" id="exampleFormControlSelect1" name="araba_id">
          <option>Lütfen Araba Modeli Seçiniz...</option>
        <?php
        $sorgu=mysql_query("Select * from araba_bilgileri");
        while($row=mysql_fetch_array($sorgu))
        {
        $id=$row['id'];
               echo "<option value=$id >".htmlspecialchars($row['model'])."</option>";
           }
        ?>
    </select>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori_id">
          <option>Lütfen Kategori Seçiniz...</option>
        <?php
        $sorgu=mysql_query("Select * from teknik_ozellikler_kategorisi");
        while($row=mysql_fetch_array($sorgu))
        {
        $id=$row['id'];
               echo "<option value=$id >".htmlspecialchars($row['kategori_adi'])."</option>";
           }
        ?>
    </select>
    <input type="text" name="teknik_ozellik_adi"  placeholder="Teknik Özellik Adı" class="form-control">
    <input type="text" name="deger" placeholder="Girilecek Değer" class="form-control">
    <button type="submit" class="btn btn-outline-secondary">Kayıt</button>
  </form>

<?php } ?>
</div>
<?php include_once("includes/footer.php"); ?>
