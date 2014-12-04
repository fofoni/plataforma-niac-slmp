<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 */
class ClientesController extends AppController {

    public $uses = array(
        'Cliente'
    );

    public function view($id = null) {
        $this->Cliente->id = (int)$id;
        if ($this->Cliente->exists()) {
            $this->set('cliente', $this->Cliente->read(null, $id));
        }
	else {
	    throw new NotFoundException(__('Cliente não existe.'));
	}
    }

    public function add() {
        if ($this->request->is('post')) {

            $this->Cliente->create();
            $c_save = $this->Cliente->save($this->request->data);

            if ($c_save) {
                $this->Session->setFlash(
                    __('O novo cliente foi adicionado!')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível adicionar o cliente :\\')
            );

        }
    }

    public function edit($id = null) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Cliente não existe.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Os dados do cliente foram modificados.')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível modificar os dados do cliente!')
            );
        } else {
            $this->request->data = $this->Cliente->read(null, $id);
            unset($this->request->data['Cliente']['password']);
        }
    }


/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

}
