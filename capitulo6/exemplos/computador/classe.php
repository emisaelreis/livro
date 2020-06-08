<?php

class Computador
{
    private $placa_mae;
    private $processador = array();
    private $memoria = array();
    protected $hd = array();

    public function __construct($placa_mae, $processador = array(), $memoria= array(), $hd = array())
    {
        if($memoria[1] < 8)
        {
            throw new Exception("A memória precisa ser pelo menos de 8 Gb.");
        }
        
        if($hd[1] < 256)
        {
            throw new Exception("O HD precisa ser de pelo menos 500 Gb.");
        }
        $this->placa_mae = $placa_mae;
        $this->processador = $processador;
        $this->memoria = $memoria;
        $this->hd = $hd;
    }

    public function show()
    {
        print "Placa mãe: $this->placa_mae<br>";
        print "Processador: " .implode(' ',$this->processador) . "<br>";
        print "Memória: " . implode(' ',$this->memoria) . " GB<br>";
        print "HD: " . implode(' ',$this->hd);

    }
}
