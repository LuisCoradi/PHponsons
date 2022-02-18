<!DOCTYPE html>
<html>
<body>
<div align="center">
<form name="form" method="get">
Insira um número : <input type="text" value="" name="numero">
<input type = "submit" value ="tabuada">
</form>
<?php
$num = (int)@$_GET["numero"];
if($num > -2)
{
for($i = 0 ; $i < 11; $i++)
{
echo " $i x $num  = " . $i*$num . "<br>";
}
}
?>
</body>
</html>
