<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Client;
use Cake\Routing\Router;
use Cake\Filesystem\File;

/**
 * Superadmin Controller
 *
 */
class SuperadminController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $superadmin = $this->checkAuthorization();
        if (!isset($superadmin)) {
            $this->redirect('/error');
            return;
        }

//        $this->viewBuilder()->setLayout('adminlayout');
//        $this->Courses = $this->fetchTable('Courses');
//        $this->Sections = $this->fetchTable('Sections');
//        $this->Users = $this->fetchTable('Users');
    }

    public function checkAuthorization() {
        $superadminId = $this->Authentication->getIdentity()->get('id');
        $superadmin = $this->fetchTable('Users')->get($superadminId);

        if ($superadmin->level != 1) { // 1 - superadmin, 2 - admin, 3 - students
//            $this->Flash->error("Not Authorized");
            return null;
        }
        $this->set(['name' => $superadmin->first_name . ' ' . $superadmin->last_name]);

        return $superadmin;
    }

    public function display() {
        $this->render('cms');
    }

    /**
     * Edit method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editPages() {

        $aboutUsTextModified = '';
        $tileOneModified = '';

        // Logo Image
        if (!empty($this->request->getData('logo'))
            && $this->request->getData('logo')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('logo');
            $targetPath = WWW_ROOT.'img/logo/yogabuddy_logo.jpg';
            $image->moveTo($targetPath);
        }

        // Call To Action Text
        if ($this->request->is(['post'])) {
            $callToActionText = $this->request->getData('callToAction');
            file_put_contents(WWW_ROOT . 'call_to_action.txt', $callToActionText);
        }

        // About Us Image
        if (!empty($this->request->getData('pfp'))
            && $this->request->getData('pfp')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('pfp');
            //$targetPath = WWW_ROOT.'img/about_us_pfp/userimg.jpg';
            $targetPath = WWW_ROOT.'img/about_us_pfp/ph1.jpg';
            $image->moveTo($targetPath);
        }

        // About Us Text
        if ($this->request->is(['post'])) {
            $aboutUsText = $this->request->getData('aboutUs');
            file_put_contents(WWW_ROOT . 'about_us.txt', $aboutUsText);
        }

        // Slide Images
        if (!empty($this->request->getData('image1'))
            && $this->request->getData('image1')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('image1');
            $targetPath = WWW_ROOT.'/img/slide_image_1/im11.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('image2'))
            && $this->request->getData('image2')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('image2');
            $targetPath = WWW_ROOT.'/img/slide_image_2/im22.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('image3'))
            && $this->request->getData('image3')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('image3');
            $targetPath = WWW_ROOT.'/img/slide_image_3/im33.jpg';
            $image->moveTo($targetPath);
        }

        // Tile Images
        if (!empty($this->request->getData('tile1Image'))
            && $this->request->getData('tile1Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile1Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile1.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('tile2Image'))
            && $this->request->getData('tile2Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile2Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile2.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('tile3Image'))
            && $this->request->getData('tile3Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile3Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile3.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('tile4Image'))
            && $this->request->getData('tile4Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile4Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile4.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('tile5Image'))
            && $this->request->getData('tile5Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile5Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile5.jpg';
            $image->moveTo($targetPath);
        }
        if (!empty($this->request->getData('tile6Image'))
            && $this->request->getData('tile6Image')->getError() === UPLOAD_ERR_OK) {
            $image = $this->request->getData('tile6Image');
            $targetPath = WWW_ROOT.'img/tile_images/tile6.jpg';
            $image->moveTo($targetPath);
        }


        $this->Flash->success(__('Changes Saved'));
        //$this->redirect(['action' => 'display']);
        return $this->redirect(['controller' => 'HomePage', 'action' => 'home']);
    }
}
?>
