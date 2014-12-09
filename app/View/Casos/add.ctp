<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Add Caso'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>
