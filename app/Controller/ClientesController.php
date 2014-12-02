<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 */
class ClientesController extends AppController {

    public $uses = array(
        'Cliente',
        'Pessoa'
    );

    public function view($id = null) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Cliente não existe.'));
        }
        $this->set('cliente', $this->Cliente->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {

            $pessoa = array();
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

            $this->Cliente->create();
	    $p_dataCadastro = $this->request->data['Cliente']['dataCadastro'];
	    $p_chaveAntiga = $this->request->data['Cliente']['chaveAntiga'];
	    $p_cor = $this->request->data['Cliente']['cor'];
	    $p_genero = $this->request->data['Cliente']['genero'];
	    $p_nomeSocial = $this->request->data['Cliente']['nomeSocial'];
	    $p_estadoCivil = $this->request->data['Cliente']['estadoCivil'];
            $this->Cliente->set('dataCadastro', $p_dataCadastro);
            $this->request->data['Cliente']['pessoas_idPessoa'] = $p_id;
            $f_save = $this->Cliente->save($this->request->data);

            if ($p_save && $f_save) {
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
