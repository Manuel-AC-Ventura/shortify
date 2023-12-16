<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/sign.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Encurtador de Links</title>
</head>
<body>
    <div class="login-container">
        <h2>Login - Encurtador de Links</h2>
        <form action="" method="post" id="loginForm">
            <input type="text" name="username" placeholder="Nome de usuário" min="6" required>
            <br>
            <input type="password" name="password" placeholder="Senha" min="8" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
        <?php if (isset($error) && !empty($error)) : ?>
            <div class="warning"><?= $error ?></div>
        <?php endif; ?>
        <p>Ainda não tem uma conta? <a href="<?=BASE_URL?>/users/register">Cadastre-se</a></p>
    </div>
</body>
</html>
