<div class="casos view">
<h2><?php echo __('Caso'); ?></h2>
<h2>Testando 1, 2, 3</h2>
	<dl>
		<dt><?php echo __('IdCaso'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['idCaso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChaveAntiga'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['chaveAntiga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demanda'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['demanda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataAbertura'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataAbertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataFechamento'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataFechamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PermissaoPesquisa'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['permissaoPesquisa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caso'), array('action' => 'edit', $caso['Caso']['idCaso'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Caso'), array('action' => 'delete', $caso['Caso']['idCaso']), array(), __('Are you sure you want to delete # %s?', $caso['Caso']['idCaso'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Casos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
