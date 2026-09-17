<?php 
// Criando um valor de frutas
$frutas = ["Maça", "Banana", "Morango", "Uva"];

//Acessando um item específico
echo "Eu gosto de " . $frutas[3]; //Resultado: Banana

//Adicionado um novo item 
$frutas[] = "Laranja";

//Percorrendo o vetor com o comando 'foreach'
//(o mais fácil para PHP)
foreach($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}

echo "Sejam bem vindos ao curso de php<br>";
$nome=["Cinderella dos Santos rosa<br>", "Fiona Ribeiro Alecar", "Maoana Silva Garreto"];
$datanas=["17-03-2002", "02-02-2004", "31-12-1999"];
$cpf=["12345678901", "78945612386", "45678932158"];
$endreco=["QS2 24 conjunto J casa 12", "QNN 51 conjunto P casa 9", "QNL 01 conjunto A casa 4"];
$cidade=["Ceilândia", "Guará", "Asa Sul"];

echo $nome[1];
echo "Meu nome é:" .$nome. "Nasci em:" 
echo $datanas, "<br>";
echo $cpf, "<br>";
echo $endereco, "<br>";
echo $cidade, "<br>";

?>