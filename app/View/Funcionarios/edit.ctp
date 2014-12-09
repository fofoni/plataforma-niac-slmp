<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('dataNascimento');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('supervisor');
		echo $this->Form->input('ativo');
		echo $this->Form->input('area');
		echo $this->Form->input('dataEntrada');
		echo $this->Form->input('dataSaida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Funcionario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Funcionario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
