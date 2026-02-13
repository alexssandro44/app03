<!---  recebemos os dados do cliente e realizamos o processamento ----->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$a = $_POST['valorA'];
$b = $_POST['valorB'];
$soma = ($a + $b); 

?>

<h1>resposta servidor </h1>

<?php

echo "<p>$soma<p/>" ?>

<?php

if($soma>50){
    echo "valor maior que 50";
}
?>
<p></p>
<a href="cliente.html"> voltar </a>

</body>
</html>


