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
    'BlowfishPasswordHasher', 'Controller/Component/Auth', 'Controller',
    'Controller'
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
             'loginRedirect' => array(
                 'controller' => 'posts', // TODO: substituir por `casos'
                 'action' => 'index'
             ),
             'logoutRedirect' => array(
                 'controller' => 'pages', // TODO: garantir que isso vai pra
                 'action' => 'display',   //       pagina de login
                 'home'
             ),
             'authenticate' => array(
                 'Form' => array(
                     'passwordHasher' => 'Blowfish'
                 )
             )
     )
);

public function beforeFilter() {
    // ATENÇÃO: Para permitir temporariamente que uma pessoa não-autenticada
    //          crie um usuário, adicione a string 'add' abaixo. Exemplo:
    //
    //              $this->Auth->allow('login', 'add');
    //
    //          Isso precisa ser feito para adicionar o primeiro usuário ao
    //          banco de dados. Mas não pode esquecer de, depois de criado esse
    //          primeiro usuário, remover a string!!
    // na verdade, esse comentário acima ainda não é válido, porque não dá pra
    // fazer login; ou seja, ainda estamos na fase em que pessoas
    // não-autenticadas pode fazer tudo.
//     $this->Auth->allow('login');
    $this->Auth->allow('login', 'index', 'view', 'edit', 'add', 'display',
                       'view_pdf', 'delete');
}

}
