<!-- File: /app/View/Posts/index.ctp 
(edit links added) -->

<h1>Blog posts</h1>
<?php echo $this->Html->link(
	'Adicionar Post',
	array('controller' => 'posts', 'action' => 'add1')
); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Chave Antiga</th>
		<th>Demanda</th>
		<th>Ação</th>
		<th>Data de Abertura</th>
		<th>Data de Fechamento</th>
	</tr>
	
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>

	<tr>
		<td><?php echo $post['casos']['idCaso']; ?></td>
		<td><?php echo $this->Html->link($post['casos']['chaveAntiga'],
			array('action' => 'view', $post['casos']['idCaso'])); 
			?>
			</td>
		<td>
			<?php echo $this->Html->link($post['casos']['demanda'],
			array('action' => 'view', $post['casos']['idCaso'])); 
			?>
		</td>
		<td>
			<?php
				echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $post['casos']['idCaso']),
					array('confirm' => 'Tem Certeza?')
				);
			?>
		
			<?php
				echo $this->Html->link(
					'Edit',
					array('action' => 'edit', $post['casos']['idCaso'])
				);
			?>
		</td>
		<td>
			<?php echo $post['casos']['dataAbertura']; ?>
		</td>
		<td>
			<?php echo $post['casos']['dataFechamento']; ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>