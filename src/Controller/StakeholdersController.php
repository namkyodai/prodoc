<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stakeholders Controller
 *
 * @property \App\Model\Table\StakeholdersTable $Stakeholders
 *
 * @method \App\Model\Entity\Stakeholder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StakeholdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $stakeholders = $this->paginate($this->Stakeholders);

        $this->set(compact('stakeholders'));
    }

    /**
     * View method
     *
     * @param string|null $id Stakeholder id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stakeholder = $this->Stakeholders->get($id, [
            'contain' => []
        ]);

        $this->set('stakeholder', $stakeholder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stakeholder = $this->Stakeholders->newEntity();
        if ($this->request->is('post')) {
            $stakeholder = $this->Stakeholders->patchEntity($stakeholder, $this->request->getData());
            if ($this->Stakeholders->save($stakeholder)) {
                $this->Flash->success(__('The stakeholder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stakeholder could not be saved. Please, try again.'));
        }
        $this->set(compact('stakeholder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Stakeholder id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stakeholder = $this->Stakeholders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stakeholder = $this->Stakeholders->patchEntity($stakeholder, $this->request->getData());
            if ($this->Stakeholders->save($stakeholder)) {
                $this->Flash->success(__('The stakeholder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stakeholder could not be saved. Please, try again.'));
        }
        $this->set(compact('stakeholder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Stakeholder id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stakeholder = $this->Stakeholders->get($id);
        if ($this->Stakeholders->delete($stakeholder)) {
            $this->Flash->success(__('The stakeholder has been deleted.'));
        } else {
            $this->Flash->error(__('The stakeholder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
