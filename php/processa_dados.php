
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (pode ser incluído ou conectado diretamente)
    include 'connect.php';

    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Query para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>
