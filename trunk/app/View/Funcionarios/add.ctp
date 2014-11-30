<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
    <fieldset>
        <legend><?php echo __('Adicionar funcionário'); ?></legend>
        <?php
            echo $this->Form->input('Pessoa.nome');
            echo $this->Form->input('Pessoa.dataNascimento', array(
                'label' => 'Data de nascimento'
            ));
            echo $this->Form->input('Pessoa.email', array(
                'label' => 'E-mail',
                'type' => 'email'
            ));
            echo $this->Form->input('Pessoa.telefone');
            echo $this->Form->input('Pessoa.observacao', array(
                'label' => 'Observações'
            ));
            echo $this->Form->input('username', array(
                'label' => 'Nome de usuário'
            ));
            echo $this->Form->input('password', array(
                'label' => 'Senha'
            ));
            echo $this->Form->input('supervisor');
            echo $this->Form->input('area', array(
                'options' => array(
                    'Direito', 'Psicologia', 'Assistência Social')
            ));
            // não tem dataEntrada nem dataSaída; são definidas automaticamente.
            // uma alternativa seria botar um input pro dataEntrada, com a data
            // atual sendo o valor default, pra que eles possam especificar
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Criar!')); ?>
</div>
