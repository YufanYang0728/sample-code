<?php
declare(strict_types=1);

namespace App\Controller\Insurance\Customer;

use App\Controller\Insurance\Customer\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $questions = $this->paginate($this->Questions);

        $profile = $this->fetchTable('Profiles')->find()->where(['user_id' => $this->userId])->first();
        $this->set(compact('questions', 'profile'));
    }

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('question'));
    }

    public function packageSelection($userId) {
        $profile = $this->fetchTable('Profiles')->find()->where(['user_id' => $userId])->first();
        $this->set(compact('profile'));
    }

    public function start()
    {
        $questions = $this->Questions->find('all')
            ->where(['stage' => 'Screening'])
            ->order(['question_number' => 'ASC'])
            ->toArray();

        if (!$questions) {
            $this->Flash->error('There are no questions available at this time.');
            return $this->redirect(['action' => 'index']);
        }

        $this->set(compact('questions'));

//        // Create a session variable to store the answers
//        $this->request->getSession()->write('answers', []);
//

        $this->render('questionnaire');
    }

    public function startPremadeQuestionnaire()
    {
        $questions = $this->Questions->find('all')
            ->where(['stage' => 'Premade', 'audience_type' => 'all'])
            ->order(['question_number' => 'ASC'])
            ->toArray();

        if (!$questions) {
            $this->Flash->error('There are no questions available at this time.');
            return $this->redirect(['action' => 'index']);
        }

        $this->set(compact('questions'));

//        // Create a session variable to store the answers
//        $this->request->getSession()->write('answers', []);
//

        $this->render('premade_questionnaire');
    }

    private function convertToDate($dateString) {
        $date = \DateTime::createFromFormat('d/m/Y', $dateString);
        return $date ? $date->format('Y-m-d') : false;
    }

    public function storeProfile()
    {
        $this->request->allowMethod(['post']);
        $data = $this->request->getData('answers');

        $mapping = [
            1 => 'gender',
            2 => 'date_of_birth',
            3 => 'state',
            4 => 'tobacco_smoked',
            5 => 'occupation',
            6 => 'annual_income',
            7 => 'home_loan',
            8 => 'debt'
        ];

        $profileData = [];

        function isValidDateFormat($date) {
            return preg_match('/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/[0-9]{4}$/', $date);
        }

        foreach ($data as $key => $value) {
            if (isset($mapping[$key])) {
                $fieldName = $mapping[$key];

                if ($fieldName === 'date_of_birth') {
                    if (!isValidDateFormat($value)) {
                        $this->Flash->error(__('The profile could not be saved. Please try again.'));
                        return $this->redirect(['action' => 'start']);
                    }
                    $value = $this->convertToDate($value);
                }

                if ($fieldName === 'tobacco_smoked') {
                    $value = $value === 'Yes';
                }

                $profileData[$fieldName] = $value;
            } else {
                $this->Flash->error(__('The profile could not be saved. Please try again.'));
                return $this->redirect(['action' => 'start']);
            }
        }

        $profileData['user_id'] = $this->userId;
        $profilesTable = $this->fetchTable('Profiles');

        $profile = $profilesTable->find()
            ->where(['user_id' => $this->userId])
            ->first();

        if ($profile) {
            $profile = $profilesTable->patchEntity($profile, $profileData);
        } else {
            $profile = $profilesTable->newEntity($profileData);
        }

        if ($profilesTable->save($profile)) {
            $this->Flash->success(__('The profile has been saved.'));
            return $this->redirect(['action' => 'packageSelection', $this->userId]);
        } else {
            $this->Flash->error(__('The profile could not be saved. Please try again.'));
            return $this->redirect(['action' => 'start']);
        }

    }

    public function reviewAnswers($userId = null)
    {
        $questions = $this->Questions->find()
            ->select(['question_number', 'prompt'])
            ->where(['stage' => 'Screening'])
            ->order(['question_number' => 'ASC'])
            ->toArray();

        $profile = $this->fetchTable('Profiles')->find()->where(['user_id' => $userId])->first();
        $this->set(compact('questions'));

        unset($profile['created']);
        unset($profile['modified']);

        $dateTimeObject = $profile['date_of_birth']; // Get the FrozenTime object
        $date = $dateTimeObject->format('Y-m-d'); //extract date part
        $profile['date_of_birth']=$date;

        $profileArray = $profile->toArray();
        $savedanswerArray = array_values($profileArray);


        $elementToMove = $savedanswerArray[9]; // Store the value of int 9
        unset($savedanswerArray[9]); // Remove the element from its original position
        array_splice($savedanswerArray, 3, 0, $elementToMove); // Insert the element at position 2

        $this->set(compact('profileArray'));
        $this->set(compact('savedanswerArray'));
    }

    public function selectDesignatedPremadeQuestionnaire()
    {
        $this->request->allowMethod(['post']);

        $data = $this->request->getData('answers');

        $married = isset($data[1]) && $data[1] === "Yes";
        $dependents = isset($data[2]) && $data[2] === "Yes";
        $retired = isset($data[3]) && $data[3] === "Yes";
        $this->request->getSession()->write('married', $married);
        $this->request->getSession()->write('dependents', $dependents);
        $this->request->getSession()->write('retired', $retired);


        $this->set(compact('married', 'dependents', 'retired'));
    }


    public function startDesignatedPremadeQuestionnaire() {

        $married = $this->request->getSession()->read('married');
        $dependents = $this->request->getSession()->read('dependents');
        $audience_type = "Single";
        if ($married) {
            if ($dependents) {
                $audience_type = "Married With Kids";
            } else {
                $audience_type = "Married";
            }
        } else {
            if ($dependents) {
                $audience_type = "Single Parent";
            }
        }
        $this->request->getSession()->delete('married');
        $this->request->getSession()->delete('dependents');
        $this->request->getSession()->delete('retired');

        $questions = $this->Questions->find('all')
            ->where(['stage' => 'Premade', 'audience_type' => $audience_type])
            ->order(['question_number' => 'ASC'])
            ->toArray();

        if (!$questions) {
            $this->Flash->error('There are no questions available at this time.');
            return $this->redirect(['action' => 'index']);
        }

        $this->set(compact('questions'));
    }


    public function startDesignatedPremadeQuestionnaireRetired() {

        $questions = $this->Questions->find('all')
            ->where(['stage' => 'Premade', 'audience_type' => 'Retired'])
            ->order(['question_number' => 'ASC'])
            ->toArray();

        if (!$questions) {
            $this->Flash->error('There are no questions available at this time.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('questions'));
        $this->render('start_designated_premade_questionnaire');
    }

    public function compute()
    {
        $this->request->allowMethod(['post']);
        $data = $this->request->getData('answers');

        $packages = [];
        $insurances = $this->fetchTable('Insurances')->find()->where(['name !=' => 'Trauma/Critical Illness']);


        foreach ($insurances as $key => $value) {
            $key = $key + 1; // without this, it doesnt work
            ($data[$key] === 'Yes') ? $packages[$value->name] = $value->description : $packages[$value->name] = null;
        }

        $this->set(compact('packages'));

        $profile = $this->fetchTable('Profiles')->find()->where(['user_id' => $this->userId])->first();
        $this->set([
            'income' => $profile->annual_income,
            'home_loan' => $profile->home_loan,
            'debt' => $profile->debt
        ]);

        $this->render('recommend');
    }

    public function confirm()
    {
        $this->Flash->error(__('Sorry, this feature will be available soon. Please try again later.'));
        return $this->redirect(['controller' => 'Questions', 'action' => 'packageSelection', $this->userId, 'prefix' => 'Insurance/Customer']);
    }

    public function cancel()
    {
    }

}
