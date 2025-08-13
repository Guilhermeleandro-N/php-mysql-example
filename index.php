<?php

require_once('conexao.php');

// Lista os clientes existesntes
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);

if (!$result) die("Erro na consulta: " . mysqli_error($conn));

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
            <td>{$row['endereco']}</td>
            <td>{$row['data_nasc']}</td>
          </tr>";
}

$content .= "</table>";


// Carrega o template HTML
require_once('template.php');
echo '<p><a href="cadastro.html"><button>Cadastrar clientes</button></a></p>
    <p><a href="index.php"><button>Visualizar clientes</button></a></p>
    <p><a href="editar.html"><button>Editar clientes</button></a></p>
    <p><a href="excluir.html"><button>Excluir clientes</button></a></p>';
// Fecha a conexão com o banco de dados
mysqli_close($conn);