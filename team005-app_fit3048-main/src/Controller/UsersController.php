<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
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

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));

    }


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {


        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
        $user = $this->Users->get($id, [
            'contain' => ['Packages', 'Profiles', 'Quotes'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->viewBuilder()->setLayout('login-signup');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($result = $this->Users->save($user)) {
                $this->Authentication->setIdentity($result);
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['controller' => 'modules', 'action' => 'dashboard']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Profile method
     *
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function profile()
    {

        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
        $id = $this->Authentication->getIdentity()->get('user_id');
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'profile']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->redirect(['controller' => 'Users', 'action' => 'index']);
        endif;
        return $this->redirect(['action' => 'logout']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login', 'add', 'passwordreset','passwordresetcode','passwordchange']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login-signup');
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'dashboard',
            ]);

            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
        }
    }

    public function admin()
    {
        //redirect if the user is not an admin
        if ($this->Authentication->getIdentity()->getOriginalData()->role != 'admin') :
            $this->redirect(['controller' => 'Error', 'action' => 'accessdenied']);
        endif;

        if ($this->Authentication->getIdentity()->getOriginalData()->role == 'admin') :
            $this->viewBuilder()->setLayout('defaultAdmin');
        endif;
    }


    public function dashboard()
    {
        $role = $this->Authentication->getIdentity()->get('role');
        if ($role == 'user') {
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Modules',
                'action' => 'dashboard',
            ]);
        }

        elseif ($role == 'admin') {
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'admin',
            ]);
        }
        else {
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'login',
            ]);
        }

        return $this->redirect($redirect);
    }
    public function passwordreset()
    {

    }
    public function passwordresetcode()
    {

    }
    public function passwordchange()
    {

    }

}

