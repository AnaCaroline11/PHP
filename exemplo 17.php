<html>
<head>
<meta charset= "utf-8"/>
</head>
<body>
<?php
    echo "<h1> Lendo um valor </h1>";
 $frutas= array ("Laranja","Maçã","Uva","Banana","Mamão");
    foreach($frutas as $valor){
   echo "<li> Fruta= $valor </li>";
}
  echo "<br><br>";
  $dados= array ("nome"=>"Maria Cristina";
  "rua"=>"São João";
  "bairro"=>"Cidade dos Campos";
  "cidade"São Paulo");
   foreach($dados as $chave=>$valor){
   echo "$chave: $valor </br>";
}
?>
</body>
</html>
