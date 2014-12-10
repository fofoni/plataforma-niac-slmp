<div class="casos index">
	<h2><?php echo __('Casos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
	<!-- NÃO alterar valores dentro dos sort(),
		 pois alterá-los quebra o sort da tabela por aquilo que foi mudado. -->
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('chaveAntiga'); ?></th>
			<th><?php echo $this->Paginator->sort('demanda'); ?></th>
			<th><?php echo $this->Paginator->sort('dataAbertura'); ?></th>
			<th><?php echo $this->Paginator->sort('dataFechamento'); ?></th>
			<th><?php echo $this->Paginator->sort('permissaoPesquisa'); ?></th>
			<th><?php echo $this->Paginator->sort('observacao'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($casos as $caso): ?>
	<tr>
		<td><?php echo h($caso['Caso']['id']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['chaveAntiga']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['demanda']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['dataAbertura']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['dataFechamento']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['permissaoPesquisa']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['observacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $caso['Caso']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caso['Caso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $caso['Caso']['id']), array(), __('Tem certeza que quer deletar o caso # %s?', $caso['Caso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Caso'), array('action' => 'add')); ?></li>
	</ul>
</div>
