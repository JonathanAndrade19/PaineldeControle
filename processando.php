<?php
$br = '</br>';
$nomeProduto = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_STRING);
$codProduto = filter_input(INPUT_POST, 'codProduto', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_SPECIAL_CHARS);
$cor =  filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$dataCadastro = filter_input(INPUT_POST, 'dataCadastro', FILTER_SANITIZE_NUMBER_FLOAT);
$msn = filter_input(INPUT_POST, 'msn', FILTER_SANITIZE_STRING);


echo $nomeProduto.$br.$codProduto.$br.$tamanho.$br.$cor.$br.$dataCadastro.$br.$msn.$br;