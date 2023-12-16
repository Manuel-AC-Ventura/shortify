<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/editUser.css">
<title>Editar Informações do Usuário</title>

<div class="container">
	<h1>Editar Informações do Usuário</h1>
	<form action="" method="POST">
		<label for="username">Nome de Usuário:</label>
		<input type="text" id="username" name="username" placeholder="Nome do Usuário Atual" min="6">
		
		<label for="password">Nova Senha:</label>
		<input type="password" id="password" name="password" placeholder="Digite a nova senha" min="8">

		<label for="confirm_password">Confirmar Nova Senha:</label>
		<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a nova senha" min="8">

		<?php if (isset($error) && !empty($error)) : ?>
			<div class="warning"><?= $error ?></div>
		<?php endif; ?>

		<input type="submit" value="Salvar Alterações">
	</form>