<!-- File: /app/View/Casos/view_pdf.ctp -->

<h2><?php echo __('Caso'); ?></h2>

<h3><?php echo __('Id = ');
          echo h($caso['Caso']['id']);
		  echo __('<br>');
		  echo __('ChaveAntiga = ');
		  echo h($caso['Caso']['chaveAntiga']);
		  echo __('<br>');
		  echo __('Demanda = ');
		  echo h($caso['Caso']['demanda']);
		  echo __('<br>');
		  echo __('DataAbertura = ');
		  echo h($caso['Caso']['dataAbertura']);
		  echo __('<br>');
		  echo __('DataFechamento = ');
		  echo h($caso['Caso']['dataFechamento']);
		  echo __('<br>');
		  echo __('PermissaoPesquisa = ');
		  echo h($caso['Caso']['permissaoPesquisa']);
		  echo __('<br>');
		  echo __('Observacao = ');
		  echo h($caso['Caso']['observacao']);
		  echo __('<br>');
?></h3>
	