<!-- Incompleta! -->

<div class="clientes form">
<?php echo $this->Form->create('Cliente',array('action'=>'search'));?>
    <fieldset>
        <legend><?php __('Busca de Clientes');?></legend>
    <?php
        echo $this->Form->input('chaveAntiga', array('label'=>'Chave'));
        echo $this->Form->input('nomeSocial', array('label'=>'Nome'));
        echo $this->Form->input('cpf', array('label'=>'CPF'));

        echo $this->Form->submit('Buscar');
    ?>
    </fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
