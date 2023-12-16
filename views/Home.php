<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/home.css">
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

	<div id="shortenedUrl">
		
	</div>

	<?php if(!isset($_SESSION['shortify']) && empty($_SESSION['shortify'])): ?>
			<div class="auth-links">
			<a href="<?=BASE_URL?>/users/login">Login</a>
			<span>ou</span>
			<a href="<?=BASE_URL?>/users/register">Cadastre-se</a>
		</div>
	<?php endif ?>
</div>
