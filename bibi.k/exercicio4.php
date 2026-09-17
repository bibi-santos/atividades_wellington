<?php

$nome= "Gabi";
$anoNascimento=2005;
$anoAtual=2026;
$idade= $anoAtual - $anoNascimento;
$perfil= "outro";
$ingressoInteiro=30;
$calssietaria=16;
$titulo="blablabla";
$data="27/08/2026";
$hora="00:00";
$assento="G21";
$numeroSala=4;


if(idade >= 60)
{
    echo "Olá, ",$nome, "<br>",
    "Título do Filme:" ,$titulo, "<br>",
    "Classificação Etária:", $calssietaria, "anos", "<br>",
    "Inicio da Sessão:",$hora, "<br>",
    "Data da Sessão:", $data, "<br>",
    "Número do Assento:", $assento, "<br>",
    "Número da Sala:", $numeroSala, "<br>",
    "Valor do Ingresso: Gratuito";
}

if($idade<$calssietaria)
{
    echo "Você não tem a idade necessaria para assistir o filme";
}

else
{
    if((($perfil=="aluno")||($perfil=="professor")||($perfil=="PCD"))&&($idade<60))
         {
             $ValorTotal=$ingressoInteiro/2;
             echo "Por ser", $perfil, ",você tem direito a Meia Entrada";
            echo "Olá, ",$nome, "<br>",
            "Título do Filme:" ,$titulo, "<br>",
            "Classificação Etária:", $calssietaria, "anos", "<br>",
            "Inicio da Sessão:",$hora, "<br>",
            "Data da Sessão:", $data, "<br>",
            "Número do Assento:", $assento, "<br>",
            "Número da Sala:", $numeroSala, "<br>",
            "Valor do Ingresso:", $ValorTotal;
         }


else
{
    echo "Olá, ",$nome, "<br>",
    "Título do Filme:" ,$titulo, "<br>",
    "Classificação Etária:", $calssietaria, "anos", "<br>",
    "Inicio da Sessão:",$hora, "<br>",
    "Data da Sessão:", $data, "<br>",
    "Número do Assento:", $asseno, "<br>",
    "Número da Sala:", $numeroSala, "<br>",
    "Valor do Ingresso: Gratuito";
}
}
    


?>