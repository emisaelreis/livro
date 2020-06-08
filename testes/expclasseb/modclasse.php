<?php

class movimento
{
    private $entrada;
    private $despesa;
    private $saldoAnterior;

    public function __construct($entrada, $despesa, $saldoAnterior){
        $this->entrada = $entrada;
        $this->despesa = $despesa;
        $this->saldoAnterior = $saldoAnterior;
    }

    public function calculo()
    {
        $convencao = $this->entrada * (10/100);
        $restante = $this->entrada - $convencao;
        $sede = $restante / 2;
        $auxEclesiastico = $restante * (30/100);
        $congregacao = $restante * (20/100);
        $diz_Diz = $auxEclesiastico * (10/100);
        $auxLiquido = $auxEclesiastico - $diz_Diz;
        $saldoAtual = $this->saldoAnterior + $congregacao - $this->despesa;

        echo "<br><table border='1' width='30%'>";
        echo "<tr><th colspan='2'>Relatório</th></tr>";
        echo "<tr><td>Entrada</td><td align='right'>". number_format($this->entrada, 2,',','.'). "</td></tr>";
        echo "<tr><td>Convecao 10%</td><td align='right'>". number_format($convencao, 2,',','.'). "</td></tr>";
        echo "<tr><td>Restante 90%</td><td align='right'>". number_format($restante, 2,',','.'). "</td></tr>";
        echo "<tr><td>Sede 50%</td><td align='right'>". number_format($sede, 2,',','.'). "</td></tr>";
        echo "<tr><td>Aux. Eclesiático 30%</td><td align='right'>". number_format($auxEclesiastico, 2,',','.'). "</td></tr>";
        echo "<tr><td>Congregação 20%</td><td align='right'>". number_format($congregacao, 2,',','.'). "</td></tr>";
        echo "<tr><td>Diz. Aux. Ecle 10%</td><td align='right'>". number_format($diz_Diz, 2,',','.'). "</td></tr>";
        echo "<tr><td>Aux. Liquid</td><td align='right'>". number_format($auxLiquido, 2,',','.'). "</td></tr>";
        echo "<tr><td>Despesa</td><td align='right'>". number_format($this->despesa, 2,',','.'). "</td></tr>";
        echo "<tr><td>Saldo Anterior</td><td align='right'>". number_format($this->saldoAnterior, 2,',','.'). "</td></tr>";
        echo "<tr><td>Saldo Atual</td><td align='right'>". number_format($saldoAtual, 2,',','.'). "</td></tr>";
        echo "</table>";

    }
}
