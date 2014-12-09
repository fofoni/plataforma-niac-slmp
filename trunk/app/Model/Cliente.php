<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Digite o nome.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dataNascimento' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cpf' => array(
		    'rule' => array('validaCPF'),
		    'message' => 'O CPF deve ser válido, ou então em branco.',
		    'allowEmpty' => true,
		    'required' => false,
		    'on' => 'null'
		),
		'rg' => array(
			'rule' => array('minLength', 9, 'maxLength', 9),
			'message' => 'O RG deve ter 9 números.',
			'allowEmpty' => true,
			'required' => false,
			//'last' => false, // Stop validation after this rule
			'on' => 'null'
		),
   );

    public function beforeSave($options = array()) {
        $this->data[$this->alias]['dataCadastro'] = Date('c');
        return true;
    }

    // retirado de http://www.geradorcpf.com/script-validar-cpf-php.htm
    public function validaCPF($cpf_array) {

        $cpf = $cpf_array['cpf'];

        if (!isset($cpf) || empty($cpf) || is_null($cpf) || trim($cpf) == '') {
            return true;
        }
     
        // Elimina possivel mascara
        $cpf = ereg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        // Verifica se o numero de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
	        return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        else if (
            $cpf == '00000000000' ||
	        $cpf == '11111111111' ||
	        $cpf == '22222222222' ||
	        $cpf == '33333333333' ||
	        $cpf == '44444444444' ||
	        $cpf == '55555555555' ||
	        $cpf == '66666666666' ||
	        $cpf == '77777777777' ||
	        $cpf == '88888888888' ||
	        $cpf == '99999999999'
        ) {
	        return false;
        }
        // Calcula os digitos verificadores para verificar se o
        // CPF é válido
        else {
	        for ($t = 9; $t < 11; $t++) {
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	        return true;
        }
    }

}
