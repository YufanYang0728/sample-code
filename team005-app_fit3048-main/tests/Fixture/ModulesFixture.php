<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModulesFixture
 */
class ModulesFixture extends TestFixture
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
                'module_id' => 1,
                'module_name' => 'Lorem ipsum dolor sit amet',
                'paid' => 1,
            ],
        ];
        parent::init();
    }
}
