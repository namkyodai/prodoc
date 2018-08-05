<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DecisionCodes Controller
 *
 * @property \App\Model\Table\DecisionCodesTable $DecisionCodes
 *
 * @method \App\Model\Entity\DecisionCode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DecisionCodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $decisionCodes = $this->paginate($this->DecisionCodes);

        $this->set(compact('decisionCodes'));
    }

    /**
     * View method
     *
     * @param string|null $id Decision Code id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $decisionCode = $this->DecisionCodes->get($id, [
            'contain' => []
        ]);

        $this->set('decisionCode', $decisionCode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $decisionCode = $this->DecisionCodes->newEntity();
        if ($this->request->is('post')) {
            $decisionCode = $this->DecisionCodes->patchEntity($decisionCode, $this->request->getData());
            if ($this->DecisionCodes->save($decisionCode)) {
                $this->Flash->success(__('The decision code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The decision code could not be saved. Please, try again.'));
        }
        $this->set(compact('decisionCode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Decision Code id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $decisionCode = $this->DecisionCodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $decisionCode = $this->DecisionCodes->patchEntity($decisionCode, $this->request->getData());
            if ($this->DecisionCodes->save($decisionCode)) {
                $this->Flash->success(__('The decision code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The decision code could not be saved. Please, try again.'));
        }
        $this->set(compact('decisionCode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Decision Code id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $decisionCode = $this->DecisionCodes->get($id);
        if ($this->DecisionCodes->delete($decisionCode)) {
            $this->Flash->success(__('The decision code has been deleted.'));
        } else {
            $this->Flash->error(__('The decision code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
