<?php
    $real = $_POST["valor"];
    $dolar = $real/5.75;

    if(!empty($rela)){ 
        echo"<p>O valor em real:".$real."</p>";
        echo"<p>O valor convertido: ".$dolar."</p>";
    }else{
        echo"<p>Erro:Por favor, preencha todos o campo.</p>";
    }
    
?>