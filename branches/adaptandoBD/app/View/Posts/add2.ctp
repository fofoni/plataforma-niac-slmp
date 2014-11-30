<!-- File: /app/View/Posts/add.ctp -->

<?php

echo $this->extend('/Common/view');
?>

<?php $this->start('sidebarcase'); ?>

<div class="sidebarcase1">
<?php echo $this->Html->link(
	'Nome',
	array('controller' => 'posts', 'action' => 'add1')
); ?><br>
Anotações
</div>
<?php $this->end(); ?>

<h1>Adicionar Caso</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('Anotacoes', array('rows' => '3', 'length' => '600 px'));
echo $this->Form->end('Save Post');
?>



