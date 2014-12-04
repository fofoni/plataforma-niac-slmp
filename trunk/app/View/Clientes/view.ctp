<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>

		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nome']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Nome Social'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nomeSocial']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Data de Nascimento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['dataNascimento']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Chave Antiga'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['chaveAntiga']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefone']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cor']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Gênero'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['genero']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['estadoCivil']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Data de Cadastro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['dataCadastro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
