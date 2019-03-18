<html>
<head>
<title>.:: Program Menghitung Discount ::.</title>
</head>
<body>
<font face=verdana size=2>
<form action=contoh2_7.php method="post">Jumlah Bayar
<input type=text name=totalbeli><br><br>
<input type=submit value="Hitung Diskon">
</form>

<?php

$totalbeli=$_POST['totalbeli'];
if (isset($totalbeli))
{
$toyar=intval($totalbeli);
$diskon=0;
if ($toyar>=500000)
$diskon=(0.5*$toyar);
else
if ($toyar>=100000)
$diskon=(0.1*$toyar);
else
if ($toyar>=50000)
$diskon=(0.05*$toyar);
else
print("Maaf Tidak Ada Diskon <br>\n");
printf("Jumlah Bayar = %d<br>\n",$toyar).<br>;
echo number_format($toyar,2,",",".");

printf("Diskon = %d<br>\n",$diskon);
$totalbayar=$toyar-$diskon;
printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);
}
?>
</body>
</html>