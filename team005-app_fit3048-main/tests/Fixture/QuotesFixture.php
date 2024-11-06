<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuotesFixture
 */
class QuotesFixture extends TestFixture
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
                'id' => '4bee5521-27c0-451c-9024-7145a8a61c28',
                'amount' => 1.5,
                'application_method' => 'Lorem ipsum dolor sit amet',
                'user_id' => 'fd9656bd-525c-4046-bfea-02e9bb391fa9',
                'package_id' => 'dcd0a3df-c808-4c7f-aa9a-6771fb2f63a8',
                'pay_from_super' => 1,
                'pay_wait_days' => 1,
                'payment_end_date' => 1,
                'created' => 1691242365,
                'modified' => 1691242365,
            ],
        ];
        parent::init();
    }
}
