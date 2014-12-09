<!-- Incompleta! -->

<div class="clientes form">
<?php echo $this->Form->create('Cliente',array('action'=>'search'));?>
    <fieldset>
        <legend><?php echo 'Busca de Clientes: ';?></legend>
    <?php
        echo $this->Form->input('buscaId', array(
		'label'=>'Critério de Busca:',
		'options'=> array('Chave Antiga', 'Chave Nova', 'Nome', 'CPF')
	));
        echo $this->Form->input('buscaTexto', array('label'=>''));

        echo $this->Form->submit('Buscar');
    ?>
    </fieldset>

	<h2><?php echo __('Resultados:'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo 'Chave Nova'; ?></th>
			<th><?php echo 'Nome'; ?></th>
			<th><?php echo 'Nome Social'; ?></th>
			<th><?php echo 'Data de Nascimento'; ?></th>
			<th><?php echo 'Chave Antiga'; ?></th>
			<th><?php echo 'CPF'; ?></th>
			<th><?php echo 'Data de Cadastro'; ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr> 
	</thead>
	<tbody>
	<?php foreach ($this->data as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nomeSocial']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['dataNascimento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['chaveAntiga']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['dataCadastro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>
