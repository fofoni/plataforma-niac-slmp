<div class="casos form">
<?php echo $this->Form->create('Caso'); ?>
	<fieldset>
		<legend><?php echo __('Editar Caso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('chaveAntiga');
		echo $this->Form->input('demanda');
		echo $this->Form->input('dataAbertura');
		echo $this->Form->input('dataFechamento');
		echo $this->Form->input('permissaoPesquisa');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Executar Mudanças')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar Caso'), array('action' => 'delete', $this->Form->value('Caso.id')), array(), __('Tem certeza que quer deletar o caso # %s?', $this->Form->value('Caso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?></li>
	</ul>
</div>
