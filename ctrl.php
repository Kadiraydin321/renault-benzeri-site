 <?php include_once("includes/config.php");

   $k_adi=$_POST["k_adi"];
   $sifre=md5($_POST["sifre"]);

   $srg=mysql_query("Select * from kullanici where k_adi='$k_adi' and sifre='$sifre'");

   if(mysql_num_rows($srg)!=0)
   {
     $_SESSION["admin"]=$k_adi;
     header("Location: index.php");
   }
   else{
     header("Location: index.php");
     }

 ?>
