<html>
<head>
<meta charset= "utf-8"/>
</head>
<body>
<?php
   $carros['Palio']['cor']='azul';
   $carros['Palio']['potência']='1.0';
   $carros['Palio']['opcional']='ar condicionado';
   
   $carros['Corsa']['cor']=cinza'';
   $carros['Corsa']['potência']='1.3';
   $carros['Corsa']['opcional']='MP3';
   
   $carros['Gol']['cor']='branco';
   $carros['Gol']['potência']='1.0';
   $carros['Gol']['opcional']='metalica';

foreach ($carros as $modelos => $caracteristicas){
 echo"<b>  Modelo". $modelos."</b>";
 echo"</br>";
 foreach($caracteristicas as $caracteristicas => $valor){
  echo"$caracteristicas : $valor";
  echo"</br></br>";
}
}
?>
</body>
</html>
