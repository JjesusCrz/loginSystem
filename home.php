<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();
if(!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit();
}

//DADOS
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "i", $id); // "i" é usado para indicar que o ID é um número inteiro
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$dados = mysqli_fetch_array($resultado);


//$sql = "SELECT * FROM usuarios WHERE id = '$id";
//$resultado = mysqli_query($connect, $sql);
//$dados = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Olá, <?php echo $dados['nome']; ?></h1>
    </header>
    <main>
        <section class="profile">
            <div class="profile-image">
                <img src="user.jpg" alt="Imagem do usuário">
            </div>
            <div class="profile-info">
                <h2>Nome do Usuário</h2>
                <p>Email: exemplo@email.com</p>
                <p>Telefone: (00) 12345-6789</p>
            </div>
        </section>
        <section>

            <a href="logout.php">
                <button type="button" class="botao">logout</button>
            </a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Perfil do Usuário</p>
    </footer>
</body>

</html>