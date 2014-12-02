<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('pessoas_idPessoa');
		echo $this->Form->input('chaveAntiga');
		echo $this->Form->input('cor');
		echo $this->Form->input('genero');
		echo $this->Form->input('nomeSocial');
		echo $this->Form->input('estadoCivil');
		echo $this->Form->input('dataCadastro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.pessoas_idPessoa')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.pessoas_idPessoa'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
