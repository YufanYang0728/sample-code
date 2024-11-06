<?php
declare(strict_types=1);

namespace App\Controller;

use Stripe;

/**
 * Payments Controller
 *
 * @property \App\Model\Table\PaymentsTable $Payments
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        // Controller-level function/action whitelist for authentication
        $this->Authentication->allowUnauthenticated(['index','payment','addStudent']);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $payments = $this->paginate($this->Payments);
        $this->set('title', 'Stripe Payment Gateway Integration');
        $this->set(compact('payments'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('payment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payment = $this->Payments->newEmptyEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $users = $this->Payments->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('payment', 'users'));
    }

    public function payment()
    {
        require_once VENDOR_PATH . '/stripe/stripe-php/init.php';

        Stripe\Stripe::setApiKey(STRIPE_SECRET);
        $stripe = Stripe\Charge::create([
            'amount' => 50 * 100,
            'currency' => 'aud',
            'source' => $_REQUEST['stripeToken'],
            'description' => 'Test payment via Stripe From Yogabuddy payment by RANJJ consultancy',
        ]);

        // after successful payment, you can store payment related information into your database
        $this->Flash->success(__('Payment done successfully'));


        $paymentData = [
            'user_id' => $_SESSION['id'],
            'type' => 'Stripe', // Set the type to Stripe
        ];


        $this->addStudent($paymentData);
    }

    public function addStudent($data)
    {
        $payment = $this->Payments->newEmptyEntity();
        $payment = $this->Payments->patchEntity($payment, $data);

//        debug($payment);
//        exit;

        if ($this->Payments->save($payment)) {
            $this->Flash->success(__('The payment has been saved.'));

            return $this->redirect(['controller' => 'Students', 'action' => 'myCourses']);
        }
        $this->Flash->error(__('The payment could not be saved. Please, try again.'));

        $users = $this->Payments->Users->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'users'));
    }
}
