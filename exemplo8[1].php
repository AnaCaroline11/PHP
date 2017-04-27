<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
echo "******** Estrutura Condicional *********</h1>";
$dia = getdate();
switch ($dia['wday']){
case 5:
   echo "Finalmente Sexta";
   break;
case 6:
   echo "Super sábado";
   break;
case 0:
   echo "Domingo Sonolento";
   break;
case 2:
   echo "Aula de programação";
   break;
default:
     echo "Estou esperando pelo fim de semana";
}
?>
</body>
</html>
