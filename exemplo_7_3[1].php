<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h1>Estrutura Condicional</h1>
<?php
$altura=1.58;
$peso=62;
$imc=$peso/($altura*$altura);
if ($imc<18.5){
echo ($imc+"Classificação Magreza");
}
else if (($imc>18.5)&&($imc<24.9)){
echo ($imc+"Classificação Saudável");
}
else if (($imc>25.0)&&($imc<29.9)){
echo ($imc+"Classificação Sobrepeso");
}
else if (($imc>30.0)&&($imc<34.9)){
echo ($imc+"Classificação Obesidade grau 1");
}
else if (($imc>35.0)&&($imc<39.9)){
echo ($imc+"Classificação Obesidade grau 2(SEVERA)");
}
else if ($imc>=40){
echo ($imc+"Classificação Obesidade grau 3(MORBITA)");
}
?>
</body>
</html>