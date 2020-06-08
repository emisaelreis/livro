<?php
include 'classe.php';

class Notebook extends Computador 
{
    private $bluetooth;

    public function __construct($placa_mae, $processador = array(), $memoria = array(), $hd = array(), $bluetooth = 'Não')
    {
        parent::__construct($placa_mae, $processador, $memoria, $hd);
        $this->bluetooth = $bluetooth;
    }

    public function most()
    {
        print "<br>Bluetooth: $this->bluetooth<br>";
    }
  
}
