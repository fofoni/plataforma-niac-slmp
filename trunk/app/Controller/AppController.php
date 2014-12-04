<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses(
    'BlowfishPasswordHasher', 'Controller/Component/Auth', 'Controller'
);

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

public $components = array(
    'DebugKit.Toolbar',
    'Session',
    'Auth' => array(
             'authError' => 'Permissão negada.',
             'loginAction' => '/funcionarios/login',
             'loginRedirect' => array( // pra onde ir assim que logar?
                 'controller' => 'pages', // TODO: substituir por `casos'
                 'action' => 'index'
             ),
             'logoutRedirect' => array( // pra onde ir assim que deslogar?
                 'controller' => 'funcionarios',
                 'action' => 'deslogado'
             ),
             'authenticate' => array(
                 // TODO: acho que o passwordHasher devia ficar no ALL
                 // comentado abaixo pq não tá funcionando
                 //AuthComponent::ALL => array('userModel' => 'Funcionario'),
                 'Form' => array(
                     'passwordHasher' => 'Blowfish',
                     'userModel' => 'Funcionario'
                 )
             )
     )
);

public function beforeFilter() {
    // ATENÇÃO: Para permitir temporariamente que uma pessoa não-autenticada
    //          crie um usuário, adicione a string 'add' abaixo. Exemplo:
    //
    //              $this->Auth->allow(..., 'add'); //não descomente essa linha
    //                                              //modifique lá no final
    //
    //
    //          Isso precisa ser feito para adicionar o primeiro usuário ao
    //          banco de dados. Mas não pode esquecer de, depois de criado esse
    //          primeiro usuário, remover o 'add'!!
    $this->Auth->allow('login', 'deslogado');
}

}
