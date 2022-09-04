<html>
<head>
<title>preg match</title>
<meta charset="UTF-8">

<fieldset>
	<legend> BİLGİ KONTROLÜ</legend>
<form action='preg_match.php' method='post'>
e-posta: <input type=text name='isim'>
TC: <input type=text name='tc'>
sifre: <input type=text name='sifre'>

<input type=submit  name='kontrol' value='KONTROL ET'>
</form>
<?php
if(isset($_POST['kontrol']))
{
$e=$_POST["isim"];
$t=$_POST["tc"];
$s=$_POST["sifre"];

$tc="/[1-9]{1}[0-9]{9}[02468]{1}/";
$eposta="/[a-zA-Z0-9.,_]{5,}@[a-z].[a-z.]/";
$sifre="/\S*((?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[0-9]))\S*/";
if(preg_match($eposta,$e,$b))
	echo "epostada hata yok <br>";
else echo "epostada hata var <br>";
if(preg_match($tc,$t,$b2))
	echo "TC'de hata yok <br>";
else echo "TC'de hata var <br>";
if(preg_match($sifre,$s,$b3))
	echo "Sifrede hata yok <br>";
else echo "Sifrede hata var <br>";
}
else echo "giris yok";
 ?>
</html>