<?php
    /*
        1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba 
        o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

        2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o 
        aluno foi aprovado ou não.
        Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

        3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações 
        na tela.

        4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
    */

    //Desafio 1
    //O comando array_unique($X) retorna os elementos de X sem repetições (retira os repetidos após a primeira aparição)
    $numeros = [1, 2, 3, 5, 4, 4, 5, 5, 5, 6];
    $numeros = array_unique($numeros);
    var_dump($numeros);

    //Desafio 2
    $notas = [2, 4, 5, 3, 7, 8, 10, 4];
    foreach($notas as $nota){
        $aprovado = $nota > 6 ? true : false;
        echo "\nNota: $nota ";
        if($aprovado){
            echo "- APROVADO\n";
        } else{
            echo "- REPROVADO\n";
        }
    }

    //Desafio 3
    $conta =[
        'Titular' => "\nMatheus Arantes Ferreira",
        'Saldo' => 100000000.99
    ];
    echo $conta['Titular'] . " possui R$" . $conta['Saldo'] . " em sua conta.\n"; 

    //Desafio 4
    $Familia = ["João", "Maria"];
    $Familia[] = "José";
    var_dump($Familia);

    //Desafio especial

    //Para receber dados do usuário, utilize $X = fgets(STDIN); (X recebe o valor digitado)
    $saldo = 1000.00;
    do{
        echo "\n---------\nSALDO: R$ $saldo\n\n1-Retirar\n2-Depositar\n3-Sair\n----------\nSelecione:";
        $selecionar = fgets(STDIN); 
        if($selecionar == 1){
            echo "\nValor a retirar: ";
            $retiro = fgets(STDIN);
            if($retiro > $saldo){
                echo "\n\nSaldo insuficiente!\n";
            } else{
                $saldo -= $retiro;
            }
        } elseif($selecionar == 2){
            echo "\nValor a depositar: ";
            $deposito = fgets(STDIN);
            $saldo += $deposito;
        } elseif($selecionar == 3){
            echo "\n Você terminou com R$ $saldo \n OBRIGADO POR UTILIZAR O SISTEMA !";
        } else{
            echo "\nValor inválido.\n";
        }
    }while($selecionar != 3);
