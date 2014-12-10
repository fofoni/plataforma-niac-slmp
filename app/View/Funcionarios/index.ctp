<div class="funcionarios index">
	<h2><?php echo __('Funcionários'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisor'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('dataEntrada'); ?></th>
			<th><?php echo $this->Paginator->sort('dataSaida'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['dataNascimento']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['rg']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['email']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['username']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['supervisor']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['ativo']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['area']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['dataEntrada']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['dataSaida']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $funcionario['Funcionario']['id']), array(), __('Tem certeza que quer deletar o funcionário # %s?', $funcionario['Funcionario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Funcionário'), array('action' => 'add')); ?></li>
	</ul>
</div>
