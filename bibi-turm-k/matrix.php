<?php
//Criando uma matriz de notas (Aluno -> Notas)
$notas= [
    ["João", 8, 7, 8, 6], //Linha 0
    ["Maria", 9, 10, 5, 10], //Linha 1
    ["José", 6, 5, 8, 9] //Linha 2
];
//Acessando a nota 10 para Maria
//Ela está na linha 1, Coluna 2 (Índices: Aluno-0, Nota-1,
//Nota2=2)
echo "A segunda nota de Maria é:" .$notas[1][2];
echo "<br>--- Lista de Alunos ---<br>";

//Percorrendo a matriz com dois loops (um dentro do outro)
foreach ($notas as $linha) {
    echo "Aluno:" .$linha[0]. "| Nota 1=" .$linha[1].
    "| Nota 2=" .$linh[2]. "| Nota 3=" .$linha[3].
    "| Nota 4=" .$linha[4]. "<br>";
}

//1. Definindo o tamanho da matrix
$totalLinhas = 10;
$totalColunas = 5;
$matriz = [];
//2. Loop externo para criar as LINHAS
for ($i = 0; $i < $totalLinhas; $i++) {
    //3. Loop interno para criar as COLUNAS de cada linha
    for ($j = 0; $j < $totalColunas; $j++){
        //Atribuindo um conteúdo dinâmico para cada célula 
        //Exemplo: "Posição L:0 C:0"
        $matriz[$i][$j] = "L:$i C:$j";
    }
}
//4. Exibindo a matriz de forma organizada para os alunos verem
echo "<h3>Conteúdo da Matriz:</h3>";
echo "<table border='1' style='border-collapse; collapse; text-align: center;'>";
for($i = 0; $i < $totalLinhas; $i++) {
    echo "<tr>"; //abre a linha da tabela HTML
    for ($j = 0; $j < $totalColunas; $j++) {
        echo "<td style= 'padding: Spx;' >" .$matriz[$i][$j]. "</td>";
    }
    echo "</tr>"; //Fecha a linha
}
echo"</table>";
?>