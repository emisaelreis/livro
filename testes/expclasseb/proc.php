<?php

include 'modclasse.php';
include 'index.php';

$mov = new movimento($_POST['entrada'],$_POST['despesa'],$_POST['saldoanterior']);


$mov->calculo();