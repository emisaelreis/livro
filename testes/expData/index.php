<?php

$dataAtual = new DateTime('2020-03-26');
$dataServico = new DateTime('2020-03-27');
$diff = $dataServico->diff($dataAtual);


print 'invert: ' .$diff->invert;
print '<hr>';
