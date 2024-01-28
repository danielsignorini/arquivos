<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            height: 100vh;
        }

        .left-section {
            flex: 1;
            background: linear-gradient(to right, #808080, #ffffff); /* Gradiente cinza e branco */
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .right-section {
            flex: 1;
            background: url('background-image.jpg') center/cover no-repeat; /* Imagem de fundo */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Sobreposição escura para melhor legibilidade */
        }

        form {
            color: white;
            max-width: 300px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: black;
        }

        .change-screen-button {
            margin-top: 20px;
            cursor: pointer;
            text-decoration: underline;
            color: white;
            border: none;
            background: none;
            font-size: 14px;
        }
    </style>
    <title>Tela de Login</title>
</head>
<body>

    <div class="left-section">
        <form action="autenticacao.php" method="post">

        <?php
            // Exibe o alerta de erro, se existir
            session_start();
            if (isset($_SESSION["alerta"])) {
                echo '<div style="color: red;">' . $_SESSION["alerta"] . '</div>';
                unset($_SESSION["alerta"]);
            }
        ?>

            <h1>Login</h1>

            <label for="emailLogin">E-mail:</label>
            <input type="email" id="emailLogin" name="emailLogin" required>

            <label for="senhaLogin">Senha:</label>
            <input type="password" id="senhaLogin" name="senhaLogin" required>

            <button type="submit">Entrar</button>

            <button class="change-screen-button" onclick="window.location.href='cadastro.php'" type="button">Cadastre-se</button>
        </form>
    </div>

    <div class="right-section">
        <div class="overlay"></div>
    </div>

</body>
</html>
