<div class="casos index">
	<h2><?php echo __('Casos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idCaso'); ?></th>
			<th><?php echo $this->Paginator->sort('chaveAntiga'); ?></th>
			<th><?php echo $this->Paginator->sort('demanda'); ?></th>
			<th><?php echo $this->Paginator->sort('dataAbertura'); ?></th>
			<th><?php echo $this->Paginator->sort('dataFechamento'); ?></th>
			<th><?php echo $this->Paginator->sort('permissaoPesquisa'); ?></th>
			<th><?php echo $this->Paginator->sort('observacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($casos as $caso): ?>
	<tr>
		<td><?php echo h($caso['Caso']['idCaso']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['chaveAntiga']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['demanda']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['dataAbertura']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['dataFechamento']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['permissaoPesquisa']); ?>&nbsp;</td>
		<td><?php echo h($caso['Caso']['observacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $caso['Caso']['idCaso'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $caso['Caso']['idCaso'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $caso['Caso']['idCaso']), array(), __('Are you sure you want to delete # %s?', $caso['Caso']['idCaso'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Caso'), array('action' => 'add')); ?></li>
	</ul>
</div>
