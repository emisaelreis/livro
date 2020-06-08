<?php

class Entree
{
    private $nome;
    private $custo;

    public function __construct($nome, $custo)
    {
        $this->nome = $nome;
        $this->custo = $custo;
    }

    public function setCusto($custo){
        $this->custo = $custo;
    }
    public function show()
    {
        print "Nome: " . $this->nome . "<br>";
        print "Custo: " . $this->custo . "<br>";
    }
}
