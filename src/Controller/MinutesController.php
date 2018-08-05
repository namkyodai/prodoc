<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Minutes Controller
 *
 * @property \App\Model\Table\MinutesTable $Minutes
 *
 * @method \App\Model\Entity\Minute[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MinutesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects', 'Statuss', 'Peoples', 'Activities', 'WorkPackages', 'Areas', 'Disciplines']
        ];
        $minutes = $this->paginate($this->Minutes);

        $this->set(compact('minutes'));
    }

    /**
     * View method
     *
     * @param string|null $id Minute id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $minute = $this->Minutes->get($id, [
            'contain' => ['Subjects', 'Statuss', 'Peoples', 'Activities', 'WorkPackages', 'Areas', 'Disciplines']
        ]);

        $this->set('minute', $minute);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $minute = $this->Minutes->newEntity();
        if ($this->request->is('post')) {
            $minute = $this->Minutes->patchEntity($minute, $this->request->getData());
            if ($this->Minutes->save($minute)) {
                $this->Flash->success(__('The minute has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The minute could not be saved. Please, try again.'));
        }
        $subjects = $this->Minutes->Subjects->find('list', ['limit' => 200]);
        $statuss = $this->Minutes->Statuss->find('list', ['limit' => 200]);
        $peoples = $this->Minutes->Peoples->find('list', ['limit' => 200]);
        $activities = $this->Minutes->Activities->find('list', ['limit' => 200]);
        $workPackages = $this->Minutes->WorkPackages->find('list', ['limit' => 200]);
        $areas = $this->Minutes->Areas->find('list', ['limit' => 200]);
        $disciplines = $this->Minutes->Disciplines->find('list', ['limit' => 200]);
        $this->set(compact('minute', 'subjects', 'statuss', 'peoples', 'activities', 'workPackages', 'areas', 'disciplines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Minute id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $minute = $this->Minutes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $minute = $this->Minutes->patchEntity($minute, $this->request->getData());
            if ($this->Minutes->save($minute)) {
                $this->Flash->success(__('The minute has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The minute could not be saved. Please, try again.'));
        }
        $subjects = $this->Minutes->Subjects->find('list', ['limit' => 200]);
        $statuss = $this->Minutes->Statuss->find('list', ['limit' => 200]);
        $peoples = $this->Minutes->Peoples->find('list', ['limit' => 200]);
        $activities = $this->Minutes->Activities->find('list', ['limit' => 200]);
        $workPackages = $this->Minutes->WorkPackages->find('list', ['limit' => 200]);
        $areas = $this->Minutes->Areas->find('list', ['limit' => 200]);
        $disciplines = $this->Minutes->Disciplines->find('list', ['limit' => 200]);
        $this->set(compact('minute', 'subjects', 'statuss', 'peoples', 'activities', 'workPackages', 'areas', 'disciplines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Minute id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $minute = $this->Minutes->get($id);
        if ($this->Minutes->delete($minute)) {
            $this->Flash->success(__('The minute has been deleted.'));
        } else {
            $this->Flash->error(__('The minute could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
