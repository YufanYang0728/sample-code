<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
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
                'id' => 'c19d7faf-c966-4644-b832-339f61522b08',
                'quizzes_id' => '1c984f5a-4244-4aa0-b7c9-e837226a56f2',
                'title' => 'Lorem ipsum dolor sit amet',
                'answer' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
