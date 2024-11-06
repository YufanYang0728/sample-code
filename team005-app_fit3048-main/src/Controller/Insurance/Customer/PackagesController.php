<?php
declare(strict_types=1);

namespace App\Controller\Insurance\Customer;

use App\Controller\Insurance\Customer\AppController;

/**
 * Packages Controller
 *
 * @property \App\Model\Table\PackagesTable $Packages
 * @method \App\Model\Entity\Package[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackagesController extends AppController
{

    public function customPackage() {
        $insurances = $this->fetchTable('Insurances')->find()->order('created');
        $this->set(compact('insurances'));

        $profile = $this->fetchTable('Profiles')->find()->where(['user_id' => $this->userId])->first();

    }

    public function add()
    {

        $this->Flash->error(__('Sorry, this feature will be available soon. Please try again later.'));
        return $this->redirect(['action' => 'customPackage']);

        $package = $this->Packages->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();


            $insuranceCount = $this->fetchTable('Insurances')->find()->count();
            for ($i = 0; $i < $insuranceCount; $i++) {
                if ($data["insurance_" . $i] === '0') {
                    unset($data["insurance_data_" . $i]);
                } else {
                    if (!isset($data["insurance_data_" . $i]['amount'])) {
                        $data["insurance_data_" . $i]['amount'] = '';
                    }
                    // ... add checks for other fields as needed ...


                    // Remove extra redundant fields outside insurance_data_x
                    unset($data["payment_wait_time_" . $i]);
                    unset($data["payment_duration_" . $i]);
                }
            }


            // Get all insurances ordered by creation time
            $allInsurances = $this->fetchTable('Insurances')->find()->order(['created' => 'ASC'])->toArray();

            $selectedInsurances = [];
            foreach ($data as $key => $value) {
                if (strpos($key, 'insurance_') !== false && $value == '1') {
                    $index = (int) explode('_', $key)[1];
                    // Push the related insurance entity based on the index
                    $selectedInsurances[] = $allInsurances[$index]->id;
                }
            }

            $packageData = [
                'user_id' => $this->userId,
                'description' => $data['description'],
                'insurances' => [
                    '_ids' => $selectedInsurances
                ]
            ];

            $package = $this->Packages->patchEntity($package, $packageData);

            if ($this->Packages->save($package)) {
                $this->Flash->success(__('Your package has been saved successfully.'));
                return $this->redirect(['controller' => 'Questions', 'action' => 'packageSelection', $this->userId]);

            }
            $this->Flash->error(__('The package could not be saved. Please try again.'));
            return $this->redirect(['action' => 'customPackage']);
        }
    }


    /**
     * Edit method
     *
     * @param string|null $id Package id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $package = $this->Packages->get($id, [
            'contain' => ['Insurances'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $package = $this->Packages->patchEntity($package, $this->request->getData());
            if ($this->Packages->save($package)) {
                $this->Flash->success(__('The package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package could not be saved. Please, try again.'));
        }
        $users = $this->Packages->Users->find('list', ['limit' => 200])->all();
        $insurances = $this->Packages->Insurances->find('list', ['limit' => 200])->all();
        $this->set(compact('package', 'users', 'insurances'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $package = $this->Packages->get($id);
        if ($this->Packages->delete($package)) {
            $this->Flash->success(__('The package has been deleted.'));
        } else {
            $this->Flash->error(__('The package could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
