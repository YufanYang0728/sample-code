<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvestmentFixture
 */
class InvestmentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'investment';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'investment_id' => 1,
                'company_name' => 'Lorem ipsum dolor sit amet',
                'investment_name' => 'Lorem ipsum dolor sit amet',
                'admin_fee' => 1,
                'investment_type' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
