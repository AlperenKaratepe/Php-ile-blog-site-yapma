<html>
<head>
<meta charset="UTF-8">
<title> Hesap Makinesi</title>
   
		</head>
<body>
<div class="header">
		
		</div>
			
		  

		<fieldset><legend>*HESAP MAKİNESİ*</legend>
		<form method="get" action="hesapmakinesi.php">
  <table>
    <tr>
      <td width="84">Sayı1:</td>
      <td width="143"><input type="text" name="s1" ></td>
    </tr>
    <tr>
      <td> Sayı2:</td>
      <td><input type="text" name="s2" ></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="radio" name="radio" id="radio" value="toplama">
        Toplama</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="radio" name="radio" id="radio2" value="cıkarma">
        Çıkarma</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="radio" name="radio" id="radio3" value="carpma">
        Çarpma</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="radio" name="radio" id="radio4" value="bolme">
        Bölme</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="CENTER"><input type="submit" name="HESAPLA" id="hesapla" value="hesapla"></td>
    </tr>
    
        
  </table></form>
			
<?php
if(isset($_GET['HESAPLA'])){
			$hatalar=array();// Hatalar için dizi oluşturuluyor


			if(isset($_GET['s1']))
			{
			 if(empty($_GET['s1']))
			  $hatalar[]="Sayı 1 Giriniz!!!";
			 else
			  $sayi1=$_GET['s1'];
			}


			if(isset($_GET['s2']))
			{
			 if(empty($_GET['s2']))
			  $hatalar[]="Sayı 2 Giriniz!!!";
			 else
			  $sayi2=$_GET['s2'];
			}

			if(count($hatalar)>0)
			{
			foreach($hatalar as $hata)
			 echo $hata."<br>";
			die();
			}
			
			$k1=$_GET['s1'];
			$k2=$_GET['s2'];
			$islem=$_GET['radio'];
			 if($islem=='toplama')
			 {
			  $top=$k1+$k2;
			  echo "<center>İki Sayının Toplamı:".$top ;
			 }
			 elseif($islem=='cıkarma')
			 {
				 $cık=$k1-$k2;
			 echo "<center>İki Sayının Farkı:".($cık);
			 }
			 elseif($islem=='carpma')
			 {
				 $carp=$k1*$k2;
			  echo "<center>İki Sayının Çarpımı:".$carp;
			 }
			 elseif($islem=='bolme')
			 {
				 $bol=$k1/$k2;
			  echo "İki Sayının Bölümü:".$bol;
			 }
}
else echo"HESAPLAMA YAPILMADI!!";

			?>


		</body>
		</html>