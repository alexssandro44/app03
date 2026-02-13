<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Resposta</h1>

<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$ingresso = $_POS['ingresso'];
?>

<?php

if($idade>18){
    echo "<p>Bom evento $nome !<p/>";
}

else{
    echo "<p>Desculpa, $nome, você precisa ser 18+ para participar!<p/> ";
}
?>

<a href="formulario.html"> voltar para o formulário </a>


<!--- OBS: os arquivos php e html precisa estar referenciados ↑  ---->

</body>
</html>


