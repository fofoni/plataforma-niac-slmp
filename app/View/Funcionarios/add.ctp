<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
    <fieldset>
        <legend><?php echo __('Adicionar funcionário'); ?></legend>
        <?php
            echo $this->Form->input('pessoas.nome');
            echo $this->Form->input('pessoas.dataNascimento');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('supervisor');
            echo $this->Form->input('ativo');
            echo $this->Form->input('area');
            // não tem dataEntrada nem dataSaída; são definidas automaticamente.
            // uma alternativa seria botar um input pro dataEntrada, com a data
            // atual sendo o valor default, pra que eles possam especificar
            echo $this->Form->input('role', array(
                'options' => array('admin' => 'Admin', 'author' => 'Author')
            ));
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Criar!')); ?>
</div>
