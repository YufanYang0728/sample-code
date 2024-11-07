<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'gender' => 'Lorem ip',
                'state' => 'Lorem ipsum dolor sit amet',
                'tobacco_smoked' => 1,
                'occupation' => 'Lorem ipsum dolor sit amet',
                'annual_income' => 1.5,
                'created' => 1692025790,
                'modified' => 1692025790,
                'home_loan' => 1.5,
                'debt' => 1.5,
                'date_of_birth' => '2023-08-14',
            ],
        ];
        parent::init();
    }
}
