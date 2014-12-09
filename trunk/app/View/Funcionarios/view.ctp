<div class="funcionarios view">
<h2><?php echo __('Funcionario'); ?></h2>
<h2>Testando 1, 2, 3</h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataNascimento'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataNascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supervisor'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['supervisor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['ativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataEntrada'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataEntrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataSaida'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataSaida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionario'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionario'), array('action' => 'delete', $funcionario['Funcionario']['id']), array(), __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
