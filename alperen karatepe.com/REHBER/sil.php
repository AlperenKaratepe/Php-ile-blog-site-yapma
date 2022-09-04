<?php
include 'baglan.php';
$id=$_GET['id']; 	//Url ye gönderdiğimiz Id 'yi alıyoruz
//Rehber tablosundan bilgi silme
$sorgu="DELETE FROM rehber WHERE id='$id'";
$s=mysqli_query($link,$sorgu);
if($s)
{
	echo "Silme Başarılı!";
	header("Refresh:1;url=uyesayfa.php");
}
else
{
	echo "Silme Başarısız!";
}
?>