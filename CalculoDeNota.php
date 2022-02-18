<html>
 <head>
  <title>Media Aluno</title>
 </head>
 <body>
 <div align="center">
 <form action="" method="get">
 Nota 1:  <input type="text" name="nota1" /><br />
  Nota 2:  <input type="text" name="nota2" /><br />
  Nota 3:  <input type="text" name="nota3" /><br />
  Nota 4:  <input type="text" name="nota4" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 

 <?php 
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];
  $nota3 = $_GET['nota3'];
  $nota4 = $_GET['nota4'];
  $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

  echo "Sua Média é: $media <br />";
  if($media<70)
   echo "Você foi Reprovado";
  elseif($media==100)
   echo "Aprovado";
  else
   echo "Aprovado";
 ?>
 </body>
</html>
