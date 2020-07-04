<?php include_once("includes/config.php");
if(!isset($_SESSION["admin"])){header("Location: index.php");}?>
<?php require_once("includes/header.php"); ?>

<table class="table table-md table-striped table-hover">
<?php
      $sorgu="Select * from kullanici order by id asc";
      $slct=mysql_query($sorgu);
        echo "<thead class=\"thead-dark\">";
        echo "<tr>";
        echo "<th scope=\"col\">#</th> <th scope=\"col\">ADI SOYADI</th> <th scope=\"col\">KULLANICI ADI</th> <th scope=\"col\"> </th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        $i=0;
        while($row=mysql_fetch_array($slct))
        {
          $i++;
          echo "<tr>";
          echo "<td scope=\"row\">$i</td>";
          echo "<td>".$row["adi_soyadi"]."</td>";
          echo "<td>".$row["k_adi"]."</td>";
          echo "<td> <a class=\"text-warning\" href=k_guncelle.php?id=$row[id]>[GÜNCELLE]</a> - <a class=\"text-warning\" href=k_sil.php?id=$row[id]>[SİL]</a></td>";
          echo "</tr>";
        }
        echo "</tbody>";
    ?>
</table>

<?php require_once("includes/footer.php"); ?>
