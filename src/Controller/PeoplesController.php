<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Peoples Controller
 *
 * @property \App\Model\Table\PeoplesTable $Peoples
 *
 * @method \App\Model\Entity\People[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeoplesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stakeholders']
        ];
        $peoples = $this->paginate($this->Peoples);

        $this->set(compact('peoples'));
    }

    /**
     * View method
     *
     * @param string|null $id People id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $people = $this->Peoples->get($id, [
            'contain' => ['Stakeholders']
        ]);

        $this->set('people', $people);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $people = $this->Peoples->newEntity();
        if ($this->request->is('post')) {
            $people = $this->Peoples->patchEntity($people, $this->request->getData());
            if ($this->Peoples->save($people)) {
                $this->Flash->success(__('The people has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people could not be saved. Please, try again.'));
        }
        $stakeholders = $this->Peoples->Stakeholders->find('list', ['limit' => 200]);
        $this->set(compact('people', 'stakeholders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id People id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $people = $this->Peoples->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $people = $this->Peoples->patchEntity($people, $this->request->getData());
            if ($this->Peoples->save($people)) {
                $this->Flash->success(__('The people has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The people could not be saved. Please, try again.'));
        }
        $stakeholders = $this->Peoples->Stakeholders->find('list', ['limit' => 200]);
        $this->set(compact('people', 'stakeholders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id People id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $people = $this->Peoples->get($id);
        if ($this->Peoples->delete($people)) {
            $this->Flash->success(__('The people has been deleted.'));
        } else {
            $this->Flash->error(__('The people could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
