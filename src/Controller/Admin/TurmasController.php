<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Turmas Controller
 *
 * @property \App\Model\Table\TurmasTable $Turmas
 *
 * @method \App\Model\Entity\Turma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TurmasController extends AppController
{
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
        $turmas = $this->paginate($this->Turmas);

        $this->set(compact('turmas'));
    }

    /**
     * View method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => [],
        ]);

        $this->set('turma', $turma);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turma = $this->Turmas->newEntity();
        if ($this->request->is('post')) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());
            if ($this->Turmas->save($turma)) {
                $this->Flash->success(__('Turma cadastrada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: Turma não foi cadastrada!!!'));
        }
        $users = $this->Turmas->Users->find('list', ['limit' => 200]);
        $this->set(compact('turma', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turma = $this->Turmas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turma = $this->Turmas->patchEntity($turma, $this->request->getData());
            if ($this->Turmas->save($turma)) {
                $this->Flash->success(__('Turma editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível realizar edição.'));
        }
        $users = $this->Turmas->Users->find('list', ['limit' => 200]);
        $this->set(compact('turma', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Turma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turma = $this->Turmas->get($id);
        if ($this->Turmas->delete($turma)) {
            $this->Flash->success(__('Turma excluída com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível realizar a exclusão.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
