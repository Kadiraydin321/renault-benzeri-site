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
    <h1>Ekipmanlar ve Özellikler</h1>
  </div>
  <div class="col"></div>
</div>
<div class="container">
  <table class="table table-light table-hover">
    <tr>
      <td class="text-center"><h2><a class="text-secondary" href="#multiCollapseExample1" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false">Ekipman</a> </h2> </td>
      <td class="text-center"><h2><a class="text-secondary" href="#multiCollapseExample2" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false">Teknik Özellik</a></h2></td>
    </tr>
  </table>

  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">



            <div class="accordion" id="accordionExample">
              <div class="card">
                <?php
                        $query=mysql_query("select * from ekipman_kategorisi"); $i=0;
                        while ($row=mysql_fetch_array($query)) { $i++;
                        ?>

                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $row["kategori_adi"]; ?>
                          </button>
                        </h2>
                      </div>
                    <?php $query1=mysql_query("select * from ekipman where araba_id='$id' and kategori_id='$row[id]'");
                          while ($row1=mysql_fetch_array($query1)){ ?>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $row1["ekipman_adi"]; ?>
                      </div>
                    </div>
                <?php }  }?>
              </div>
          </div>

      </div>
    </div>
  </div>

  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="card card-body">



            <div class="accordion" id="accordionExample">
              <div class="card">
                <?php
                        $query=mysql_query("select * from teknik_ozellikler_kategorisi"); $i=0;
                        while ($row=mysql_fetch_array($query)) { $i++;
                        ?>

                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link text-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $row["kategori_adi"]; ?>
                          </button>
                        </h2>
                      </div>
                    <?php $query1=mysql_query("select * from teknik_ozellikler where araba_id='$id' and kategori_id='$row[id]'");
                          while ($row1=mysql_fetch_array($query1)){ ?>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <table class="table table-light table-hover">
                          <tr>
                            <td width="200"><?php echo $row1["teknik_ozellik_adi"]; ?></td>
                            <td width="200"><?php echo $row1["deger"]; ?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                <?php }  }?>
              </div>
          </div>

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>
