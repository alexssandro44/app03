<?php

$nome =  $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="formulario.css">

</head>
<body>
    
<p class="header">Resultado da Inscrição</p>


<div class="formulario">

<?php
if ($idade >= 16) {
    echo "<div class='alert alert-success alerta-verde'>Dados aceitos com sucesso!</div>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
} else {
    echo "<div class='alert alert-danger alerta-vermelho'>Bloqueio - Menor de idade</div>";
}
?>

<a href="formulario.html" class="btn btn-outline-light mt-3">Voltar</a>

</div>

</body>
</html>