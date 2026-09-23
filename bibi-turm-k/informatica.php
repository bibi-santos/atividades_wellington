<?php
$estoque_informatica =
[
    ["id" => 101, "nome" => "Processador Ryzen 7", "qtd" => 15,
    "preco" => 1850,00, "tipo" => "Hardware"],
    ["id" => 102, "nome" => "Placa-mãe B550M", "qtd" => 8,
    "preco" => 950,00, "tipo" => "Hardware"],
    ["id" => 103, "nome" => "Memória RAM 16GB DDR4", "qtd" => 25,
    "preco" => 320,00, "tipo" => "Hardware"],
    ["id" => 104, "nome" => "RTX 4060 Ti", "qtd" => 5,
    "preco" => 2600,00, "tipo" => "Hardware"],
    ["id" => 105, "nome" => "SSD NVMe 1 TB", "qtd" => 30,
    "preco" => 450,00, "tipo" => "Armazenamento"],
    ["id" => 106, "nome" => "Fonte 750W 80 Plus", "qtd" => 12,
    "preco" => 580,00, "tipo" => "Energia"],
    ["id" => 107, "nome" => "Gabinete Torre Média", "qtd" => 10,
    "preco" => 350,00, "tipo" => "Gabinete"],
    ["id" => 108, "nome" => "Bebedouro de água 240mm", "qtd" => 7,
    "preco" => 420,00, "tipo" => "Refrigeração"],
    ["id" => 109, "nome" => "Monitor 27' 144Hz", "qtd" => 4,
    "preco" => 1250,00, "tipo" => "Periférico"],
    ["id" => 110, "nome" => "Teclado Mecânico RGB", "qtd" => 20,
    "preco" => 280,00, "tipo" => "Periférico"]
];
echo "<h2>Relatório de Estoque de Peças</h2>";
//Início da tabela para organizar os dados visualmente 
echo "<table border='1' cellpadding='10'
style='border-collapse: collapse;
largura: 100%; '>";
            echo "<tr style='background-color: #4cbb57;'>
                <th>ID</th>
                <th>Produto</th>
                <th>Tipo</th>
                <th>Qtd</th>
                <th>Preço Unitário.</th>
                <th>Total em Estoque</th>
            </tr>";
        //O foreach percorre cada 'sub-array' (cada produto)
        foreach ($estoque_informatica as $indice) {
            $valor_total_item = $indice ['qtd'] * $indice['preco'];
            echo "<tr>";
            echo "<td>" . $indice['id'] . "</td>";
            echo "<td>" . $indice['nome'] . "</td>";
            echo "<td>" . $indice['tipo'] . "</td>";
            echo "<td>" . $indice['qtd'] . "</td>";
            echo "<td>R$ " . number_format($indice['preco'], 2, ',', '.') . "</td>";
            echo "<td>R$ " . number_format($valor_total_item, 2, ',', '.') . "</td>";
            echo "</tr>";
        }
    echo "</table>";
?>