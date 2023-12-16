
<link rel="stylesheet" href="<?=BASE_URL?>/assets/css/links.css">
<title>Listagem de Links Encurtados</title>

<div class="container">
	<h1>Meus Links Encurtados</h1>
	<table>
		<tr>
			<th>Link Original</th>
			<th>Link Encurtado</th>
			<th>Ações</th>
		</tr>
		
		<?php if ($shortenedLinks): ?>
			<?php foreach ($shortenedLinks as $link): ?>
				<tr>
					<td><a href="<?= $link['link'] ?>"><?= $link['link'] ?></a></td>
					<td>
						<a href="<?=BASE_URL?>/home/redirect/<?= $link['shortlink'] ?>"><?=BASE_URL?>/home/redirect/<?= $link['shortlink'] ?></a>
					</td>
					<td class="action-buttons">
						<button class="btn-edit"><a href="">Editar</a></button>
						<button class="btn-delete"><a href="<?=BASE_URL."/home/delete/".$link['id'].""?>">Apagar</a></button>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</table>

</div>
