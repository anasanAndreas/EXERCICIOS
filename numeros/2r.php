<html>
<head>
<title>mostrar resultados</title>
</head>
<body>
<?php
echo "<font size=25>";
echo "numeros pares de 1 ate 50<br>";
for ($x=1;$x<=50;$x++){
if ($x%2==0){
echo " $x ";
}
}
echo "</fonts>";
echo "<br>gostou!!!<br>";
echo "<hr>";
$pinc=$_POST["valorinicial"];
$pfim=$_POST["valorfinal"];
$ptipo=$_POST["ftipo"];
if ($pinc>$pfim){
$troca=$pinc;
$pinc=$pfim;
$pfim=$troca;
}
echo "<br>ampliacao do exercicio escolha do usuario ";
for ($x=$pinc;$x<=$pfim;$x++){
if ($x%2 == 0){
echo "$x ";
}
}
echo "<hr>";
echo "<br> agora sera mostrado todos os numeros<br>";
echo "entre $pinc ate $pfim somente os numeros $ptipo <br>";
for ($x=$pinc;$x<=$pfim;$x++){
if ($ptipo=="todos"){
echo "$x ";
}else if (($x%2==0) && ($ptipo=="par")){
echo "$x ";
}else if (($x%2==1) && ($ptipo=="impar")){
echo "$x ";
}
}
?>
</body>
</html>

