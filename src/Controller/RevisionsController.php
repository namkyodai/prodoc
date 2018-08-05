<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Revisions Controller
 *
 * @property \App\Model\Table\RevisionsTable $Revisions
 *
 * @method \App\Model\Entity\Revision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RevisionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $revisions = $this->paginate($this->Revisions);

        $this->set(compact('revisions'));
    }

    /**
     * View method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $revision = $this->Revisions->get($id, [
            'contain' => ['Documents']
        ]);

        $this->set('revision', $revision);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $revision = $this->Revisions->newEntity();
        if ($this->request->is('post')) {
            $revision = $this->Revisions->patchEntity($revision, $this->request->getData());
            if ($this->Revisions->save($revision)) {
                $this->Flash->success(__('The revision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The revision could not be saved. Please, try again.'));
        }
        $this->set(compact('revision'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $revision = $this->Revisions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $revision = $this->Revisions->patchEntity($revision, $this->request->getData());
            if ($this->Revisions->save($revision)) {
                $this->Flash->success(__('The revision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The revision could not be saved. Please, try again.'));
        }
        $this->set(compact('revision'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $revision = $this->Revisions->get($id);
        if ($this->Revisions->delete($revision)) {
            $this->Flash->success(__('The revision has been deleted.'));
        } else {
            $this->Flash->error(__('The revision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
