<!-- File: /app/View/Posts/edit.ctp -->

<?php

?>

<h1>Editar Caso</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('created');
echo $this->Form->input('Chave Nova');
echo $this->Form->input('Nome');
echo $this->Form->input('Nome Social');
echo 'Data de Nascimento';

echo $this->Form->datetime('Data de Nascimento', 'DMY', '12');

echo $this->Form->input('Genero', array(
        'type' => 'select',
        'options' => array(
            'key1' => 'Masculino',
            'key2' => 'Feminino',
			'key3' => 'Indefinido'
        )));
echo $this->Form->input('Etnia', array(
        'type' => 'select',
        'options' => array(
            'key1' => 'Branco',
            'key2' => 'Indio',
			'key3' => 'Negro',
			'key4' => 'Pardo'
        )));
echo $this->Form->input('CPF');
echo $this->Form->input('RG');
echo $this->Form->input('UF De Nascimento', array(
        'type' => 'select',
        'options' => array(
            'key1' => 'AC', 'key2' => 'AL', 'key3' => 'AP',
			'key4' => 'AM', 'key5' => 'BA', 'key6' => 'CE',
			'key7' => 'DF', 'key8' => 'ES', 'key9' => 'GO',
			'key10' => 'MA', 'key11' => 'MT', 'key12' => 'MS',
			'key13' => 'MG', 'key14' => 'PA', 'key15' => 'PB',
			'key16' => 'PR', 'key17' => 'PE', 'key18' => 'PI',
			'key19' => 'RJ', 'key20' => 'RN', 'key21' => 'RS',
			'key22' => 'RO', 'key23' => 'RR', 'key24' => 'SC',
			'key25' => 'SP', 'key26' => 'SE', 'key27' => 'TO'
        )));

echo $this->Form->input('UF Atual', array(
        'type' => 'select',
        'options' => array(
            'key1' => 'AC', 'key2' => 'AL', 'key3' => 'AP',
			'key4' => 'AM', 'key5' => 'BA', 'key6' => 'CE',
			'key7' => 'DF', 'key8' => 'ES', 'key9' => 'GO',
			'key10' => 'MA', 'key11' => 'MT', 'key12' => 'MS',
			'key13' => 'MG', 'key14' => 'PA', 'key15' => 'PB',
			'key16' => 'PR', 'key17' => 'PE', 'key18' => 'PI',
			'key19' => 'RJ', 'key20' => 'RN', 'key21' => 'RS',
			'key22' => 'RO', 'key23' => 'RR', 'key24' => 'SC',
			'key25' => 'SP', 'key26' => 'SE', 'key27' => 'TO'
        )));
		
echo $this->Form->input('Escolaridade', array(
        'type' => 'select',
        'options' => array(
            'key1' => 'Sem Ensino',
			'key2' => 'Ensino Fundamental Incompleto',
			'key3' => 'Ensino Fundamental Completo',
			'key4' => 'Ensino Médio Incompleto',
			'key5' => 'Ensino Médio Completo',
			'key6' => 'Bacharelado Incompleto',
			'key7' => 'Bacharelado Completo',
			'key8' => 'Mestrado Incompleto',
			'key9' => 'Mestrado Completo',
			'key10' => 'Doutorado Incompleto',
			'key11' => 'Doutorado Completo'
        )));

echo 'Rede De Ensino Mais Cursada';
echo $this->Form->radio('Rede De Ensino Mais Cursada',
						array('Publica' => 'Publica',
							  'Privada' => 'Privada'),
						array('legend' => false,
							  'value' => 'Publica'));
							  
echo $this->Form->input('Anotacoes', array('rows' => '10'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>