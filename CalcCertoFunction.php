<!DOCTYPE html>
<html>
    <body>


    <br/> <br/> <br/>
    <div align="center">
    <form action="CalcNovo.php" method="POST"> 
    informe seu peso<input type="text" name="peso"/><br/>
    informe sua altura<input type="text" name="altura"/>
    <br></br>
    <input name="calcular" value="CALCULAR" type="submit"/>
</form>
</div>
</body>

<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];

function imc($altura, $peso){
	$altura = str_replace(',', '.', $altura);
	$resultado = $peso/pow($altura, 2);
	return $resultado;
	
	}
echo 'Seu IMC é:'.imc ($altura, $peso);

		?>
        </html>
