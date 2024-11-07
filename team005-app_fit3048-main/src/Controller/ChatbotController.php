<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chatbot Controller
 *
 * @property \App\Model\Table\ChatbotTable $Chatbot
 * @method \App\Model\Entity\Chatbot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChatbotController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    { 
    if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
        $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
    endif;
    
    if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
        $this->viewBuilder()->setLayout('defaultAdmin');
    endif;
        $chatbot = $this->paginate($this->Chatbot);

        $this->set(compact('chatbot'));
    }

    /**
     * View method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;
        $chatbot = $this->Chatbot->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('chatbot'));
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
        $chatbot = $this->Chatbot->newEmptyEntity();
        if ($this->request->is('post')) {
            $chatbot = $this->Chatbot->patchEntity($chatbot, $this->request->getData());
            if ($this->Chatbot->save($chatbot)) {
                $this->Flash->success(__('The chatbot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatbot could not be saved. Please, try again.'));
        }
        $this->set(compact('chatbot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('defaultAdmin');
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;
        $chatbot = $this->Chatbot->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chatbot = $this->Chatbot->patchEntity($chatbot, $this->request->getData());
            if ($this->Chatbot->save($chatbot)) {
                $this->Flash->success(__('The chatbot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chatbot could not be saved. Please, try again.'));
        }
        $this->set(compact('chatbot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chatbot id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;
        $this->request->allowMethod(['post', 'delete']);
        $chatbot = $this->Chatbot->get($id);
        if ($this->Chatbot->delete($chatbot)) {
            $this->Flash->success(__('The chatbot has been deleted.'));
        } else {
            $this->Flash->error(__('The chatbot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function home()
    {
        
        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;

    }
    public function bot()
    {

    }
}
