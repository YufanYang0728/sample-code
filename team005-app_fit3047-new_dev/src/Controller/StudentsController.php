<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Students Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \Authentication\Controller\Component\AuthenticationComponent Authentication
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    public $student;

    public function initialize(): void
    {
        parent::initialize();

        $student = $this->checkAuthorization();

        if (!isset($student)) {
            $this->redirect('/error');

            return;
        }
        if ($student->level == 3 && count($student->payments) <= 0) {
            $this->Flash->error('Please pay for the membership');
//            debug($student);
//            exit();
            $this->redirect(['controller' => 'Payments','action' => 'index']);
            return;
        }
        $this->student = $student;
//        debug($student);
//        exit;
//        $this->Courses = $this->fetchTable('Courses');
        $this->Users = $this->fetchTable('Users');
    }

    public function checkAuthorization()
    {
        $id = $this->Authentication->getIdentity()->get('id');
        $student = $this->fetchTable('Users')->get($id, ['contain' => ['Courses','Payments']]);

        if ($student->level != 1 && $student->level != 2 && $student->level != 3) {
            $this->Flash->error('Not Authorized');

            return null;
        }

        $this->set(['isAdmin' => ($student->level == 1 || $student->level == 2)]);
        $this->set(['name' => $student->first_name . ' ' . $student->last_name]);
        $_SESSION['name']=($student->first_name . ' ' . $student->last_name);
        if ($student->level == 1) {
            $_SESSION['isadmin'] = true;
        } else {
            $_SESSION['isadmin'] = false;
        }

        return $student;
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function myCourses()
    {
        $this->set(['student' => $this->student]);
//        if (!isset($this->student)) {
//            return $this->redirect(['controller' => 'Payments', 'action' => 'index']);
//        } else
        if (!isset($this->student->courses)) {
            $this->set('courses', []);
        } else {
            $this->set(['courses' => $this->student->courses]);
        }
    }

    /**
     * TODO: Must exclude unenrolled courses -> Enrolment control is needed
     * List available courses
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function availableCourses()
    {
        $this->set(['student' => $this->student]);

        $this->paginate = [];

        $courses = $this->paginate($this->fetchTable('Courses'), [
            'limit' => 10,
            'order' => ['date' => 'desc'],
        ]);

        $idArray = array_map(function ($value) {
            return $value->id;
        }, $this->student->courses);

        $unenrolled_courses = array_filter($courses->toArray(), function ($c) use ($idArray) {
            return !in_array($c->id, $idArray);
        });

        $this->set(compact('unenrolled_courses'));
    }

    public function enrolment($courseId = null)
    {

        $course = $this->fetchTable('Courses')->find('all', [
            'conditions' => ['id' => $courseId],
        ])
            ->contain(['Sections', 'Quizzes'])
            ->first();

        $this->set(compact('course'));
    }

    public function enrol($courseId = null)
    {
        if (!$this->request->is('put')) {
            return $this->myCourses();
        }

        $course = $this->fetchTable('Courses')->find('all', [
            'conditions' => ['id' => $courseId],
            'limit' => 1,
        ])->first();

        if (isset($course)) {
            $idArray = array_map(function ($value) {
                return $value->id;
            }, $this->student->courses);

            if (!in_array($courseId, $idArray)) {
                $idArray[] = $courseId;
            } else {
                $this->Flash->error('Already Enrolled');
            }

            $enrolData = [
                'courses' => [
                    '_ids' => $idArray,
                ],
            ];

            $this->student = $this->Users->patchEntity(
                $this->student,
                $enrolData,
                ['associated' => ['Courses'], 'validate' => false]
            );

            $this->Users->save($this->student);
            $this->redirect(['action' => 'myCourses']);
        } else {
            $this->Flash->error('Invalid course ID');
        }
    }

    public function profile()
    {
        if (isset($_SESSION['id'])) {
            $user = $this->Users->get($_SESSION['id'], [
                'contain' => [],
            ]);

            if ($this->request->is(['patch', 'post', 'put',])) {
                $data = $this->request->getData();

                $updateData = [
                    'email'=>$data['email'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                ];

                $conditions = ['id' => $_SESSION['id']];

                $affectedRows = $this->Users->updateAll($updateData, $conditions);

                if ($affectedRows > 0) {
                    $this->Flash->success(__('The user has been updated.'));

                    return $this->redirect(['action' => 'myCourses']);
                } elseif ($affectedRows === 0) {
                    $this->Flash->info(__('No updates were made.'));
                } else {
                    $this->Flash->error(__('Failed to update the user. Please try again.'));
                }
            }

            $this->set(compact('user'));
        } else {
            echo "<script>alert('This is a message.');</script>";
        }
    }
}
