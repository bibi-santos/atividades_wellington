<?php
// O código a seguir serve para mostrar uma frase ou conteudo dentro de uma variável
echo "Bem vindo a aula de revisão do PHP <br>"; // br serve para quebra de linha 
// tudo que for texto tem que estar dentro de aspas

// como declarar variáveis?
/* primeiro digite $ e depois crie o nome para a variável e depois coloque o conteúdo dentro dela, obs, nomes de variáveis não podem ter acentos, espaços e ç */

$variavel="Esse é um exemplo de frases, ou conteudo
que vai estar dentro da variavel <br>";

echo $variavel;

// Estruturas condicionais 

$cor="Verde"; // inicializa a variável 
if($cor== "Verde") // if se trata da primeira opção
    {// inicia um bloco de códigos
        echo "Você já pode atravessar a faixa de pedestre! <br>";
    }// fecha um bloco de códigos
    else if($cor== "Amarelo") // elseif se trata da segunda condição até a penúltima opção
        {
            echo "Atenção; pois o sinal ira ficar Vermelho <br>";
        }
        else // por se tratar da última opção o else mão precisa colocar condição
            {
                echo "Pare, o sinal está Vermelho <br>";
            }


// Equação do segundo 2ºGrau
$a=2;
$b=8;
$c=2;
$delta=($b*$b)-4*$a*$c;
if($a < 0)
     {
        echo "Isso não é uma equação do 2ºgrau";
     }
     else
        {
            if($delta== "0") // if se trata da primeira opção
                {// inicia um bloco de códigos
                     $x1= -($b)/(2*$a);
                     echo "Existe apenas um valor real <br>";
                }// fecha um bloco de códigos
                    else if($delta > "0") // elseif se trata da segunda condição até a penúltima opção
                        {
                             $x1= (-($b)+sqrt($delta))/(2*$a);
                             $x2= (-($b)-sqrt($delta))/(2*$a);
                             echo "Teremos dois valores reais sendo:" .$x1."e" .$x2;
                        }
                            else // por se tratar da última opção o else mão precisa colocar condição
                                {
                                    echo "Não exitem valores reais para está equação <br>";
                                }
//$delta = $b**8 (dica)
        }       
 
?>