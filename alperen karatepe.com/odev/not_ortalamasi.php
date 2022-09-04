<html>
<head>
<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Harf Notu Hesabı</title>


</head>
<body>
<div class="header">
		
		</div>
		
<br>
	<fieldset>
	<legend> NOT HESAPLAMA VE HARF NOTU BELİRLEME</legend>
		<form action="not_ortalamasi.php" method="GET">
				Vize Notu :<input type="text" name="s1"><br>
				Fınal Notu:<input type="text" name="s2"><br>
				<input type="submit" name="Hesapla" value='HESAPLA'/>
		</form>
	<?php 
	if(isset($_GET['Hesapla'])){
	$k1=$_GET['s1'];
	$k2=$_GET['s2'];
	$k3=(($k1*0.4)+($k2*0.6));
	echo "Not Ortalaman:".($k3);
	echo "<br>";

	if($k3>=90 && $k3<=100)
		{
			echo " Dersi Geçtiniz Harf Notunuz: AA";
		}
		
	else if($k3>=80 && $k3<=89 )
		{
			echo " Dersi Geçtiniz Harf Notunuz: BA";
		}
		else if($k3>=70 && $k3<=79 )
		{
			echo " Dersi Geçtiniz Harf Notunuz: BB";
		}
		else if($k3>=65 && $k3<=69 )
		{
			echo " Dersi Geçtiniz Harf Notunuz: CB";
		}
		else if($k3>=60 && $k3<=64 )
		{
			echo " Dersi Geçtiniz Harf Notunuz: CC";
		}
		else if($k3>=55 && $k3<=59)
		{
			echo " Dersi Şartlı Geçtiniz Harf Notunuz: DC";
		}
		else if($k3>=50 && $k3<=54 )
		{
			echo " Dersi  Şartlı Geçtiniz Harf Notunuz: DD";
		}else if($k3>=40 && $k3<=49 )
		{
			echo " Dersi Geçemediniz Harf Notunuz: FD";
		}
		else 
		{
			echo "Dersi Geçemedniz Harf Notunuz: FF";
		}
	}
	else echo"HESAPLAMA YAPILMADI!!";
	?>	
	</body>
	</HTML>