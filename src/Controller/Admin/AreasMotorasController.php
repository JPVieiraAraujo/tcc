<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AreasMotoras Controller
 *
 * @property \App\Model\Table\AreasMotorasTable $AreasMotoras
 *
 * @method \App\Model\Entity\AreasMotora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreasMotorasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $areasMotoras = $this->paginate($this->AreasMotoras);

        $this->set(compact('areasMotoras'));
    }

    /**
     * View method
     *
     * @param string|null $id Areas Motora id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasMotora = $this->AreasMotoras->get($id, [
            'contain' => ['Avals'],
        ]);

        $this->set('areasMotora', $areasMotora);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasMotora = $this->AreasMotoras->newEntity();
        if ($this->request->is('post')) {
            $areasMotora = $this->AreasMotoras->patchEntity($areasMotora, $this->request->getData());
            if ($this->AreasMotoras->save($areasMotora)) {
                $this->Flash->success(__('The areas motora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas motora could not be saved. Please, try again.'));
        }
        $this->set(compact('areasMotora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Motora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasMotora = $this->AreasMotoras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasMotora = $this->AreasMotoras->patchEntity($areasMotora, $this->request->getData());
            if ($this->AreasMotoras->save($areasMotora)) {
                $this->Flash->success(__('The areas motora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The areas motora could not be saved. Please, try again.'));
        }
        $this->set(compact('areasMotora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Motora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasMotora = $this->AreasMotoras->get($id);
        if ($this->AreasMotoras->delete($areasMotora)) {
            $this->Flash->success(__('The areas motora has been deleted.'));
        } else {
            $this->Flash->error(__('The areas motora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
