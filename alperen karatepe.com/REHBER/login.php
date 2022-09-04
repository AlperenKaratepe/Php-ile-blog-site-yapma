<?php
session_start();
$kod=$_POST['kod'];
$dkod=$_SESSION['dkod'];
include 'baglan.php';
$ad=$_POST['kad'];
$sifre=$_POST['sifre'];

if($kod==$dkod)
{
$sorgu="SELECT * FROM kullanici WHERE ad='$ad' AND sifre='$sifre'";
$s=mysqli_query($link,$sorgu);
if(mysqli_num_rows($s)>0)	// mysqli_num_rows: sorgu sonunda kaç tane değer dönderdiğini yazar
{
	$_SESSION['kad']=$ad;	//Diğer sayfada sadece bu kullanıcının bilgilerini görüntülemek için session'a kullanıcı adını kayıt ettik.
	header("Refresh:1;url=uyesayfa.php");
}
else
{
	echo "Kullanıcı adı/şifre hatalı!";
}
}
else
{
	header("Refresh:1;url=rehber.php");
}
?>