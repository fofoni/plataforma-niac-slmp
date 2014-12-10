<div class="casos view">
<h2><?php echo __('Caso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chave Antiga'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['chaveAntiga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demanda'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['demanda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Abertura'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataAbertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Fechamento'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataFechamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permissao para Pesquisa'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['permissaoPesquisa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Caso'), array('action' => 'edit', $caso['Caso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Caso'), array('action' => 'delete', $caso['Caso']['id']), array(), __('Tem certeza que quer deletar o caso # %s?', $caso['Caso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Caso'), array('action' => 'add')); ?> </li>
		<br>
		<li><?php echo $this->Html->link(__('Criar PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $caso['Caso']['id'])); ?></p>
	</ul>
</div>
