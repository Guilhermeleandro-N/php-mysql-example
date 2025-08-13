<?php
// cadastrar_cliente.php
require_once('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obter dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $data_nasc = $_POST['data_nasc'];


    $sql = "INSERT INTO clientes (nome, email, endereco, data_nasc) VALUES ('$nome', '$email', '$endereco', '$data_nasc')";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente cadastrado com sucesso!";
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