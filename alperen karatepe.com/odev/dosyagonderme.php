<html>
<body>
<form enctype="multipart/form-data" action="dosyagonderme.php" method="POST">
<table>
<tr><td>Dosya Seçin:</td><td><input name="dosya" type="file"/></td></tr><br>
<tr><td>Dosya Seçin:</td><td><input name="dosya1" type="file"/></td></tr><br>
<tr><td><input type="submit" name='KONTROL' value="Yukle"/></td></tr>
</table>
</form>
<?php 
if(isset($_POST['KONTROL'])){
//Dosya yukleme ve adresleme 
echo "<b> Yüklenen dosyanın adı:</b>". $_FILES['dosya']['name']."<br>";
echo "<b> Yuklenın dosyanın geçiçi adı:</b>".$_FILES['dosya']['tmp_name']."<br>";
echo "<b> Yuklenın dosyanın türü:</b>".$_FILES['dosya']['type']."<br>";
echo "<b> Yuklenın dosyanın boyutu:</b>".$_FILES['dosya']['size']."<br>";
echo "<b> Varsa yüklerken oluşan hata:</b>".$_FILES['dosya']['error']."<br>";
echo"<br>";

echo "<b> Yüklenen dosyanın adı:</b>". $_FILES['dosya1']['name']."<br>";
echo "<b> Yuklenın dosyanın geçiçi adı:</b>".$_FILES['dosya1']['tmp_name']."<br>";
echo "<b> Yuklenın dosyanın türü:</b>".$_FILES['dosya1']['type']."<br>";
echo "<b> Yuklenın dosyanın boyutu:</b>".$_FILES['dosya1']['size']."<br>";
echo "<b> Varsa yüklerken oluşan hata:</b>".$_FILES['dosya1']['error']."<br>";
echo "<br>	";
 
 $gecici_adres=$_FILES['dosya']['tmp_name'];
 $kalici_yol_ad="Dosyalar2/".$_FILES['dosya']['name'];
 if(move_uploaded_file($gecici_adres,$kalici_yol_ad))
	 echo "Dosya '$kalici_yol_ad' olarak başarı ile yüklendi.";
 else
	 echo "Yükleme başarısız.";
 
  $gecici_adres=$_FILES['dosya1']['tmp_name'];
 $kalici_yol_ad="Dosyalar/".$_FILES['dosya1']['name'];
 if(move_uploaded_file($gecici_adres,$kalici_yol_ad))
	 echo "Dosya '$kalici_yol_ad' olarak başarı ile yüklendi.";
 else
	 echo "Yükleme başarısız.";
 
}
else echo "YÜKLEME YAPILMADI!!";

?>

</body
</html>