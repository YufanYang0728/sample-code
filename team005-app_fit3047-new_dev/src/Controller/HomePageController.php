<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Home page Controller
 *
 */
class HomePageController extends AppController
{
    public function initialize(): void {
        parent::initialize();

        // Controller-level function/action whitelist for authentication
        $this->Authentication->allowUnauthenticated(['home']);
    }

    public function home() {
        $isLogged = $this->checkAuth();
        if ($this->checkAuth()) {
            $id = $this->Authentication->getIdentity()->get('id');
            if ($id != null) {
                $level = $this->fetchTable('Users')->get($id)->level;
                $isAdmin = ($level == 1 || $level == 2);
                $isSuperAdmin = $level == 1;
            } else {
                $isAdmin = false;
                $isSuperAdmin = false;
            }

        } else {
            $isAdmin = false;
            $isSuperAdmin = false;
        }

//        $this->getRequest()->getSession()->write('Auth.isLogged', $isLogged);
//        $this->getRequest()->getSession()->write('Auth.isAdmin', $isAdmin);

        $this->set(compact('isLogged', 'isAdmin', 'isSuperAdmin'));
    }

    public function checkAuth() {
        $result = $this->Authentication->getResult();
        return $result && $result->isValid();
    }

    public function checkAuthSuperAdmin() {
        $superadminId = $this->Authentication->getIdentity()->get('id');
        $superadmin = $this->fetchTable('Users')->get($superadminId);

        if ($superadmin->level != 1) { // 1 - superadmin, 2 - admin, 3 - students
            return false;
        }
        return true;
    }



    public function editText() {
        if (!$this->checkAuthSuperAdmin()) {
            $this->redirect('/error');
            return;
        }
        debug($this->request);exit();
        if ($this->request->is('put')) {
//            $this->aboutUsText = $this->request->getData('aboutUsText');
            $this->set(compact('aboutUsText')); // Pass the text as a variable to the template
            return $this->response->withStatus(200);
        }
        return $this->response->withStatus(400);
    }

}
