<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsModules Controller
 *
 * @property \App\Model\Table\ProductsModulesTable $ProductsModules
 * @method \App\Model\Entity\ProductsModule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsModulesController extends AppController
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


        $this->paginate = [
            'contain' => ['Products', 'Modules'],
        ];
        $productsModules = $this->paginate($this->ProductsModules);

        $this->set(compact('productsModules'));

    }

    /**
     * View method
     *
     * @param string|null $id Products Module id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsModule = $this->ProductsModules->get($id, [
            'contain' => ['Products', 'Modules'],
        ]);

        $this->set(compact('productsModule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsModule = $this->ProductsModules->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsModule = $this->ProductsModules->patchEntity($productsModule, $this->request->getData());
            if ($this->ProductsModules->save($productsModule)) {
                $this->Flash->success(__('The products module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products module could not be saved. Please, try again.'));
        }
        $products = $this->ProductsModules->Products->find('list', ['limit' => 200]);
        $modules = $this->ProductsModules->Modules->find('list', ['limit' => 200]);
        $this->set(compact('productsModule', 'products', 'modules'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Module id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsModule = $this->ProductsModules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsModule = $this->ProductsModules->patchEntity($productsModule, $this->request->getData());
            if ($this->ProductsModules->save($productsModule)) {
                $this->Flash->success(__('The products module has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products module could not be saved. Please, try again.'));
        }
        $products = $this->ProductsModules->Products->find('list', ['limit' => 200]);
        $modules = $this->ProductsModules->Modules->find('list', ['limit' => 200]);
        $this->set(compact('productsModule', 'products', 'modules'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Module id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsModule = $this->ProductsModules->get($id);
        if ($this->ProductsModules->delete($productsModule)) {
            $this->Flash->success(__('The products module has been deleted.'));
        } else {
            $this->Flash->error(__('The products module could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
