<div class="casos view">
<h2><?php echo __('Caso'); ?></h2>
	<dl>
		<dt><?php echo __('id'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ChaveAntiga'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['chaveAntiga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demanda'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['demanda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataAbertura'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataAbertura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataFechamento'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['dataFechamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PermissaoPesquisa'); ?></dt>
		<dd>
			<?php echo h($caso['Caso']['permissaoPesquisa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
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
		<li><?php echo $this->Form->postLink(__('Deletar Caso'), array('action' => 'delete', $caso['Caso']['id']), array(), __('Are you sure you want to delete # %s?', $caso['Caso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Casos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Caso'), array('action' => 'add')); ?> </li>
		<br>
		<li><?php echo $this->Html->link(__('Criar PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $caso['Caso']['id'])); ?></p>
	</ul>
</div>
