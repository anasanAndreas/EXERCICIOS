<html>
<head>
<title>formulario exercicio 2</title>
</head>
<body>
<h1>mostrar os numeros conforme escolha do usuario</h1>
<form action="2r.php" method="post">
Digite o valor do intervalo inicial<br>
<input type="int" name="valorinicial"><br>
Digite o valor do intervalo final<br>
<input type="int" name="valorfinal"><br>
<select name="ftipo">
<option value="par">par</option>
<option value="impar">impar</option>
<option value="todos">todos</option>
</select>
<br>
<input type="submit" name="calcular" value="verificar">
<input type="reset" name="limpar" value="limpar">
</form>
</body>
</html>
