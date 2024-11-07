<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Modules Controller
 *
 * @property \App\Model\Table\ModulesTable $Modules
 * @method \App\Model\Entity\Module[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModulesController extends AppController
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

        $modules = $this->paginate($this->Modules);

        $this->set(compact('modules'));


    }

    /**
     * Dashboard method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function dashboard()
    {

        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
        $modules = $this->paginate($this->Modules);

        $this->set(compact('modules'));
    }

    /**
     * View method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $module = $this->Modules->get($id, [
            'contain' => ['Products'],
        ]);

        if ($id == 11){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'compound_interest']);

            return $this->redirect($redirect);

        }
        if ($id == 12){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'risk_profile']);

            return $this->redirect($redirect);

        }

        if ($id == 8){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'super']);

            return $this->redirect($redirect);

        }

        if ($id == 9){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'building_wealth']);

            return $this->redirect($redirect);

        }

        if ($id == 7){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'insurance']);

            return $this->redirect($redirect);

        }

        if ($id == 10){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'investment']);

            return $this->redirect($redirect);

        }
        if ($id == 13){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'calculators']);

            return $this->redirect($redirect);

        }if ($id == 14){
        $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'retirement']);

        return $this->redirect($redirect);

    }if ($id == 15){
        $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'savings']);

        return $this->redirect($redirect);

    }
        if ($id == 16){
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => 'Insurance']);

            return $this->redirect($redirect);

        }

//        if ($id == 16){
//            return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => 'Insurance']);
//        }


        $this->set(compact('module'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $module = $this->Modules->newEmptyEntity();
        if ($this->request->is('post')) {
            $module = $this->Modules->patchEntity($module, $this->request->getData());
            if ($this->Modules->save($module)) {
                $this->Flash->success(__('The module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The module could not be saved. Please, try again.'));
        }
        $products = $this->Modules->Products->find('list', ['limit' => 200]);
        $this->set(compact('module', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;

        $module = $this->Modules->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $module = $this->Modules->patchEntity($module, $this->request->getData());
            if ($this->Modules->save($module)) {
                $this->Flash->success(__('The module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The module could not be saved. Please, try again.'));
        }
        $products = $this->Modules->Products->find('list', ['limit' => 200]);
        $this->set(compact('module', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Module id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $module = $this->Modules->get($id);
        if ($this->Modules->delete($module)) {
            $this->Flash->success(__('The module has been deleted.'));
        } else {
            $this->Flash->error(__('The module could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
