<?php
    $opt1 = $_POST["perg1"];
    $opt2 = $_POST["perg2"];
    $opt3 = $_POST["perg3"];

    $resultado = 0;
    $erros = 0;
    $acertos = 3;
    $erros_q = 3;

    if(!isset($opt1) or !isset($opt2) or !isset($opt3))
    {
        echo "Complete o teste";
    }
    else{
        if($opt1 == "opt3")
        {
           $resultado = $resultado + 1;
        }
        else{
            $erros = $erros + 1;
        }
        if($opt2 == "opt2")
        {
            $resultado = $resultado + 1;
        }
        else{
            $erros = $erros + 1;
        }

        if($opt3 == "opt3")
        {
            $resultado = $resultado + 1;
        }
        else{
            $erros = $erros + 1;
        }
        $percentual_acertos = $resultado * 100 / $acertos;
        $percentual_erros = $erros * 100 / $erros_q;
        echo "Quantidade de respostas certas: ".$resultado. "<br >";
        echo "Quantidade de respostas erradas: ".$erros. "<br>";
        echo "Percentual de acertos: ".$percentual_acertos."%". "<br >";
        echo "Percentual de erros: ".$percentual_erros."%" ."<br >";
    }
?>