<?php
// atualizar_cliente.php
require_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $data_nasc = $_POST['data_nasc'];

    $sql = "UPDATE clientes SET nome='$nome', email='$email', endereco='$endereco', data_nasc='$data_nasc' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente atualizado com sucesso!";
        echo '<p><a href="cadastro.html"><button>Cadastrar clientes</button></a></p>
    <p><a href="index.php"><button>Visualizar clientes</button></a></p>
    <p><a href="editar.html"><button>Editar clientes</button></a></p>
    <p><a href="excluir.html"><button>Excluir clientes</button></a></p>';
    } else {
        echo "Erro: " . mysqli_error($conn);
        echo '<p><a href="cadastro.html"><button>Cadastrar clientes</button></a></p>
    <p><a href="index.php"><button>Visualizar clientes</button></a></p>
    <p><a href="editar.html"><button>Editar clientes</button></a></p>
    <p><a href="excluir.html"><button>Excluir clientes</button></a></p>';
    }

    // Fechar conexão
    mysqli_close($conn);
}