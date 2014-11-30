<!-- File: /app/View/Posts/index.ctp 
(edit links added) -->

<h1>Blog posts</h1>
<?php echo $this->Html->link(
	'Adicionar Post',
	array('controller' => 'posts', 'action' => 'add')
); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Chave Nova</th>
		<th>Nome</th>
		<th>Ação</th>
		<th>Criado</th>
	</tr>
	
	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>

	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $this->Html->link($post['Post']['Chave Nova'],
			array('action' => 'view', $post['Post']['id'])); 
			?>
			</td>
		<td>
			<?php echo $this->Html->link($post['Post']['Nome'],
			array('action' => 'view', $post['Post']['id'])); 
			?>
		</td>
		<td>
			<?php
				echo $this->Form->postLink(
					'Delete',
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' => 'Tem Certeza?')
				);
			?>
		
			<?php
				echo $this->Html->link(
					'Edit',
					array('action' => 'edit', $post['Post']['id'])
				);
			?>
		</td>
		<td>
			<?php echo $post['Post']['created']; ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>