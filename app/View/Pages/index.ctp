<!-- File: /app/View/Posts/index.ctp 
(edit links added) -->

<h1>Acesso a tabelas</h1>
<?php echo $this->Html->link(
	'Casos',
	array('controller' => 'casos', 'action' => 'index')
); ?>
<h1>Acompanhamentos</h1>
<h1>Clientes</h1>
<h1>Escolaridades</h1>
<h1>Famílias</h1>
<h1>Moradias</h1>
<h1>Pessoas</h1>
<h1>Rendas</h1>
<h1>Saúdes</h1>
<h1>Turnos das Pessoas</h1>
<br>
<?php echo $this->Html->link('Logout',
					array('controller' => 'funcionarios',
						  'action' => 'logout')); ?>
</table>