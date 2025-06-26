# CRUD com PHP e MySQL

## Criar

Parar inserir um recurso no banco dados usando PHP, precisamos coletar os dados do usuário. Uma forma eficiente é usar um formulário HTML, usando o método POST para enviar os dados e o atributo `action` para especificar o script PHP que processará os dados.

Exemplo de formulário HTML para cadastrar clientes:

```html
<form method="POST" action="cadastrar_cliente.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco">

    <label for="data_nasc">Data de Nascimento:</label>
    <input type="date" id="data_nasc" name="data_nasc">

    <button type="submit">Cadastrar</button>
</form>
```
Após o envio do formulário, o script `cadastrar_cliente.php` processará os dados. 

```php
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
    } else {
        echo "Erro: " . mysqli_error($conn);
    }

    // Fechar conexão
    mysqli_close($conn);
}

```
