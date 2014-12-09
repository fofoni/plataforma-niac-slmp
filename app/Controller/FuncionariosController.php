<?php
App::uses('AppController', 'Controller');
/**
 * Funcionarios Controller
 *
 */
class FuncionariosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');

    public $funcionarios = array(
        'funcionario'
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
        $this->set('funcionarios', $this->paginate());
    }

    public function deslogado() {
        if ($this->Auth->user())
            return $this->redirect('/');
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

            $this->Funcionario->create();
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

        $this->Funcionario->id = $id;
        if (!$this->Funcionario->exists()) {
            throw new NotFoundException(__('Funcionário não existe.'));
        }
        if ($this->Funcionario->delete()) {
            $this->Session->setFlash(__('Funcionário removido!'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Não foi possível remover o funcionário.'));
        return $this->redirect(array('action' => 'index'));
    }
	
	public function view_pdf($id = null) {
		$this->Funcionario->id = $id;
		if (!$this->Funcionario->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		// increase memory limit in PHP
		ini_set('memory_limit', '512M');
		$this->set('funcionario', $this->Funcionario->read(null, $id));
	}

}
