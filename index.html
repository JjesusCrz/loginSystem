<?php
// Conexão
require_once 'db_connect.php';
// Sessão
session_start();
// Botão enviar 
if (isset($_POST['btn-entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if (empty($login) || empty($senha)) {
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    } else {
        $sql = "SELECT * FROM usuarios WHERE login = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "s", $login);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = ? AND senha = ?";
            $stmt = mysqli_prepare($connect, $sql);
            mysqli_stmt_bind_param($stmt, "ss", $login, $senha);
            mysqli_stmt_execute($stmt);
            $resultado = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($resultado) == 1) {
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('location: home.php');
                exit(); // Adicionando a função exit() para encerrar a execução após o redirecionamento
            } else {
                $erros[] = "<li> Usuário e senha não conferem </li>";
                // Você pode adicionar mais mensagens de erro aqui, se necessário
            }
        } else {
            $erros[] = "<li> Usuário inexistente </li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        background-color: #0056b3;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #004080;
    }

    .error {
        color: #ff0000;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo '<div class="error">' . $erro . '</div>';
            }
        }
        ?>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div class="form-group">
                <button type="submit" name="btn-entrar">Entrar</button>
            </div>
        </form>
    </div>
</body>

</html>