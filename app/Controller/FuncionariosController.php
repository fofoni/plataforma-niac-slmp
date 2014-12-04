<?php
App::uses('AppController', 'Controller');
/**
 * Funcionarios Controller
 *
 */
class FuncionariosController extends AppController {

    public $uses = array(
        'Funcionario'
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Usuário ou senha inválidos :\\'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->Funcionario->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function deslogado() {
    }

    public function view($id = null) {
        $this->Funcionario->id = $id;
        if (!$this->Funcionario->exists()) {
            throw new NotFoundException(__('Funcionário não existe.'));
        }
        $this->set('funcionario', $this->Funcionario->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {

/*            $pessoa = array();
            $p_nome = $this->request->data['Pessoa']['nome'];
            $p_data = $this->request->data['Pessoa']['dataNascimento'];
            $p_mail= $this->request->data['Pessoa']['email'];
            $p_tel= $this->request->data['Pessoa']['telefone'];
            $p_obs= $this->request->data['Pessoa']['observacao'];
            if (isset($p_nome) && !empty($p_nome) && !is_null($p_nome) &&
                trim($p_nome) !== '') { $pessoa['nome'] = $p_nome; }
            if (isset($p_data) && !empty($p_data) && !is_null($p_data))
                { $pessoa['dataNascimento'] = $p_data; }
            if (isset($p_mail) && !empty($p_mail) && !is_null($p_mail) &&
                trim($p_mail) !== '') { $pessoa['email'] = $p_mail; }
            if (isset($p_tel) && !empty($p_tel) && !is_null($p_tel) &&
                trim($p_tel) !== '') { $pessoa['telefone'] = $p_tel; }
            if (isset($p_obs) && !empty($p_obs) && !is_null($p_obs) &&
                trim($p_obs) !== '') { $pessoa['observacao'] = $p_obs; }
            $this->Pessoa->create();
            $p_save = $this->Pessoa->save($pessoa);
            $p_id = $this->Pessoa->getLastInsertId();
*/

            $this->Funcionario->create();
            // comentado, pq já está presente no beforeSave()
            //$this->Funcionario->set('dataEntrada', mktime());
            //$this->request->data['Funcionario']['pessoas_idPessoa'] = $p_id;
/*	    $f_nome = $this->request->data['Funcionario']['nome'];
            $f_data = $this->request->data['Funcionario']['dataNascimento'];
            $f_mail= $this->request->data['Funcionario']['email'];
            $f_tel= $this->request->data['Funcionario']['telefone'];
*/
            $f_save = $this->Funcionario->save($this->request->data);

            if ($f_save) {
                $this->Session->setFlash(
                    __('O novo funcionário foi adicionado!')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível adicionar o funcionário :\\')
            );

        }
    }

    public function edit($id = null) {
        $this->Funcionario->id = $id;
        if (!$this->Funcionario->exists()) {
            throw new NotFoundException(__('Funcionário não existe.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Funcionario->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Os dados do funcionário foram modificados.')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível modificar os dados do funcionário!')
            );
        } else {
            $this->request->data = $this->Funcionario->read(null, $id);
            unset($this->request->data['Funcionario']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->Funcionario->exists()) {
            throw new NotFoundException(__('Funcionário não existe.'));
        }
        if ($this->Funcionário->delete()) {
            $this->Session->setFlash(__('Funcionário removido!'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Não foi possível remover o funcionário.'));
        return $this->redirect(array('action' => 'index'));
    }

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

}
