<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Pessoa']['idPessoa'], array('controller' => 'pessoas', 'action' => 'view', $cliente['Pessoa']['idPessoa'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChaveAntiga'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['chaveAntiga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NomeSocial'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nomeSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EstadoCivil'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['estadoCivil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataCadastro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['dataCadastro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['pessoas_idPessoa'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['pessoas_idPessoa']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['pessoas_idPessoa'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
