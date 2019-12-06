<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Studentt Controller
 *
 * @property \App\Model\Table\StudenttTable $Studentt
 *
 * @method \App\Model\Entity\Studentt[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudenttController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $studentt = $this->paginate($this->Studentt);

        $this->set(compact('studentt'));
    }

    /**
     * View method
     *
     * @param string|null $id Studentt id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentt = $this->Studentt->get($id, [
            'contain' => []
        ]);

        $this->set('studentt', $studentt);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentt = $this->Studentt->newEntity();
        if ($this->request->is('post')) {
            $studentt = $this->Studentt->patchEntity($studentt, $this->request->getData());
            if ($this->Studentt->save($studentt)) {
                $this->Flash->success(__('The studentt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studentt could not be saved. Please, try again.'));
        }
        $this->set(compact('studentt'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Studentt id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentt = $this->Studentt->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentt = $this->Studentt->patchEntity($studentt, $this->request->getData());
            if ($this->Studentt->save($studentt)) {
                $this->Flash->success(__('The studentt has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studentt could not be saved. Please, try again.'));
        }
        $this->set(compact('studentt'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Studentt id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentt = $this->Studentt->get($id);
        if ($this->Studentt->delete($studentt)) {
            $this->Flash->success(__('The studentt has been deleted.'));
        } else {
            $this->Flash->error(__('The studentt could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
