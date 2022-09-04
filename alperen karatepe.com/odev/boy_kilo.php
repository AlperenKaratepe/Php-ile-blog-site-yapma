<html>
<head>
<title> Boy Kilo İndeksi Hesaplama</title>
<meta charset="UTF-8">
  <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<body>
<div class="header">
		<h1>AHMET ALPEREN KARATEPE</h1>
		</div>
			
	
	  
 
		<br>
		<fieldset>
		<h3> BOY-KİLO İNDEKSİ HESAPLAMA</h3>
		<form action="boy_kilo.php" method="GET">
		<table bgcolor="grey">
		<tr><td> Boyunuz</td><td>:</td>
		<td><input type="text" name="boy"/></td><td>Cm.</td></tr>
		<tr><td> Kilonuz</td><td>:</td><td> <input type="text" name="kilo"/></td> <td>Kg.</td></tr>
		<tr>
      <td>&nbsp;</td>
	  <tr><td>Cinsiyet:</td></tr>
    <tr>  <td><input type="radio" name="cinsiyet" id="radio" value="kadın">Kadın</td>
    </tr>
    <tr>
     
      <td><input type="radio" name="cinsiyet" id="radio2" value="erkek">Erkek</td>
    </tr>
		 <tr> <td><input type="submit" name "Hesapla" value="Hesapla"></td></tr>
	 </FORM>
			</table>

		<?php
		
				$k1=$_GET['boy'];
				$k2=$_GET['kilo'];
				$k3= (($k2)/(($k1/100)*($k1/100)));
				$k4=$_GET['cinsiyet'];
				echo" Boy Kilo Endeksiniz:".($k3); 
				echo" <br>";
				if($k4=='erkek')
				{ 
					if($k3>=50  && $k3<=60)
					{
						echo "Süper Aşırı Kilolusunuz.";
					}


					else if($k3>=40&& $k3<=49.9)
					{
						echo "Hastalıklı Bir Şekilde Aşırı Kilolu.";
					}
					   else if($k3>=35&& $k3<=39.9)
					{
						echo "Yüksek Risk Oluşturacak Kadar Kilolu.";
					}

					   else if($k3>=31.1&& $k3<=34.9)
					{
						echo "Çok Fazla Kilolu";
					}

					else if($k3>=27.8 &&$ $k3<=30.9)
					{
						echo "Fazla Kİlolusunuz.";
					}
					else if($k3>=26.4 && $k3<=27.7)
					{
						echo "Normal Kilodan Fazla.";
					}
						else if($k3>=20.7 && $k3<=26.3)
					{
						echo "Sağlıklı Kilo Aralığı(İdeal Kilo).";
					}
						else if($k3>=17.5&& $k3<=20.6)
					{
						echo "Zayıfsınız!!!.";
					}
					else
					{
						echo "Çok Zayıf Yüksek Risk";
					}
				}			
							else  if($k4=='kadın')
							{
									if($k3>=50  && $k3<=60)
								{
									echo "Süper Aşırı Kilolusunuz.";
								}


								else if($k3>=40&& $k3<=49.9)
								{
									echo "Hastalıklı Bir Şekilde Aşırı Kilolu.";
								}
								   else if($k3>=35&& $k3<=39.9)
								{
									echo "Yüksek Risk Oluşturacak Kadar Kilolu.";
								}

								   else if($k3>=32.3&& $k3<=34.9)
								{
									echo "Çok Fazla Kilolu";
								}

								else if($k3>=27.3 &&$ $k3<=32.2)
								{
									echo "Fazla Kİlolusunuz.";
								}
								else if($k3>=25.8 && $k3<=27.2)
								{
									echo "Normal Kilodan Fazla.";
								}
									else if($k3>=19.1 && $k3<=25.7)
								{
									echo "Sağlıklı Kilo Aralığı(İdeal Kilo).";
								}
									else if($k3>=17.5&& $k3<=19.0)
								{
									echo "Zayıfsınız!!!.";
								}
								else
								{
									echo "Çok Zayıf Yüksek Risk";
								}
							}
				
		
		
		?>
				
 
	 </body>
	 </html>
 