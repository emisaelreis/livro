<?php
$hamburguer = 4.95;
$milk_shake = 1.95;
$refrigerante = 0.95;
$imposto = 7.5;
$gorgeta = (16/100);
$tot_hamburguer = 4.95 * 2;
$tot_milk_shake = 1.95;
$tot_refrigerante = 0.95;


$tot_venda = $tot_hamburguer + $tot_milk_shake + $tot_refrigerante;
$tot_imposto = $tot_venda * $imposto/100;
$tot_gorgeta = $tot_venda * $gorgeta;

$tot_geral = $tot_venda - $tot_imposto - $tot_gorgeta;
$html = <<<PAGINA
<html>
<head><title>Questão 01</title></head>
<body>
    <h3>Exercíco - Pag. 61</h3>
    <table border="2">
    <tr><th colspan="4">Compra</th></tr>
    <tr><th width="120px">Produto</th><th width="80px">Qtd</th><th width="70px">Preço</th><th width="70px">Total</th></tr>
    <tr><td>Hambúguer</td><td align="center">2</td><td align="right">{$hamburguer}</td"><td align="right">{$tot_hamburguer}</td></tr>
    <tr><td>Milk-Shake</td><td align="center">1</td><td align="right">{$milk_shake}</td><td align="right">{$tot_milk_shake}</td></tr>
    <tr><td>Refrigerante</td><td align="center">1</td><td align="right">{$refrigerante}</td><td align="right">{$tot_refrigerante}</td></tr>
    <tr><td colspan="3">Total: </td><td align="right">{$tot_venda}</td></tr>
    <tr><td colspan="2">Imposto</td><td align="right">7.5%</td><td align="right">{$tot_imposto}</td></tr>
    <tr><td colspan="2">Gorgena</td><td align="right">16%</td><td align="right">{$tot_gorgeta}</td></tr>
    <tr><td colspan="3" align="right">Total Geral</td><td align="right">{$tot_geral}</td></tr>
    </table>
</body>
</html>


PAGINA;

echo $html;
