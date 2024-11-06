<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddImageToCourses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('courses');
        $table->addColumn('image', 'string', [
            'default' => '/img/course_images/default_image/img.jpg',
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
