<div class="funcionarios form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Funcionario'); ?>
    <fieldset>
        <legend>
            <?php echo __('Digite o nome de usuário e senha.'); ?>
        </legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar')); ?>
</div>
