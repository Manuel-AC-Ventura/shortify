<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/sign.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Encurtador de Links</title>
</head>
<body>
    <div class="signup-container">
        <h2>Cadastro - Encurtador de Links</h2>
        <form action="" method="post" id="signupForm">
            <input type="text" name="username" placeholder="Nome de usuário" min="6" required>
            <br>
            <input type="password" name="password" placeholder="Senha" min="8" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
        <?php if (isset($error) && !empty($error)) : ?>
            <div class="warning"><?= $error ?></div>
        <?php endif; ?>
        <p>Já tem uma conta? <a href="<?=BASE_URL?>/users/login">Faça login</a></p>
    </div>
</body>
</html>
