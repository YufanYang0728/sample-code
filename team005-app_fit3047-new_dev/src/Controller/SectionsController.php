<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sections Controller
 *
 * @property \App\Model\Table\SectionsTable $Sections
 * @method \App\Model\Entity\Section[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SectionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $admin = $this->checkAuthorization();
        if (!isset($admin)) {
            $this->redirect('/error');
            return;
        }
        $this->viewBuilder()->setLayout('adminlayout');

        // Controller-level function/action whitelist for authentication
        $this->Authentication->allowUnauthenticated(['view']);
    }

    public function checkAuthorization() {
        $admin_id = $this->Authentication->getIdentity()->get('id');
        $admin = $this->fetchTable('Users')->get($admin_id);

        if ($admin->level != 1 && $admin->level != 2) { // 1 - superadmin, 2 - admin, 3 - students
//            $this->Flash->error("Not Authorized");
            return null;
        }
        return $admin;
    }

    /**
     * View method
     *
     * @param string|null $id Section id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $section = $this->Sections->get($id, [
            'contain' => ['Courses'],
        ]);
        $this->viewBuilder()->setLayout('default');

        $this->set(compact('section'));
    }

}
