<?php

include 'modclasse.php';
include 'index.php';

$mov = new movimento;

$mov->entrada = $_POST['entrada'];
$mov->despesa = $_POST['despesa'];
$mov->saldoanterior = $_POST['saldoanterior'];


$mov->calculo($mov->entrada, $mov->despesa, $mov->saldoanterior);