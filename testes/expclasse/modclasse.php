<?php

class movimento
{
    public $entrada;
    public $despesa;
    public $saldoAnterior;

    public function calculo($entrada, $despesa, $saldoAnterior)
    {
        $convencao = $entrada * (10/100);
        $restante = $entrada - $convencao;
        $sede = $restante / 2;
        $auxEclesiastico = $restante * (30/100);
        $congregacao = $restante * (20/100);
        $diz_Diz = $auxEclesiastico * (10/100);
        $auxLiquido = $auxEclesiastico - $diz_Diz;
        $saldoAtual = $saldoAnterior + $congregacao - $despesa;

        echo "<br><table border='1' width='30%'>";
        echo "<tr><th colspan='2'>Relatório</th></tr>";
        echo "<tr><td>Entrada</td><td align='right'>". number_format($entrada, 2,',','.'). "</td></tr>";
        echo "<tr><td>Convecao</td><td align='right'>". number_format($convencao, 2,',','.'). "</td></tr>";
        echo "<tr><td>Sede</td><td align='right'>". number_format($sede, 2,',','.'). "</td></tr>";
        echo "<tr><td>Aux. Eclesiático</td><td align='right'>". number_format($auxEclesiastico, 2,',','.'). "</td></tr>";
        echo "<tr><td>Congregação</td><td align='right'>". number_format($congregacao, 2,',','.'). "</td></tr>";
        echo "<tr><td>Diz. Aux. Ecle</td><td align='right'>". number_format($diz_Diz, 2,',','.'). "</td></tr>";
        echo "<tr><td>Aux. Liquid</td><td align='right'>". number_format($auxLiquido, 2,',','.'). "</td></tr>";
        echo "<tr><td>Saldo Anterior</td><td align='right'>". number_format($saldoAnterior, 2,',','.'). "</td></tr>";
        echo "<tr><td>Saldo Atual</td><td align='right'>". number_format($saldoAtual, 2,',','.'). "</td></tr>";
        echo "</table>";

    }
}
