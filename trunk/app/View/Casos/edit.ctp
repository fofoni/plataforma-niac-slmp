<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Caso'); ?></legend>
	<?php
		echo $this->Form->input('idCaso');
		echo $this->Form->input('chaveAntiga');
		echo $this->Form->input('demanda');
		echo $this->Form->input('dataAbertura');
		echo $this->Form->input('dataFechamento');
		echo $this->Form->input('permissaoPesquisa');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Caso.idCaso')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Caso.idCaso'))); ?></li>
		<li><?php echo $this->Html->link(__('List Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>
