<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Operator Aritmatika:.</title>
</head>

<body>
<?php
echo"<b>";
	$a=100;
	$b=50;
	echo"\$a=100 <br> \$b=50<br><br>";
	echo"Hasil a x b = ".($a*$b)."<br>";
	echo"Hasil a + b = ".($a+$b)."<br>";
	echo"Hasil a - b = ".($a-$b)."<br>";
	echo"Hasil a / b = ".($a/$b)."<br>";
	echo"Hasil a % b = ".($a%$b)."<br><br><br>";
	
	echo"Apakah a <= b ? <br> jawab:";
		if($a<=$b)
		{echo"benar";}
		else
		{echo"salah";}
		
	echo"<br><br>Apakah a == b ? <br> jawab:";
		if($a==$b)
		{echo"benar";}
		else
		{echo"salah";}
		
	echo"<br><br>Apakah a <> b ? <br> jawab:";
		if($a<>$b)
		{echo"benar";}
		else
		{echo"salah";}
	echo"</b>";
?>
</body>
</html>
