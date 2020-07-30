<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AreasAfetivas Controller
 *
 * @property \App\Model\Table\AreasAfetivasTable $AreasAfetivas
 *
 * @method \App\Model\Entity\AreasAfetiva[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreasAfetivasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $areasAfetivas = $this->paginate($this->AreasAfetivas);

        $this->set(compact('areasAfetivas'));
    }

    /**
     * View method
     *
     * @param string|null $id Areas Afetiva id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasAfetiva = $this->AreasAfetivas->get($id, [
            'contain' => ['Avals'],
        ]);

        $this->set('areasAfetiva', $areasAfetiva);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasAfetiva = $this->AreasAfetivas->newEntity();
        if ($this->request->is('post')) {
            $areasAfetiva = $this->AreasAfetivas->patchEntity($areasAfetiva, $this->request->getData());
            if ($this->AreasAfetivas->save($areasAfetiva)) {
                $this->Flash->success(__('The areas afetiva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas afetiva could not be saved. Please, try again.'));
        }
        $this->set(compact('areasAfetiva'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Afetiva id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasAfetiva = $this->AreasAfetivas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasAfetiva = $this->AreasAfetivas->patchEntity($areasAfetiva, $this->request->getData());
            if ($this->AreasAfetivas->save($areasAfetiva)) {
                $this->Flash->success(__('The areas afetiva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas afetiva could not be saved. Please, try again.'));
        }
        $this->set(compact('areasAfetiva'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Afetiva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasAfetiva = $this->AreasAfetivas->get($id);
        if ($this->AreasAfetivas->delete($areasAfetiva)) {
            $this->Flash->success(__('The areas afetiva has been deleted.'));
        } else {
            $this->Flash->error(__('The areas afetiva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
