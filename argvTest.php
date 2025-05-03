<?php

    /*
      Pode-se passar valores as variáveis pelo terminal através de $X = $argv[i] onde a variável X recebe o valor 
      respectivo da posição i de argv[] (começa em 1 pois o nome do arquivo também conta)

      $X = Y ?? Z preenche o valor de X com Z se Y = null
    */ 
    $int = $argv[1] ?? 0;

    /*
        Estruturas de condição:

        if(X1){
            ...
        } elseif(X2){
            ... 
        } elseif(X3){
            ... 
        } elseif(XN...){
            ... 
        } else{
            ... 
        }

        Se X1 não for válida, o algoritmo tentará as condições X2, X3, XN... e caso nenhuma delas sejam atendidas o bloco
        do else será executado
    */
    if($int > 0){
        echo "Seu valor inteiro é positivo\n";
    } elseif($int == 0){
        echo "Seu valor inteiro é neutro\n";
    } else{
        echo "Seu valor inteiro é negativo\n";
    }

    /*
        Pode-se utilizar uma expressão para manipular o valor de uma variável
        $X = match($Y){
            Y1 => X1,
            Y2 => X2,
            Yn => Xn...,
            default => Z
        }
            A variável X recebe X1 se valor de Y for Y1, X2 se Y for Y2 e etc... Se nenhum valor estiver dentro do 
            esperado, X receberá o valor de Z
    */

    $especificos = match($int){
        "0" => "0 identificado",
        "10" => "10 identificado",
        "100" => "100 identificado",
        default => "Nenhum valor identificado nos específicos"
    };
    
    /*
        Estrutura switch

        switch(X){
            case X1:
                ...
                break;
            case X2:
                ...
                break;
            
            case Xn:
                ...
                break;
            default:
                ...
                break;
        }
        A estrutura switch executa um bloco de código se X = X1, outro se X = X2, etc... caso X não possua valor esperado, 
        o bloco de default será executado
    */
    switch($int){
        case -1:
            $especificos = "-1 Identificado";
            break;
        case -10:
            $especificos = "-10 Identificado";
            break;
        case -100:
            $especificos = "-100 Identificado";
            break;
        default:
            echo "Não foi identificado nenhum caso esperado do seu valor";
            break;
    }
    echo "\n$especificos\n";

    $string = $argv[2];
    /*
        Operador ternário

        $X = Y ? Z : N;
        A variável X recebe Z se uma expressão Y for verdadeira e N se for falsa
    */
    $retorno = $string == "Matheus" ? "\nOlá Matheus\n" : "\nOlá desconhecido\n";
    echo $retorno;