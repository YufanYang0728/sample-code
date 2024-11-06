<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OptionsFixture
 */
class OptionsFixture extends TestFixture
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
                'id' => 'be7df5db-9b51-44fe-a980-25669a143660',
                'questions_id' => '9205eb20-67be-4a06-8922-992a1a81f7ee',
                'prompt' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
