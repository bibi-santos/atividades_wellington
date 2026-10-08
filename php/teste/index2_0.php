<?php

/*function cadastro()
{
    echo "Sejam bem vindos ao curso de php<br>";
    $nome="Gabi";
    $datanas="21/12";
    $cpf="000.000.000-00";
    $endereco="xxxx xx 91 xxx C xxxx 13";
    $cidade="Ceilândia";
    $anime="Jojo's Bizarre Adventure";
    $filme="";
    $serie="";
    $ator="";

    //echo "Meu nome é: ",$nome, " nasci em: ",$datanas,
}*/

function somar($n1,$n2)
    {

        echo "Operadores matemáticos <br>";

        echo "Soma<br>";
        //$n1= 100;
        //$n2= 21;
        $resultadosoma=$n1+$n2;
        echo "O resultado da soma é: ",$resultadosoma, "<br>";

    }
somar(100,21);



function subtrair($n1,$n2)
    {
        echo "Subtração<br>";
        //$n1= 100;
        //$n2= 21;
        $resultadosubtracao=$n1-$n2;
        echo "O resultado da subtração é: ",$resultadosubtracao, "<br>";

    }
subtrair(100,21);


function multiplicacao($n1,$n2)
    {
        echo "Multiplicação<br>";
        //$n1= 100;
        //$n2= 21;
        $resultadomultiplicacao=$n1*$n2;
        echo "O resultado da multipicação é: ",$resultadomultiplicacao, "<br>";

    }
multiplicacao(100,21);

function divisao($n1,$n2)
    {
        echo "Divisão<br>";
        //$n1= 100;
        //$n2= 21;
        $resultadodivisao=$n1/$n2;
        echo "O resultado da divisão é: ",$resultadodivisao, "<br>";
    
    }

divisao(100,21);

?>