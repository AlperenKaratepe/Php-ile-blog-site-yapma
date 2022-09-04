<html>
<head> 
<title> N.sayıyı bulma </title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
		</head>
<body>
<div class="header">
		
		</div>
		

		<h1><center><font color="grey">1-500 Kadar Olan Sayıların Toplamı </center></h1>
       	<form action="n.sayi.php" align="center" size="15">
		 
		<?php
		function x(){
		echo "<table align=center >";
		echo "<tr><td>";
	     echo "<h2><font color='GREY'>N.Sayı Ve Toplam Değer</h2>";
		$y=0;
		for($x=1;$x<500;$x++)
		{  
		 $y=$x+$y;
         
		  if($y>=500) break;
		  
		}
		   echo $x; echo '<br>';
			echo $y;	
			echo "</td></tr> </table>";
		}			
				x();
       ?>

				</form>
	</body>
</html>
