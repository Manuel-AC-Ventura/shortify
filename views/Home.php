<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/home.css">
<title>Encurtador de Links</title>

<div class="container">
    <h1>Encurte seu link</h1>
    <form action="" method="POST">
        <input type="url" id="urlInput" name="url" placeholder="Cole seu link aqui" required>

        <?php if (isset($error) && !empty($error)) : ?>
            <div class="warning"><?= $error ?></div>
        <?php endif; ?>

        <button id="shortenBtn">Encurtar</button>
    </form>

    <?php if (isset($shortURL) && !empty($shortURL)) : ?>
        <div id="shortenedUrl">
            <p class="blueText copyText"><?= $shortURL ?></p>
        </div>
    <?php endif; ?>

    <?php if (!$isLogged) : ?>
        <div class="auth-links">
            <a href="<?= BASE_URL ?>/users/login">Login</a>
            <span>ou</span>
            <a href="<?= BASE_URL ?>/users/register">Cadastre-se</a>
        </div>
    <?php endif ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const copyText = document.querySelector('.copyText');

        copyText.addEventListener('click', function () {
            const textToCopy = this.textContent;
            const tempTextArea = document.createElement('textarea');

            tempTextArea.value = textToCopy;
            document.body.appendChild(tempTextArea);

            tempTextArea.select();
            document.execCommand('copy');

            document.body.removeChild(tempTextArea);

            const tooltip = document.createElement('div');
            tooltip.classList.add('tooltip');
            tooltip.textContent = 'Texto copiado para a área de transferência';
            document.body.appendChild(tooltip);

            tooltip.style.opacity = 1;

            setTimeout(function () {
                tooltip.style.opacity = 0;
                setTimeout(function () {
                    document.body.removeChild(tooltip);
                }, 300);
            }, 5000);
        });
    });
</script>