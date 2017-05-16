<html>
<head>
<meta charset= "utf-8"/>
</head>
<body>
<?php
 function mais 5($numero){
  $numero+=5;
}
   echo "<h1> Passagem de parametro por referencia </h1>";
$a=3;
 mais5($a);
 echo "Valor da variavel a=$a <br>";
?>
</body>
</html>
