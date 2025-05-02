<?php

    //Em php é possivel ter relações matemáticas dentro das strings
    echo "10" + "90";

    //Dentro das strings \n serve para pular linhas e \t para TAB
    echo "\n-------\n QUEBRA DE LINHA \t  QUEBRA DE ESPAÇO (TAB) \n-------\n";

    // "." serve para somar strings (concatenação)
    $meuNome = "Matheus Arantes Ferreira";
    echo "Olá, meu nome é " . $meuNome;

    //Com $ você pode chamar suas variáveis dentro de uma string (interpolação)
    echo "\nOlá, meu nome é $meuNome\n";

    //Para utilizar string sem reconhecer comando internos, utilize ''
    echo '\nOlá, meu nome é $meuNome';