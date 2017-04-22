<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
echo"<h1>******** Operadores Booleanos Exemplo 6 *********</h1><br>";
$c = FALSE;
echo"12 >= 12 and 10 > 2", (12 >= 12 and 10 > 2) ? "verdadeiro" : "falso";
echo"<br>";
echo"12 >= 12 pra false", (12 >= 12 or $c) ? "verdadeiro" : "falso";
echo"<br>";
echo"12 >= 12 xor 10 > 2",(12>=12 xor 10>2) ? "verdadeiro" : "falso";
echo"<br>";
echo"!FALSE", (!$c) ? "verdadeiro" : "falso";
echo"<br>";
echo"10>2 && FALSE", (10>2 && $c) ? "verdadeiro" : "falso";
echo"<br>";
echo"12>=12 || FALSE", (12>=12 || $c) ? "verdadeiro" : "falso";
?>
</body>
</html>