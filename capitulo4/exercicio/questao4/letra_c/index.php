<?php

$refeicoes = [
    'Segunda' =>['Café da manhã' => ['Entrada' => 'Café com leite', 'Acompanhamento' => 'Pão com queijo', 'Saída' => 'Biscoito Integal'],
                 'Almoço' => ['Entrada' => 'Arroz com Feijão', 'Acompanhamento' => 'Carne Cozida', 'Saída' => 'Doce de leite'],
                 'Lanche da tarde' =>['Entrada' => 'Luco de Laranja', 'Acompanhamento' => 'Kibe', 'Saída' => 'Banana', 'Valor diário' => '136.00']],
    'Terça' =>  ['Café da manhã' => ['Entrada' => 'Café com leite', 'Acompanhamento' => 'Pão com ovo', 'Saída' => 'Biscoito Cream Cracker'],
                 'Almoço' => ['Entrada' => 'Arroz com Abóbora', 'Acompanhamento' => 'Açado de panela', 'Saída' => 'Sorvete'],
                 'Lanche da tarde' =>['Entrada' => 'Luco de Goiaba', 'Acompanhamento' => 'Bolo de Trigo', 'Saída' => 'Banana', 'Valor diário' => '136.00']],
    'Quarta' => ['Café da manhã' => ['Entrada' => 'Achocolatado', 'Acompanhamento' => 'Pão com queijo', 'Saída' => 'Barra de Cereal'],
                 'Almoço' => ['Entrada' => 'Arroz com Cenoura', 'Acompanhamento' => 'Carne Frita', 'Saída' => 'Doce de Goiaba'],
                 'Lanche da tarde' =>['Entrada' => 'Luco Acerola', 'Acompanhamento' => 'Coxinha', 'Saída' => 'Banana', 'Valor diário' => '136.00']],
    'Quinta' => ['Café da manhã' => ['Entrada' => 'Café com leite', 'Acompanhamento' => 'Pão com ovo', 'Saída' => 'Biscoito Integal'],
                 'Almoço' => ['Entrada' => 'Arroz com Feijão', 'Acompanhamento' => 'Franco ao molho', 'Saída' => 'Paçoca'],
                 'Lanche da tarde' =>['Entrada' => 'Luco de Cajá', 'Acompanhamento' => 'Pastel', 'Saída' => 'Banana', 'Valor diário' => '136.00']],
    'Sexta' => ['Café da manhã' => ['Entrada' => 'Café com leite', 'Acompanhamento' => 'Pão com Presunto', 'Saída' => 'Amêndoas'],
                 'Almoço' => ['Entrada' => 'Arroz com Integral', 'Acompanhamento' => 'Peixe', 'Saída' => 'Pudim'],
                 'Lanche da tarde' =>['Entrada' => 'Luco Cupuaçú', 'Acompanhamento' => 'Bolo', 'Saída' =>'Banana', 'Valor diário' => '136.00']]
];

print "<table border='1'>";
print "<tr><th colspan='2'>Refeições na Escola</th></tr>";
foreach($refeicoes as $dia => $ref)
{
    print "<tr><th colspan='2'>$dia</th></tr>";
    foreach($ref as $turno => $alim)
    {
        print "<tr><td colspan='2' align='center'><b>$turno</b></td></tr>";
        foreach($alim as $etapa => $itens){
            if($etapa == 'Valor diário')
                print "<tr><td><b>$etapa</b></td><td align='right'><b>$itens</b></td></tr>";
            else
                print "<tr><td>$etapa</td><td align='right'>$itens</td></tr>";
        }
        print "</tr>";
    }
    print "<tr><td colspan='2' align='center'> .</td></tr>";
}
print "</table>";