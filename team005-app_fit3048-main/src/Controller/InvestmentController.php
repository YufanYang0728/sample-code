<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Investment Controller
 *
 * @property \App\Model\Table\InvestmentTable $Investment
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvestmentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $investment = $this->paginate($this->Investment);

        $this->set(compact('investment'));
    }

    /**
     * View method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $investment = $this->Investment->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('investment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $investment = $this->Investment->newEmptyEntity();
        if ($this->request->is('post')) {
            $investment = $this->Investment->patchEntity($investment, $this->request->getData());
            if ($this->Investment->save($investment)) {
                $this->Flash->success(__('The investment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The investment could not be saved. Please, try again.'));
        }
        $this->set(compact('investment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $investment = $this->Investment->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $investment = $this->Investment->patchEntity($investment, $this->request->getData());
            if ($this->Investment->save($investment)) {
                $this->Flash->success(__('The investment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The investment could not be saved. Please, try again.'));
        }
        $this->set(compact('investment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Investment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $investment = $this->Investment->get($id);
        if ($this->Investment->delete($investment)) {
            $this->Flash->success(__('The investment has been deleted.'));
        } else {
            $this->Flash->error(__('The investment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
