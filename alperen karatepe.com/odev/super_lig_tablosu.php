<html>

</html>
<?php
 
echo "<table border='5' >";
echo "<tr>"; echo "<th> <H3> TAKIMLARIN PUAN TABLOSU(2018/2019)</H3> </th> <td colspan='9'><img src='images.jpg' width='400px' height='100px'></td> </tr>"; 

echo "<tr>";
echo "<th>Takım</th>";
echo "<th>O</th>";
echo "<th>G</th>";
echo "<th>B</th>";
echo "<th>M</th>";
echo "<th>A</th>";
echo "<th>Y</th>";
echo "<th>AV</th>";
echo "<th>PUAN</th>";
echo "</tr>";
$Takımlar=array
("1)Galatasary","2)BaşakŞehir","3)Kasımpaşa","4)Antalyaspor",
"5)Beşiktaş","6)Göztepe","7)Trabzon","8)Atiker Konyaspor","9)MKE Ankaragücü","10)Yeni Malatyaspor"
,"11)Alanyaspor","12)Sivasspor","13)Bursaspor","14)Kayserispor","15)Fenerbahçe"
,"16)Çaykur Rizespor","17)BB Erzurumspor","18)Akhisar Spor");
$puanlar=array("19","18","18","16","15","15","14","13","13","12","12","10","9","9","9","8","6","5");
$OM=array("9","9","9","9","9","9","9","9","9","9","9","9","9","9","9","9","9","9");
$G=array("6","5","6","5","4","5","4","3","4","3","4","2","1","2","2","1","1","1");
$B=array("1","3","0","1","3","0","2","4","1","3","0","4","6","3","3","5","3","2");
$M=array("2","1","3","3","2","4","3","5","3","2","4","4","3","6","5","3","2","4");
$A=array("17","13","22","12","15","12","17","15","9","11","6","12","7","6","6","11","6","9",);
$Y=array("10","4","15","14","12","11","11","13","9","10","13","15","8","11","10","11","11","18");
$AV=array("+7","+9","+7","-2","+3","+1","+6","+2","0","+1","-7","-3","-2","-4","-4","0","-5","-9");
$satir=0;
$sayac=0;
$sayac1=0;
$sayac2=0;
$sayac3=0;
$sayac4=0;
$sayac5=0;
$sayac6=0;
$sayac7=0;
$sayac8=0;


while($satir<36)
{
	if($satir%2==0)
	{
		echo"<tr>";
		echo"<td>".$Takımlar[$sayac1]."</td>";
		$sayac++;
	
	}
	$satir++;
		if($satir%2==0)
	{
		echo"<td>".$OM[$sayac1]."</td>";
		$sayac1++;
		

	}



	if($satir%2==0)
	{
		echo"<td>".$G[$sayac2]."</td>";
		$sayac2++;
		
	}
	

	
	if($satir%2==0)
	{
		echo"<td>".$B[$sayac3]."</td>";
		$sayac3++;
		
	}
	if($satir%2==0)
	{
		echo"<td>".$M[$sayac4]."</td>";
		$sayac4++;
		
	}
	if($satir%2==0)
	{
		echo"<td>".$A[$sayac5]."</td>";
		$sayac5++;
		
	}
	if($satir%2==0)
	{
		echo"<td>".$Y[$sayac6]."</td>";
		$sayac6++;
		
	}
	if($satir%2==0)
	{
		echo"<td>".$AV[$sayac7]."</td>";
		$sayac7++;
		
	}
	if($satir%2==0)
	{
		echo"<td>".$puanlar[$sayac8]."</td>";
		$sayac8++;
		
	}
	
	
	if($satir%2==0)
	{
		echo"</tr>";
		
	}
} 

	



  echo "</table>";
?>
</body>
</html>