<!-- File: /app/View/Funcionarios/index.ctp 
(edit links added) -->

<h1>Acesso a tabelas</h1>
<?php echo $this->Html->link(
	'Casos',
	array('controller' => 'casos', 'action' => 'index')
); ?>
<br>
<?php echo $this->Html->link(
	'Clientes',
	array('controller' => 'clientes', 'action' => 'index')
); ?>
<br>
<?php echo $this->Html->link(
	'Funcionarios',
	array('controller' => 'funcionarios', 'action' => 'index')
); ?>
<br>
<h1>Turnos das Pessoas</h1>
<br>
<br>
<?php echo $this->Html->link('Logout',
					array('controller' => 'funcionarios',
						  'action' => 'logout')); ?>