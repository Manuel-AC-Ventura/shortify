<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encurtador de Links</title>
</head>
<body>
	<div class="header">
		<?php if(!$isLogged): ?>
			<a href="<?=BASE_URL?>/">Home</a>
			<a href="<?=BASE_URL?>/home/links">Ver Links</a>
			<a href="<?=BASE_URL?>/users/edit">Editar Perfil</a>
			<a href="<?=BASE_URL?>/users/logout">Logout</a>
		<?php endif ?>
    </div>
        <?=$this->loadViewInTemplate($viewName, $viewData);?>
	</div>
</body>
</html>