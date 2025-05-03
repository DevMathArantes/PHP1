<?php

    /*
        Estrutura for:
            for($X; Y; Z){
                ...
            }
            Cria-se o valor X, enquanto a condição Y for válida, X será incrementado na organização Z e o bloco de código
            irá se repetir
    */
    $valorTotal = 0;
    for($i = 1; $i < $argc; $i++){
        $valorTotal += $argv[$i]; 
    }

    /*
        Estrutura while:
            while(X){
                ...
            }
            O bloco será executado repetidas vezes até que X seja false
    */
    $i = 1;
    while($i < $argv[$i] && $argv[$i] != 0){
        $atual = $argv[$i++];
        echo "\nNOTA VÁLIDA ($atual)\n";
    }

    /*
        Estrutura do..while
        do{
            ...
        } while(X);
         A estrutura é executada e ao final do bloco, se X for true, o bloco é novamente executado até que X = false
    */
    $i= 1;
    do{
        $atual = $argv[$i];
        echo "\n$i - $atual\n";
        $i++;
    }while($i < $argc);

    //A variável $argc contém a quantidade de $agrv criados - 1
    $contagem = $argc - 1;

    $media = $valorTotal / $contagem;

    echo "\nA média dos seus $contagem valores é: \n$media\n";
