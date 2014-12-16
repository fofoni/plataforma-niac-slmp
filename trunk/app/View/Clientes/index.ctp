<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('dataNascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('chaveAntiga'); ?></th>
			<th><?php echo $this->Paginator->sort('cor'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('nomeSocial'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoCivil'); ?></th>
			<th><?php echo $this->Paginator->sort('dataCadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['dataNascimento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['rg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['chaveAntiga']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cor']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['genero']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nomeSocial']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['estadoCivil']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['dataCadastro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['observacoes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Tem certeza que quer deletar o funcionário # %s?', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} de um total de {:count} entradas, começando na entrada {:start} e terminando na entrada {:end}.')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Busca'), array('action' => 'search')); ?></li>
	</ul>
</div>
