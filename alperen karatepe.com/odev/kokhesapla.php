<html>
<body>

<br><br>
<table>
   <tr>
  <td> <form name="form1" method="post" action="kokhesapla.php" >
      Birinci kat sayı: <input type="text" name="a"><br><br>
      İkinci kat sayı: <input type="text" name="b"><br><br>
	  ücüncü kat sayı: <input type="text" name="c"><br>
      
      <input type="submit" name="Hesapla" value="Hesapla">
   </form></td>
   </body>
</html>
   <?php
   if(isset($_POST['Hesapla']))
   {
   echo "<td>";
    $a=$_POST["a"];
	$b=$_POST["b"];
	$c=$_POST["c"];
	
	$d=($b*$b)-4*($a*$c);
	if($d>0){
		echo"iki kök vardır<br>";
		
	$X1=(-$b-sqrt($d))/(2*$a);
	$X2=(-$b+sqrt($d))/(2*$a);
	echo "X1=$X1<br>";echo"X2=$X2";
	
	
	}
	if($d==0)
	{
	echo "tek kok vardır<br>";
	 $X=(-$b)/(2*$a);

		echo "X=$X";
	
	
	}
	if($d<0)
		
	echo"Gercek kok yoktur";
	echo"</td>";
echo "</tr>";
   }
   else echo"HESAPLAMA YAPILMADI!!";
?>
