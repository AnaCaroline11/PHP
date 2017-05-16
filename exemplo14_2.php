<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
<h1> Exemplo 14_2 </h1>
<?php
functiom testeGlobal(){
global $a;
$a=25;
}
echo "<h1> Variavel Global </h1>";
$a=0
testeGlobal();
echo " Valor da variavel a=$a ";
?>
</body>
</html>
