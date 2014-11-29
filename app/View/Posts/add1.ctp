<!-- File: /app/View/Posts/add.ctp -->

<?php

echo $this->extend('/Common/view');
?>

<?php $this->start('sidebarcase'); ?>

<div class="sidebarcase1">
Nome<br>
<?php echo $this->Html->link(
	'Anotações',
	array('controller' => 'posts', 'action' => 'add2')
); ?>
</div>
<?php $this->end(); ?>

<h1>Adicionar Caso</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('Nome');
echo $this->Form->end('Save Post');
?>



