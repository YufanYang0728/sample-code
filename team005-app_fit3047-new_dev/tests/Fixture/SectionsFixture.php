<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SectionsFixture
 */
class SectionsFixture extends TestFixture
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
                'id' => 'a0087ecb-7e7b-4e2b-94ef-bcfaf41954c5',
                'course_id' => 'e597ba1a-18d3-47f0-9b14-3dc38da562e4',
                'description' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'video' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
