<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Caso'); ?></legend>
	<?php
		echo $this->Form->input('chaveAntiga');
		echo $this->Form->input('demanda');
		echo $this->Form->input('dataAbertura');
		echo $this->Form->input('dataFechamento');
		echo $this->Form->input('permissaoPesquisa');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Fazer Adição De Caso')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>
