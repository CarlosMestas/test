<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Asistencias Controller
 *
 * @property \App\Model\Table\AsistenciasTable $Asistencias
 *
 * @method \App\Model\Entity\Asistencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsistenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $asistencias = $this->paginate($this->Asistencias);

        $this->set(compact('asistencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asistencia = $this->Asistencias->get($id, [
            'contain' => []
        ]);

        $this->set('asistencia', $asistencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asistencia = $this->Asistencias->newEntity();
        if ($this->request->is('post')) {
            $asistencia = $this->Asistencias->patchEntity($asistencia, $this->request->getData());
            if ($this->Asistencias->save($asistencia)) {
                $this->Flash->success(__('The asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asistencia could not be saved. Please, try again.'));
        }
        $this->set(compact('asistencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asistencia = $this->Asistencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asistencia = $this->Asistencias->patchEntity($asistencia, $this->request->getData());
            if ($this->Asistencias->save($asistencia)) {
                $this->Flash->success(__('The asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asistencia could not be saved. Please, try again.'));
        }
        $this->set(compact('asistencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asistencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asistencia = $this->Asistencias->get($id);
        if ($this->Asistencias->delete($asistencia)) {
            $this->Flash->success(__('The asistencia has been deleted.'));
        } else {
            $this->Flash->error(__('The asistencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
