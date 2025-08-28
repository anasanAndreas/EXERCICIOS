<HTML>
<HEAD>
 <TITLE>valor da compra</TITLE>
</HEAD>
<body bgcolor=#A9B0E2 text=#FFFFFF>

<center>
<?php header("Content-type: text/html; charset=utf-8");
$lanche = $_POST['lanche'];
$suco = $_POST['suco'];
$salgado = $_POST['salgado'];
$belo = $_POST['belo'];
$pirulito = $_POST['pirulito'];
$chocolate = $_POST['chocolate'];

$rlanche = $lanche * 10;
$rsuco = $suco * 2;
$rsalgado = $salgado * 10;
$rbelo = $belo * 0.10;
$rpirulito = $pirulito * 3;
$rchocolate = $chocolate * 5;
$total = $rlanche + $rsuco + $rsalgado + $rbelo + $rpirulito + $rchocolate;

echo  (" <h1>seu gasto total foi...</h1><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>R$ $rlanche em lanches, </p><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>R$ $rsuco em sucos, </p><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>R$ $rsalgado em salgados, </p><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>R$ $rbelo em balas 7belo, </p><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>R$ $rpirulito em pirulitos, </p><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>e R$ $rchocolate em chocolates. </p><br><br>");
echo  (" <p style='font-size:30px; margin: 0px;'>totalizando em R$ $total!");
?>
<br><br>
<img src="dinheiro.png" style="width: 150px; height: 150px">
</center>
</BODY>
</HTML>
