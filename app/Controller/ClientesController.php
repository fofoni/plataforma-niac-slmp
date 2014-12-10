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

            //$this->Cliente->set('dataCadastro', $c_dataCadastro);
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

	public function index() {
        $this->Cliente->recursive = 0;
        $this->set('clientes', $this->paginate());
    }
	
    public function search() {
	//Não está pronto!
	$criterio=intval($this->data['Cliente']['buscaId']);
	$busca=$this->data['Cliente']['buscaTexto'];
	if ($busca==null) {
            //throw new NotFoundException(__('Não foi inserida palavra-chave.'));
	}
	switch($criterio) {
		case 0: 	// Chave Antiga
			$resultados = $this->Cliente->find('all', array(
				'conditions' => array('Cliente.chaveAntiga' => $busca)
			));
			break;
		case 1:		// Chave Nova
			$resultados = $this->Cliente->find('all', array(
				'conditions' => array('Cliente.id' => $busca)
			));
			break;
		case 2:		// Nome
			$resultados = $this->Cliente->find('all', array(
				'conditions' => array('Cliente.nome' => $busca)
			));
			break;
		case 3:		// CPF
			$resultados = $this->Cliente->find('all', array(
				'conditions' => array('Cliente.cpf' => $busca)
			));
			break;
	}
	switch (count($resultados)) {
		case 0:            
//			throw new NotFoundException(__('Nenhum cliente encontrado. Busque novamente.'));
//		case 1:
//			$this->redirect(array('action' => 'view',$resultados[0]['Cliente']['id']));
//			break;
		default:
			$this->request->data = $resultados;
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
            //unset($this->request->data['Cliente']['password']);
        }
    }

}
