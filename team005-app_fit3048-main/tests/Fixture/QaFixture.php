<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QaFixture
 */
class QaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'qa';
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
                'Question' => 'Lorem ipsum dolor sit amet',
                'Answer' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
