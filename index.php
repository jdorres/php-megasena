<?php

require __DIR__ . '/vendor/autoload.php';

echo "Hello World!!!";

/*
 * Mega sena
 * Devemos informar os apostadores e suas apostas cada apostador pode fazer n apostas.
 * Após todas as apostas feitas o sistema deve gerar o sorteio(6 dezenas) e mostrar os ganhadores (quem acertou 6 dezenas), quina e quadra
 */

 $jogo = new \MegaSolid\Jogo();
 $result = $jogo->makeJogo();

 echo "\n".json_encode($result)."\n";