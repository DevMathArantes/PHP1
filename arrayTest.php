<?php

    //Criação de um array
    $meuArray = [10, 1.5, "Matheus", false];
    //ou
    $meuArray = array(10, 1.5, "Matheus", true);

    //Criando chaves dentro do array
    $meuArray = [
        "inteiro" => 10,
        "float" => 1.5,
        "string" => "Matheus",
        "booleano" => true
    ];

    echo "\nString: " . $meuArray["string"] . "\n";

    //X = (Y) X serve para mudar o tipo de X para o tipo Y
    $meuArray["inteiro"] = (string) $meuArray["inteiro"];
    
    //O comando var_dump(X) serve para mostrar as características da variável X
    var_dump($meuArray);

    //Para adicionar um elemento no final do array, utilize $X[] = Y para adicionar o elemento Y no final do array X
    $meuArray = [];
    for($i = 0; $i < 10; $i++){
        $meuArray[] = $i;
    }
    $meuArray[] = 10;

    //count(X) serve para contar quantos elementos o array X possui
    echo "\nMeu array possui " . count($meuArray) . " elementos\n";

    /*
        Estrutura foreach:
            foreach($X as $Y){
                ...
            }
        O bloco será executado para cada elemento (chamado de Y) do array X
    */  
    foreach($meuArray as $elemento){
        echo "\n$elemento\n";
    }

    //A função array_sum($X) retorna a soma dos valores dos elementos do array X
    $soma = array_sum($meuArray);
    echo "\n$soma\n";
    
    var_dump($meuArray);