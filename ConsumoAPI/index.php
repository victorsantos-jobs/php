<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php

$url = "https://rickandmortyapi.com/api/character";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch));

//var_dump($resultado);


foreach ($resultado->results as $ator){
   // var_dump($ator);

echo "Nome:" . $ator->name . "<br>";
echo "Status:" . $ator->status . "<br>";
echo "Specie:" . $ator->species ."<br>";
echo "<img src='$ator->image'>","<br>";


}


?>


</body>
</html>