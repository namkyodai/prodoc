<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 *
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Revisions', 'Statuss', 'DecisionCodes', 'WorkPackages', 'Areas', 'Disciplines', 'DocumentTypes']
        ];
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Revisions', 'Statuss', 'DecisionCodes', 'WorkPackages', 'Areas', 'Disciplines', 'DocumentTypes']
        ]);

        $this->set('document', $document);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $document = $this->Documents->newEntity();
        if ($this->request->is('post')) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $revisions = $this->Documents->Revisions->find('list', ['limit' => 200]);
        $statuss = $this->Documents->Statuss->find('list', ['limit' => 200]);
        $decisionCodes = $this->Documents->DecisionCodes->find('list', ['limit' => 200]);
        $workPackages = $this->Documents->WorkPackages->find('list', ['limit' => 200]);
        $areas = $this->Documents->Areas->find('list', ['limit' => 200]);
        $disciplines = $this->Documents->Disciplines->find('list', ['limit' => 200]);
        $documentTypes = $this->Documents->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('document', 'revisions', 'statuss', 'decisionCodes', 'workPackages', 'areas', 'disciplines', 'documentTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $revisions = $this->Documents->Revisions->find('list', ['limit' => 200]);
        $statuss = $this->Documents->Statuss->find('list', ['limit' => 200]);
        $decisionCodes = $this->Documents->DecisionCodes->find('list', ['limit' => 200]);
        $workPackages = $this->Documents->WorkPackages->find('list', ['limit' => 200]);
        $areas = $this->Documents->Areas->find('list', ['limit' => 200]);
        $disciplines = $this->Documents->Disciplines->find('list', ['limit' => 200]);
        $documentTypes = $this->Documents->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('document', 'revisions', 'statuss', 'decisionCodes', 'workPackages', 'areas', 'disciplines', 'documentTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
