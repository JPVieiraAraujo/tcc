<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AreasCognitivas Controller
 *
 * @property \App\Model\Table\AreasCognitivasTable $AreasCognitivas
 *
 * @method \App\Model\Entity\AreasCognitiva[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreasCognitivasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $areasCognitivas = $this->paginate($this->AreasCognitivas);

        $this->set(compact('areasCognitivas'));
    }

    /**
     * View method
     *
     * @param string|null $id Areas Cognitiva id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasCognitiva = $this->AreasCognitivas->get($id, [
            'contain' => ['Avals'],
        ]);

        $this->set('areasCognitiva', $areasCognitiva);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasCognitiva = $this->AreasCognitivas->newEntity();
        if ($this->request->is('post')) {
            $areasCognitiva = $this->AreasCognitivas->patchEntity($areasCognitiva, $this->request->getData());
            if ($this->AreasCognitivas->save($areasCognitiva)) {
                $this->Flash->success(__('The areas cognitiva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas cognitiva could not be saved. Please, try again.'));
        }
        $this->set(compact('areasCognitiva'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Cognitiva id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasCognitiva = $this->AreasCognitivas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasCognitiva = $this->AreasCognitivas->patchEntity($areasCognitiva, $this->request->getData());
            if ($this->AreasCognitivas->save($areasCognitiva)) {
                $this->Flash->success(__('The areas cognitiva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas cognitiva could not be saved. Please, try again.'));
        }
        $this->set(compact('areasCognitiva'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Cognitiva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasCognitiva = $this->AreasCognitivas->get($id);
        if ($this->AreasCognitivas->delete($areasCognitiva)) {
            $this->Flash->success(__('The areas cognitiva has been deleted.'));
        } else {
            $this->Flash->error(__('The areas cognitiva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
