<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\User;
use Cake\I18n\FrozenTime;
use Cake\Filesystem\File;

/**
 * Admins Controller
 * @property \App\Model\Table\UsersTable $Users
 * @var \App\Model\Table\CoursesTable $Courses
 * @var \App\Model\Table\SectionsTable $Sections
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class AdminsController extends AppController
{
    public $Courses;
    public $Users;
    public $Sections;
    public function initialize(): void
    {
        parent::initialize();

        $admin = $this->checkAuthorization();
        if (!isset($admin)) {
            $this->redirect('/error');
            return;
        }

        $this->viewBuilder()->setLayout('adminlayout');
        $this->Courses = $this->fetchTable('Courses');
        $this->Sections = $this->fetchTable('Sections');
        $this->Users = $this->fetchTable('Users');
    }

    public function checkAuthorization() {
        $admin_id = $this->Authentication->getIdentity()->get('id');
        $admin = $this->fetchTable('Users')->get($admin_id);

        if ($admin->level != 1 && $admin->level != 2) { // 1 - superadmin, 2 - admin, 3 - students
//            $this->Flash->error("Not Authorized");
            return null;
        }
        $this->set(['name' => $admin->first_name . ' ' . $admin->last_name]);

        return $admin;
    }

    /**
     * View method
     *
     * @param string|null $id user id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function adminDashboard() {//$id = null
//        $this->viewBuilder()->setLayout('adminlayout',true);
        //$this->set('id', $id);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     * TODO: Better UI + Related Courses, Certificates, etc. needed
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function adminAdd()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();

            $updateData = [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'level'=>$data['level']
            ];
            $conditions = ['id' => $id];
            $affectedRows = $this->Users->updateAll($updateData, $conditions);

            if ($affectedRows > 0) {
                $this->Flash->success(__('The user has been updated.'));

                return $this->redirect(['action' => 'index']);
            } elseif ($affectedRows === 0) {
                $this->Flash->info(__('No updates were made.'));
            } else {
                $this->Flash->error(__('Failed to update the user. Please try again.'));
            }
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        //get user
        $admin = $this->Users->get($id);
        //get user id
        $userId = $admin->id;
        //delete the record from payment first
        $this->Users->Payments->deleteAll(['user_id' => $userId]);

        //delete from user
        if ($this->Users->delete($admin)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * List available courses
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function adminViewCourses()
    {
        $courses = $this->paginate($this->Courses, [
            'limit' => 10,
            'order' => ['date' => 'desc']
        ]);
        $this->set(compact('courses'));
    }

    // TODO: Create options to View Enrolments, Edit the Course (including sections and quizzes), Delete the Course
    public function viewCourse($courseId = null)
    {
        $course = $this->Courses->get($courseId, [
            'contain' => ['Quizzes', 'Sections'],
        ]);

        $this->set(compact('course'));
    }

    /**
     * Add new available courses
     */
    public function addCourse()
    {
        $course = $this->Courses->newEmptyEntity();
        $uploadedImageFlag = false;
        if ($this->request->is('post')) {
//            debug($this->request);
//            exit();
            if (!empty($this->request->getData('courseImage'))
                && $this->request->getData('courseImage')->getError() === UPLOAD_ERR_OK) {
                $uploadedImageFlag = true;
            } else {
                $this->Flash->log(__('Upload Not Recognised'));
                $course->image = '/img/course_images/default_image/img.jpg';
            }
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            $currentDateTime = new FrozenTime(); // Creates a new instance with the current date and time
            $course->date = $currentDateTime;
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));
                if ($uploadedImageFlag) {
                    $image = $this->request->getData('courseImage');
                    $targetPath = WWW_ROOT.'img/course_images/'. $course->id .'.jpg';
                    $image->moveTo($targetPath);
                    $course->image = '/img/course_images/'. $course->id .'.jpg';
                }
                $this->Courses->save($course);
                return $this->redirect(['action' => 'adminViewCourses']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Edit method
     *
     * @param string|null $courseId Course id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editCourse($courseId = null)
    {
        $course = $this->Courses->get($courseId, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if (!empty($this->request->getData('courseImage'))
                && $this->request->getData('courseImage')->getError() === UPLOAD_ERR_OK) {
                $image = $this->request->getData('courseImage');
                $targetPath = WWW_ROOT.'img/course_images/'. $course->id .'.jpg';
                $image->moveTo($targetPath);
                $course->image = '/img/course_images/'. $course->id .'.jpg';
            }
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'viewCourse', $courseId]);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Delete method
     *
     * @param string|null $courseId Course id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function deleteCourse($courseId = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($courseId, ['contain' => 'Sections']);

        // Delete all associated sections and their videos
        foreach ($course->sections as $section) {
            // Delete the video file
            $videoFile = WWW_ROOT . 'videos' . DS . $section->video;
            if (file_exists($videoFile)) {
                $file = new File($videoFile);
                $file->delete();
            }

            // Delete the section
            $this->Courses->Sections->delete($section);
        }

        // Delete the course itself
        if ($this->Courses->delete($course)) {
            $this->Flash->success(__('The course and its sections have been deleted.'));
        } else {
            $this->Flash->error(__('The course and its sections could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'adminViewCourses']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function indexSection()
    {
        $this->paginate = [
            'contain' => ['Courses'],
        ];

        $sections = $this->paginate($this->Sections);
        $this->viewBuilder()->setLayout('default');

        $this->set(compact('sections'));
    }
    /**
     * View method
     *
     * @param string|null $id Section id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewSection($id = null)
    {
        $section = $this->Sections->get($id, [
            'contain' => ['Courses'],
        ]);
        $this->viewBuilder()->setLayout('default');

        $this->set(compact('section'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function addSection()
    {
        $section = $this->Sections->newEmptyEntity();
        if ($this->request->is('post')) {
            $section = $this->Sections->patchEntity($section, $this->request->getData());
            if (!empty($this->request->getData('video_file'))) {
                $video_file = $this->request->getData('video_file');
                $filename = time() . '_' . $video_file->getClientFilename();
                $video_file->moveTo(WWW_ROOT . 'videos' . DS . $filename);
                $section->video = $filename;
            }
            if ($this->Sections->save($section)) {
                return $this->redirect(['action' => 'viewCourse', $section->course_id]);
            }
            $this->Flash->error(__('The section could not be saved. Please, try again.'));
        }
        $courses = $this->Sections->Courses->find('list', ['limit' => 200])->all();
        $this->set(compact('section', 'courses'));
        $this->set('_serialize', ['section']);
        $this->viewBuilder()->setOption('serialize', ['section']);
    }

    public function show($id = null)
    {
        $section = $this->Sections->get($id, [
            'contain' => ['Courses'],
        ]);

        $this->set(compact('section'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Section id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editSection($id = null)
    {
        $section = $this->Sections->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $oldVideo = $section->video;
            $section = $this->Sections->patchEntity($section, $this->request->getData());
            $newVideo = $this->request->getData('new_video');

            if (!empty($newVideo) && $newVideo->getError() === UPLOAD_ERR_OK) {
                // Delete the old video
                if (!empty($oldVideo)) {
                    unlink(WWW_ROOT . 'videos/' . $oldVideo);
                }

                // Upload the new video
                $fileName = $newVideo->getClientFilename();
                $newVideo->moveTo(WWW_ROOT . 'videos/' . $fileName);

                // Update the Section entity with the new video filename
                $section->video = $fileName;
            } else {
                // Keep the old video filename
                $section->video = $oldVideo;
            }

            if ($this->Sections->save($section)) {
                //$this->Flash->success(__('The section has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['action' => 'viewCourse', $section->course_id]);
            }
            $this->Flash->error(__('The section could not be saved. Please, try again.'));
        }
        $courses = $this->Sections->Courses->find('list', ['limit' => 200])->all();
        $this->set(compact('section', 'courses'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Section id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleteSection($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $section = $this->Sections->get($id);
        if ($this->Sections->delete($section)) {
            //$this->Flash->success(__('The section has been deleted.'));
        } else {
            //$this->Flash->error(__('The section could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['action' => 'viewCourse', $section->course_id]);
    }
    public function changePassword($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // Used a different validation set in Model/Table file to ensure both fields are filled
            $user = $this->Users->patchEntity($user, $this->request->getData(), ['validate' => 'resetPassword']);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller' => 'Admins','action' => 'index']);

            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

}
