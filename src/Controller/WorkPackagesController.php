<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkPackages Controller
 *
 * @property \App\Model\Table\WorkPackagesTable $WorkPackages
 *
 * @method \App\Model\Entity\WorkPackage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorkPackagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $workPackages = $this->paginate($this->WorkPackages);

        $this->set(compact('workPackages'));
    }

    /**
     * View method
     *
     * @param string|null $id Work Package id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workPackage = $this->WorkPackages->get($id, [
            'contain' => []
        ]);

        $this->set('workPackage', $workPackage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workPackage = $this->WorkPackages->newEntity();
        if ($this->request->is('post')) {
            $workPackage = $this->WorkPackages->patchEntity($workPackage, $this->request->getData());
            if ($this->WorkPackages->save($workPackage)) {
                $this->Flash->success(__('The work package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work package could not be saved. Please, try again.'));
        }
        $this->set(compact('workPackage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Work Package id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workPackage = $this->WorkPackages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workPackage = $this->WorkPackages->patchEntity($workPackage, $this->request->getData());
            if ($this->WorkPackages->save($workPackage)) {
                $this->Flash->success(__('The work package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work package could not be saved. Please, try again.'));
        }
        $this->set(compact('workPackage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Work Package id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workPackage = $this->WorkPackages->get($id);
        if ($this->WorkPackages->delete($workPackage)) {
            $this->Flash->success(__('The work package has been deleted.'));
        } else {
            $this->Flash->error(__('The work package could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
