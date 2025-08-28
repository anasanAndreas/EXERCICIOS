<HTML>
<HEAD>
 <TITLE>imc resultado</TITLE>
</HEAD>
<BODY bgcolor=black text=#11F011>
<h1>
<center>
<?php
$m = $_POST['m'];
$kg = $_POST['kg'];
$resultado = $m * $m;
$resultadof = $kg / $resultado;

if($resultadof < 18.5){
echo " Abaixo do peso: <br>$resultadof</h1>";
}

else if ($resultadof >= 18.5 && $resultadof <= 24.9 ){
     echo "Peso normal: <br>$resultadof </h1>";
     }

else if ($resultadof >= 25 && $resultadof <= 29.9 ){
     echo "Acima do peso: <br>$resultadof </h1>";
     }

else if ($resultadof >= 30 && $resultadof <= 34.9 ){
     echo "Obesidade de grau I: <br>$resultadof </h1>";
     }

else if ($resultadof >= 35 && $resultadof <= 39.9 ){
     echo "Obesidade de grau II: <br>$resultadof </h1>";
     }

else if ($resultadof >= 40){
     echo "Obesidade de grau III: <br>$resultadof </h1>";
     }

?>
</center>
</BODY>
</HTML>
