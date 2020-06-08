<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SKShop</title>
</head>
<body>
<?php include('conexao.php'); ?>


<table border="1">
<tr><td>Id</td><td>Nome</td><td>Preço</td></tr>
<?php
foreach($rows as $row){
    echo '<tr><td align="center">'.$row[0].'</td><td>'.$row[1].'</td><td align="right">'.number_format($row[2],2,',','.').'</td>';
}
?>
</table>

</body>
</html>