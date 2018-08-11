<?php
$w=$_POST['Name'];
$c=$_POST['cat'];
$d=$_POST['email'];
$f=$_POST['textarea'];
$a = mysqli_connect("localhost","id6731452_souravseal","Srabani1@","id6731452_sourav");

$ins="INSERT INTO `table1`(`Name`,`Email`,`Mobile`,`Complain`)VALUES('$w','$d','$c','$f')";
$result=mysqli_query($a,$ins);
if(!$ins)
{
    $result1=mysqli_error($a,$ins);    
}

if($ins){
	echo " connected";
}
else{
	echo " not connection successful";
}
$sub="hello world";
$txt = "thank u for registering 
we will reach out to u shortly";
$myEmail = "souravseal.sourav@gmail.com";
$headers="From ".$myEmail."\r\n";
$headers1="From ".$d."\r\n";
mail($d,$sub,$txt,$headers);
mail($myEmail,$sub,"process it shortly",$headers1);
mail("+91".$cat,'',$$headers1);
?>
