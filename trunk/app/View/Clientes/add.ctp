<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Cliente'); ?></legend>
	<?php
            	echo $this->Form->input('nome', array(
			'label' => 'Nome'
		));
		echo $this->Form->input('nomeSocial', array(
                	'label' => 'Nome Social'
            	));
            	echo $this->Form->input('dataNascimento', array(
                	'label' => 'Data de nascimento'
            	));
            	echo $this->Form->input('cpf', array(
                	'label' => 'CPF'
            	));
            	echo $this->Form->input('rg', array(
                	'label' => 'RG'
            	));
		echo $this->Form->input('chaveAntiga', array(
                	'label' => 'Chave Antiga'
            	));
            	echo $this->Form->input('email', array(
                	'label' => 'E-mail',
                	'type' => 'email'
            	));
            	echo $this->Form->input('telefone', array(
                	'label' => 'Telefone'
            	));
		echo $this->Form->input('genero', array(
                	'label' => 'Gênero'
            	));
		echo $this->Form->input('cor', array(
                	'label' => 'Cor'
            	));
		echo $this->Form->input('estadoCivil', array(
                	'label' => 'Estado Civil',
			'options' => array(
				'', 'Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Separado(a)', 'Viúvo(a)')
            	));
		echo $this->Form->input('dataCadastro', array(
                	'label' => 'Data de Cadastro'
            	));
		echo $this->Form->input('observacoes', array(
                	'label' => 'Observações'
            	));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Adicionar Cliente')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
