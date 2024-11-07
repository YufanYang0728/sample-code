<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Qa Controller
 *
 * @property \App\Model\Table\QaTable $Qa
 * @method \App\Model\Entity\Qa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $qa = $this->paginate($this->Qa);

        $this->set(compact('qa'));
    }

    /**
     * View method
     *
     * @param string|null $id Qa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qa = $this->Qa->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('qa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qa = $this->Qa->newEmptyEntity();
        if ($this->request->is('post')) {
            $qa = $this->Qa->patchEntity($qa, $this->request->getData());
            if ($this->Qa->save($qa)) {
                $this->Flash->success(__('The qa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qa could not be saved. Please, try again.'));
        }
        $this->set(compact('qa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Qa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qa = $this->Qa->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qa = $this->Qa->patchEntity($qa, $this->request->getData());
            if ($this->Qa->save($qa)) {
                $this->Flash->success(__('The qa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qa could not be saved. Please, try again.'));
        }
        $this->set(compact('qa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Qa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qa = $this->Qa->get($id);
        if ($this->Qa->delete($qa)) {
            $this->Flash->success(__('The qa has been deleted.'));
        } else {
            $this->Flash->error(__('The qa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
