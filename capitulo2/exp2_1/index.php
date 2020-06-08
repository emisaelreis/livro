<?php
echo 'Exemplo HereDocument';

$nome = array('Emisael','Nelma','Maria','Isabel');

print <<<DADOS
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heredocument</title>
</head>
<body>
    <br>
    Nome: $nome[0]<br>
    Nome: $nome[1]<br>
    Nome: $nome[2]<br>
    Nome: $nome[3]
</body>
</html>
DADOS;
