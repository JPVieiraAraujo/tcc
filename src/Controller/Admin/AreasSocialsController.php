<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AreasSocials Controller
 *
 * @property \App\Model\Table\AreasSocialsTable $AreasSocials
 *
 * @method \App\Model\Entity\AreasSocial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreasSocialsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $areasSocials = $this->paginate($this->AreasSocials);

        $this->set(compact('areasSocials'));
    }

    /**
     * View method
     *
     * @param string|null $id Areas Social id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasSocial = $this->AreasSocials->get($id, [
            'contain' => ['Avals'],
        ]);

        $this->set('areasSocial', $areasSocial);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasSocial = $this->AreasSocials->newEntity();
        if ($this->request->is('post')) {
            $areasSocial = $this->AreasSocials->patchEntity($areasSocial, $this->request->getData());
            if ($this->AreasSocials->save($areasSocial)) {
                $this->Flash->success(__('The areas social has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas social could not be saved. Please, try again.'));
        }
        $this->set(compact('areasSocial'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Social id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasSocial = $this->AreasSocials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasSocial = $this->AreasSocials->patchEntity($areasSocial, $this->request->getData());
            if ($this->AreasSocials->save($areasSocial)) {
                $this->Flash->success(__('The areas social has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas social could not be saved. Please, try again.'));
        }
        $this->set(compact('areasSocial'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Social id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasSocial = $this->AreasSocials->get($id);
        if ($this->AreasSocials->delete($areasSocial)) {
            $this->Flash->success(__('The areas social has been deleted.'));
        } else {
            $this->Flash->error(__('The areas social could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
