
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
		<?php
		// Simulação de links encurtados (substitua com sua lógica de banco de dados)
		$shortenedLinks = [
			['shortened' => 'abc123', 'original' => 'https://www.exemplo.com/pagina1'],
			['shortened' => 'def456', 'original' => 'https://www.exemplo.com/pagina2'],
			['shortened' => 'ghi789', 'original' => 'https://www.exemplo.com/pagina3'],
			// Adicione mais links conforme necessário
		];

		// Exibir os links da página atual com opções de ação
		foreach ($shortenedLinks as $link) {
			echo '<tr>';
			echo '<td><a href="'.$link['original'].'" target="_blank">'.$link['original'].'</a></td>';
			echo '<td><a href="'.BASE_URL.'/'.$link['shortened'].'">'.BASE_URL.'/'.$link['shortened'].'</a></td>';
			echo '<td class="action-buttons">';
			echo '<button class="btn-edit">Editar</button>';
			echo '<button class="btn-delete">Apagar</button>';
			echo '</td>';
			echo '</tr>';
		}
		?>
	</table>
</div>