<?php
    $nome = "Isah"; #criação de variavel
    $numero = 16.5;   #criação de variavel
    echo"<h1>Olá, $nome!</h1>"; #imprimir o texto em h1 e com a variavel nome

    #exercício - código
    $nota1 = 7.5;
    $nota2 = 8.0;
    $media = ($nota1 + $nota2)/2;

    echo "A média é: $media <br>";
    
    if($media >=6){
        echo"<b>Aprovado!</b>";
    }else {
        echo"<b>Recuperação.</b>";
    }
?>
