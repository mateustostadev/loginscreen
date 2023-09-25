<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Erro de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('lflogo.png'); /* Caminho para a imagem de fundo */
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o corpo */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Evita a repetição da imagem */
        }

        .error-box {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .error-box h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="error-box">
        <h2>Erro de Login</h2>
        <p class="error-message">As credenciais de login estão incorretas. Por favor, tente novamente.</p>
        <p class="error-message"><a href="login.html">Voltar para a página de login</a></p>
    </div>
</body>
</html>
