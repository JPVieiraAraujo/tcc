<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Avals Controller
 *
 * @property \App\Model\Table\AvalsTable $Avals
 *
 * @method \App\Model\Entity\Aval[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Alunos', 'AreasMotoras', 'AreasAfetivas', 'AreasCognitivas', 'AreasSocials'],
        ];
        $avals = $this->paginate($this->Avals);

        $this->set(compact('avals'));
    }

    /**
     * View method
     *
     * @param string|null $id Aval id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aval = $this->Avals->get($id, [
            'contain' => ['Alunos', 'AreasMotoras', 'AreasAfetivas', 'AreasCognitivas', 'AreasSocials'],
        ]);

        $this->set('aval', $aval);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aval = $this->Avals->newEntity();

        if ($this->request->is('post')) {

            $aval = $this->Avals->patchEntity($aval, $this->request->getData());

            $motoraTotal = ($aval->motora1 + $aval->motora2 + $aval->motora3)/3;
            $afetivaTotal = ($aval->afetiva1 + $aval->afetiva2 + $aval->afetiva3)/3;
            $socialTotal = ($aval->social1 + $aval->social2 + $aval->social3)/3;
            $cognitivaTotal = ($aval->cognitiva1 + $aval->cognitiva2 + $aval->cognitiva3)/3;

            //var_dump($motoraTotal, $socialTotal, $cognitivaTotal, $afetivaTotal);
            //exit;

            //area motora
            if($motoraTotal <= 1.333)
            {
                $aval->areas_motora_id = '1';
            }elseif ($motoraTotal > 1.333 && $motoraTotal < 2.333)
            {
                $aval->areas_motora_id = '2';
            }elseif ($motoraTotal >= 2.333 ){
                $aval->areas_motora_id = '3';
            }

            //area afetiva
            if($afetivaTotal <= 1.333)
            {
                $aval->areas_afetiva_id = '1';
            }elseif ($afetivaTotal > 1.33 && $afetivaTotal < 2.333)
            {
                $aval->areas_afetiva_id = '2';
            }elseif($afetivaTotal >= 2.333 ) {
                $aval->areas_afetiva_id = '3';
            }

            //area social
            if($socialTotal <= 1.333)
            {
                $aval->areas_social_id = '1';
            }elseif ($socialTotal > 1.33 && $socialTotal < 2.333)
            {
                $aval->areas_social_id = '2';
            }elseif ($socialTotal >= 2.333 ){
                $aval->areas_social_id = '3';
            }

            //area cognitiva
            if($cognitivaTotal <= 1.333)
            {
                $aval->areas_cognitiva_id = '1';
            }elseif ($cognitivaTotal > 1.33 && $cognitivaTotal < 2.333)
            {
                $aval->areas_cognitiva_id = '2';
            }elseif ($cognitivaTotal >= 2.333 ){
                $aval->areas_cognitiva_id = '3';
            }

            if ($this->Avals->save($aval)) {
                $this->Flash->success(__('Aluno avaliado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível realizar a avaliação'));
        }
        $alunos = $this->Avals->Alunos->find('list', ['limit' => 200]);
        $areasMotoras = $this->Avals->AreasMotoras->find('list', ['limit' => 200]);
        $areasAfetivas = $this->Avals->AreasAfetivas->find('list', ['limit' => 200]);
        $areasCognitivas = $this->Avals->AreasCognitivas->find('list', ['limit' => 200]);
        $areasSocials = $this->Avals->AreasSocials->find('list', ['limit' => 200]);
        $this->set(compact('aval', 'alunos', 'areasMotoras', 'areasAfetivas', 'areasCognitivas', 'areasSocials'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aval id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aval = $this->Avals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aval = $this->Avals->patchEntity($aval, $this->request->getData());
            if ($this->Avals->save($aval)) {
                $this->Flash->success(__('The aval has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aval could not be saved. Please, try again.'));
        }
        $alunos = $this->Avals->Alunos->find('list', ['limit' => 200]);
        $areasMotoras = $this->Avals->AreasMotoras->find('list', ['limit' => 200]);
        $areasAfetivas = $this->Avals->AreasAfetivas->find('list', ['limit' => 200]);
        $areasCognitivas = $this->Avals->AreasCognitivas->find('list', ['limit' => 200]);
        $areasSocials = $this->Avals->AreasSocials->find('list', ['limit' => 200]);
        $this->set(compact('aval', 'alunos', 'areasMotoras', 'areasAfetivas', 'areasCognitivas', 'areasSocials'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aval id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aval = $this->Avals->get($id);
        if ($this->Avals->delete($aval)) {
            $this->Flash->success(__('The aval has been deleted.'));
        } else {
            $this->Flash->error(__('The aval could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function gerarRelatorio($id = null)
    {
        $aval = $this->Avals->get($id, [
            'contain' => ['Alunos', 'AreasMotoras', 'AreasAfetivas', 'AreasCognitivas', 'AreasSocials'],
        ]);

        $this->set('aval', $aval);
    }

    public function gerarDashboard($id = null)
    {
        $aval = $this->Avals->get($id, [
            'contain' => ['Alunos', 'AreasMotoras', 'AreasAfetivas', 'AreasCognitivas', 'AreasSocials'],
        ]);

        $this->set('aval', $aval);
    }

}
