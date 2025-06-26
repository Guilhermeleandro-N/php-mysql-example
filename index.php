<?php

require_once('conexao.php');

// Lista os clientes existesntes
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexao, $sql);

if (!$result) die("Erro na consulta: " . mysqli_error($conexao));

// Exibe os clientes em tabela HTML
$title = "Lista de Clientes";
$content = "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Data de Nascimento</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $content .= "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['email']}</td>
            <td>{$row['endreco']}</td>
            <td>{$row['data_nasc']}</td>
          </tr>";
}

$content .= "</table>";

// Carrega o template HTML
require_once('template.php');