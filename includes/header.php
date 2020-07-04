<?php require_once("includes/config.php"); ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="includes/renault.css" type="text/css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/icon.png">
    <title>RENAULT</title>
  </head>
  <body>
    <?php $lnk=substr($_SERVER['SCRIPT_NAME'],9);
          $lnk1=substr($_SERVER['REQUEST_URI'],9);?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" width="152" height="48" alt="as856df5"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php if (!isset($_SESSION["admin"])) { ?>
            <?php
              $query=mysql_query("select * from sayfalar where durum='0'");
              while ($rw=mysql_fetch_array($query))
              {
            ?>
            <li class="nav-item  <?php if ($lnk1 == $rw["link"]) {echo "active";} ?>">
                      <a class="nav-link <?php if($lnk1 == $rw["link"]) {echo "text-warning";} ?>" href="<?php echo $rw["link"]; ?>"><?php echo $rw["sayfa_adi"]; ?></a>
            </li>
            <?php } } ?>
        <?php if (isset($_SESSION["admin"])) { ?>
          <?php
            $query=mysql_query("select * from sayfalar");
            while ($rw=mysql_fetch_array($query))
            {
          ?>
          <li class="nav-item  <?php if ($lnk1 == $rw["link"]) {echo "active";} ?>">
                    <a class="nav-link <?php if($lnk1 == $rw["link"]) {echo "text-warning";} ?>" href="<?php echo $rw["link"]; ?>"><?php echo $rw["sayfa_adi"]; ?></a>
          </li>
          <?php } } ?>
        </ul>
      </div>
      <?php if (!isset($_SESSION["admin"])) { ?>
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalCenter">
          Giriş
        </button>
      <?php } else {?>
        <a type="submit" class="btn btn-outline-secondary" href="logout.php" >Çıkış</a>
      <?php } ?>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Kullanıcı Girişi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form name="login" method="post" action="ctrl.php">
            <div class="modal-body">


                <div class="row">
                  <div class="col text-center">
                    <input class="form-control" type="text" maxlength="30" value="kadiraydin" name="k_adi" placeholder="Kullanıcı Adı">
                    <br/>
                    <div class="input-group mb-3">
                      <input class="form-control" type="password" value="kadiraydin37" id="password" id="formGroupExampleInput" value="<?php echo $sifre; ?>" maxlength="30" name="sifre" placeholder="Şifre" />
                      <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">Göster</button>
                      </div>
                    </div>
                    <br/>
                  </div>
                </div>

              <script>
                  function togglePassword() {
                      var element = document.getElementById('password');
                      element.type = (element.type == 'password' ? 'text' : 'password');
                  }
              </script>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
              <button type="submit" class="btn btn-secondary">Giriş</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr width="%100" color="#FFFF00"/>
