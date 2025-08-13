<?php
// deletar_cliente.php
require_once('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cliente deletado com sucesso!";
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