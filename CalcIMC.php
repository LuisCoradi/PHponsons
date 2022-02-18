<!DOCTYPE html>
<html>
    <body>

    <br/> <br/> <br/>
    <div align="center">
    <form action="CalcIMC.php" method="POST"> 
    informe seu peso<input type="text" name="peso"/><br/>
    informe sua altura<input type="text" name="altura"/>
    <br></br>
    <input name="calcular" value="CALCULAR" type="submit"/>
</form>
</div>
</body>

</html>

<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
echo $peso;
echo $altura;
	$altura= pow($altura,2)/10000;
	$IMC = (double)$peso / (double)$altura;
	echo 'Seu IMC é:' .$IMC;	
	/*	//$resultado = number_format($IMC);
        if(isset($resultado) && $resultado != '0'){;	
			echo 'Seu IMC é:' .$resultado;
   		}else{
			echo 'Por favor, utilize apenas numeros!';	
		}*/
		?>
		
    
