<html>
<head>
<title> Reel Kök Bulma</title>
<meta charset="UTF-8">
 
</head>
<body>

<div class="header">
		
		</div>
			

		<table border="4" bgcolor="#0099cc">
		
		</table>
<fieldset><legend><font color="black">Reel Kök Bulma</legend>
<text><font color="black">Ax^2+Bx+C=0 Denkleminin;</text>
	<form action="kokbulma fonk.php" method="GET" >
			<table border="5" align="left" width="300" height="100" bgcolor="";>
			<tr><td>Birinci Katsayıyı Giriniz:<input type="text" name="s1"/></td><td rowspan="4">
	<?php
	if(isset($_GET['Hesapla']))
	{
function x(){
			$a=$_GET['s1'];
			$b=$_GET['s2'];
			$c=$_GET['s3'];
			$d=($b*$b)-(4)*($a*$c);
			$k1=((-$b)-sqrt($d))/(2*$a);
			$k2=((-$b)+sqrt($d))/(2*$a);
			$k3=(-$b/(2*$a));
			
			echo "<br>";
			echo "Deltanız:".($d);
			echo "<br>";
			
			if($d>0)
			{
				echo "İki Kökünüz Vardır=".($k1 )."ve".( $k2);
			}
			else if($d==0)
			{
				echo"Çakışık İki Kök=".($k3);
			}
			else
			{
				echo "Reel Kökünüz Yoktur!!!";
			}
	}
x();
	}
	else echo"HESAPLAMA YAPILMADI!!";
			?>
			</td></tr>
			<tr><td>İkinci  Katsayıyı Giriniz:<input type="text" name="s2"/></td></tr>
			<tr><td>Üçüncü  Katsayıyı Giriniz:<input type="text" name="s3"/></td></tr>
			<tr><td align="center"><input type="submit" name="Hesapla" value="Hesapla"/></td></tr>
			</table></form>
			
</body>	
</html>