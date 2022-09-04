<html>
<head>
<meta charset="utf-8">
</head>
 <body>
  <center style="margin-top:250px;">
<h3>
<form name="Geçme notu hesapla" method="POST" action="nothesapla.php" >

	Yazılı notu:<br>
 <input type="text"  name="yazılı"><br>

<input type="submit"name="Goster" value="Goster" />
</form>
<?php
if(isset($_POST['Goster']))
{
$yazılı=$_POST['yazılı'];
if($yazılı=="");
{
	echo "yazılı bos bırakılmaz";
}

	if ($_POST['hesapla'])

{
	$yazılı=$_POST['yazılı'];
	$goster=$_POST['Goster'];
	echo"yazılı: +$yazılı";
	echo"<br>";
}
	if ($yazılı >=0 && $yazılı <=29)
{
	echo '<br/> Notunuz:<strong><font color="red"> 1</font></strong>';
}
	if ($yazılı >=30 && $yazılı <=59)
{
echo '<br/> Notunuz:<strong><font color="red"> 2</font></strong>';
}
if ($yazılı>=60 && $yazılı <=69)
{
echo '<br/> Notunuz:<strong><font color="green"> 3</font></strong>';
}

if ($yazılı>=70 && $yazılı<=84)
{
echo '<br/> Notunuz:<strong><font color="green">4</font></strong>';
}

if ($yazılı>=85 && $yazılı<=100)
{
echo '<br/> Notunuz:<strong><font color="green"> 5</font></strong>';
}


else
{

}
}
else echo"NOT GİRİLMEDİ!!";

?>

</center>
</body>
</html>