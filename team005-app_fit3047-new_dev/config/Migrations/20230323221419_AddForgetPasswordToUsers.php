<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddForgetPasswordToUsers extends AbstractMigration {
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void {
        $table = $this->table('users');
        $table->addColumn('nonce', 'char', [
            'default' => null,
            'limit' => 128,
            'null' => true,
        ])->addColumn('nonce_expiry', 'timestamp', [
            'default' => null,
            'limit' => null,
            'null' => true,
        ]);
        $table->update();
    }
}
