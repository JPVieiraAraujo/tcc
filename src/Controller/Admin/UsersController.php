<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['cadastrar', 'logout']); //liberando acesso para cadastrar, sem fazer login
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 5
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    public function perfil()
    {
        $user_id = $this->Auth->user('id'); /**recupera o dado do usuario logado */
        $user = $this->Users->get($user_id); /**envia para a view o usuario logado */

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('Erro: Usuário não cadastrado com sucesso.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: Não foi possível realizar edição.'));
        }
        $this->set(compact('user'));
    }

    public function cadastrar()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Cadastrado realizado com sucesso.'));

                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
            $this->Flash->danger(__('Erro: Não foi possível realizar o cadastro.'));
        }
        $this->set(compact('user'));
    }

    public function editSenha($id = null)
    {
        $user = $this->Users->get($id, [ /**enviando o id pela url */
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Senha do usuário editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('Senha não foi possível editar a senha.'));
        }
        $this->set(compact('user'));
    }

    public function editPerfil()
    {
        $user_id = $this->Auth->user('id'); /*pegar dados do usuario logado*/
        $user = $this->Users->get($user_id); /**Recupera informações do usuário, sendo agora um objeto */
        
        /**salvando no banco as alterações */
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Perfil editado com sucesso.'));

                return $this->redirect(['controler'=>'Users', 'action' => 'perfil']);
            }
            $this->Flash->error(__('Perfil não foi editado com sucesso.'));
        }        
        $this->set(compact('user')); /*enviando os dados para a view*/
    }

    public function editSenhaPerfil()
    {
        $user_id = $this->Auth->user('id'); /*pegar dados do usuario logado*/
        $user = $this->Users->get($user_id, [
            'contain' => [],
        ]); /**Recupera informações do usuário, sendo agora um objeto */
        
        /**salvando no banco as alterações */
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                
                $this->Flash->success(__('Senha editada com sucesso.'));

                return $this->redirect(['controler'=>'Users', 'action' => 'perfil']);
            }
            $this->Flash->error(__('Senha não foi editada com sucesso.'));
        }      
        $this->set(compact('user')); /*enviando os dados para a view*/
    }
    

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário excluído com sucesso.'));
        } else {
            $this->Flash->danger(__('Não foi possível realizar a exclusão.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->danger(__('Login ou Senha incorreto'));
            }
        }
    }

    public function logout()
    {
        $this->Flash->success(__('Deslogado com sucesso!'));
        return $this->redirect($this->Auth->logout());
    }
}
