<?php
//Primiero exemplo de estrutura de repetição
for ($i=1; $i<11; $i++)
{
    echo "bibi" .$i. "<br>";
}

// Gerando uma lista de anos para um campo de seleção
echo "selecione o ano de ingresso: <br>";
for ($i=2020; $i<=2026; $i++)
{
    echo "ano:" .$i. "|";
}

//segundo exemplo de estrutura de repetição
//exemplo: simulando a leitura de registros de um sistema
$contador =1;
while ($contador <= 5)
{
    echo "Processando registro acadêmico nº $contador... <br>";
    $contador++;
}

//Terceiro exemplo de estrutura de repetição
$tentativa= 0;
do{
    echo "Tentando conectar ao servidor de banco de dados... <br>";
    $tentativa++;
}while ($tentativa <0); //mesmo sendo falso,
                        //ele executou uma vez.

//Quarto exemplo de estrutura de repetição
//exemplo: listando disciplina de um curso
$disciplinas=["Programação Web", "Estrutura de Dados", "Banco de Dados"];
foreach ($disciplinas as $indice => $nomedadisciplina){
    echo "Cod: $indice - Disciplinas: $nomedadisciplina <br>";
}
?>