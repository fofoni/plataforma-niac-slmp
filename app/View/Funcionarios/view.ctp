<div class="funcionarios view">
<h2><?php echo __('Funcionário'); ?></h2>
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
		<dt><?php echo __('Data de Nascimento'); ?></dt>
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
		<dt><?php echo __('Login'); ?></dt>
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
		<dt><?php echo __('Área de Trabalho'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Entrada'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataEntrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Saída'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataSaida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Funcionário'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Funcionário'), array('action' => 'delete', $funcionario['Funcionario']['id']), array(), __('Tem certeza que quer apagar o funcionário # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funcionários'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novos Funcionários'), array('action' => 'add')); ?> </li>
		<br>
		<li><?php echo $this->Html->link(__('Criar PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $funcionario['Funcionario']['id'])); ?></p>
	</ul>
</div>
