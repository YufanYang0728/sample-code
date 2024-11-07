<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PaymentProviders Controller
 *
 * @property \App\Model\Table\PaymentProvidersTable $PaymentProviders
 * @method \App\Model\Entity\PaymentProvider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentProvidersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;

        $paymentProviders = $this->paginate($this->PaymentProviders);

        $this->set(compact('paymentProviders'));

    }

    /**
     * View method
     *
     * @param string|null $id Payment Provider id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;

        $paymentProvider = $this->PaymentProviders->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('paymentProvider'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;

        $paymentProvider = $this->PaymentProviders->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentProvider = $this->PaymentProviders->patchEntity($paymentProvider, $this->request->getData());
            if ($this->PaymentProviders->save($paymentProvider)) {
                $this->Flash->success(__('The payment provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment provider could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentProvider'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Payment Provider id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;

        $paymentProvider = $this->PaymentProviders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentProvider = $this->PaymentProviders->patchEntity($paymentProvider, $this->request->getData());
            if ($this->PaymentProviders->save($paymentProvider)) {
                $this->Flash->success(__('The payment provider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment provider could not be saved. Please, try again.'));
        }
        $this->set(compact('paymentProvider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment Provider id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentProvider = $this->PaymentProviders->get($id);
        if ($this->PaymentProviders->delete($paymentProvider)) {
            $this->Flash->success(__('The payment provider has been deleted.'));
        } else {
            $this->Flash->error(__('The payment provider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
