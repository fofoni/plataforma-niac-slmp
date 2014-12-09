<!-- File: /app/View/Funcionarios/view_pdf.ctp -->

<h2><?php echo __('Funcionario'); ?></h2>
	
<?php echo __('Id = '); 
	  echo h($funcionario['Funcionario']['id']);
	  echo ('<br>');
	  echo __('Nome = ');
	  echo h($funcionario['Funcionario']['nome']);
	  echo ('<br>');
	  echo __('DataNascimento = ');
	  echo h($funcionario['Funcionario']['dataNascimento']);
	  echo ('<br>');
	  echo __('Cpf = ');
	  echo h($funcionario['Funcionario']['cpf']);
	  echo ('<br>');
	  echo __('Rg = ');
	  echo h($funcionario['Funcionario']['rg']);
	  echo ('<br>');
	  echo __('Email = ');
	  echo h($funcionario['Funcionario']['email']);
	  echo ('<br>');
	  echo __('Telefone = ');
	  echo h($funcionario['Funcionario']['telefone']);
	  echo ('<br>');
	  echo __('Username = '); 
	  echo h($funcionario['Funcionario']['username']);
	  echo ('<br>');
	  echo __('Supervisor = ');
	  echo h($funcionario['Funcionario']['supervisor']);
	  echo ('<br>');
	  echo __('Ativo = ');
	  echo h($funcionario['Funcionario']['ativo']);
	  echo ('<br>');
	  echo __('Area = ');
	  echo h($funcionario['Funcionario']['area']);
	  echo ('<br>');
	  echo __('DataEntrada = ');
	  echo h($funcionario['Funcionario']['dataEntrada']);
	  echo ('<br>');
	  echo __('DataSaida = ');
	  echo h($funcionario['Funcionario']['dataSaida']); 
?>