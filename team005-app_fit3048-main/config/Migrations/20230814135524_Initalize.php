<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initalize extends AbstractMigration
{
    public function change(): void
    {
        // Insurances Table
        $this->table('insurances', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'char', ['limit' => 36])
            ->addColumn('name', 'char', ['limit' => 36])
            ->addColumn('description', 'text')
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->create();

        // Packages Table
        $this->table('packages', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'char', ['limit' => 36])
            ->addColumn('user_id', 'integer', ['limit' => 10])
            ->addColumn('description', 'text')
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->create();

        // Insurances Packages Table
        $this->table('insurances_packages', ['id' => false, 'primary_key' => ['insurance_id', 'package_id']])
            ->addColumn('package_id', 'char', ['limit' => 36])
            ->addColumn('insurance_id', 'char', ['limit' => 36])
            ->create();

        // Questions Table
        $this->table('questions', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'char', ['limit' => 36])
            ->addColumn('user_id', 'integer', ['limit' => 10])
            ->addColumn('prompt', 'text')
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addColumn('stage', 'string', ['limit' => 255])
            ->addColumn('audience_type', 'string', ['limit' => 255])
            ->addColumn('possible_answers', 'text')
            ->addColumn('question_number', 'integer')
            ->create();

        // Quotes Table
        $this->table('quotes', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'char', ['limit' => 36])
            ->addColumn('user_id', 'integer', ['limit' => 10])
            ->addColumn('package_id', 'char', ['limit' => 36])
            ->addColumn('amount', 'decimal', ['precision' => 12, 'scale' => 2])
            ->addColumn('application_method', 'string', ['limit' => 200])
            ->addColumn('pay_from_super', 'boolean')
            ->addColumn('pay_wait_days', 'integer', ['null' => true, 'limit' => 3])
            ->addColumn('payment_end_date', 'integer', ['null' => true, 'limit' => 4])
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->create();

        // Foreign Keys for packages
        $this->table('packages')
            ->addForeignKey('user_id', 'users', 'user_id')
            ->update();

        // Foreign Keys for insurances_packages
        $this->table('insurances_packages')
            ->addForeignKey('insurance_id', 'insurances', 'id')
            ->addForeignKey('package_id', 'packages', 'id')
            ->update();

        // Foreign Keys for questions
        $this->table('questions')
            ->addForeignKey('user_id', 'users', 'user_id')
            ->update();

        // Foreign Keys for quotes
        $this->table('quotes')
            ->addForeignKey('user_id', 'users', 'user_id')
            ->addForeignKey('package_id', 'packages', 'id')
            ->update();

        // Create profiles table
        $userDetails = $this->table('profiles', ['id' => false, 'primary_key' => ['id']]);
        $userDetails->addColumn('id', 'integer', ['identity' => true])
            ->addColumn('user_id', 'integer', ['limit' => 10])
            ->addColumn('gender', 'string', ['limit' => 10])
            ->addColumn('state', 'string', ['limit' => 50])
            ->addColumn('tobacco_smoked', 'boolean')
            ->addColumn('occupation', 'string', ['limit' => 255])
            ->addColumn('annual_income', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->addColumn('home_loan', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('debt', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('date_of_birth', 'date')
            ->addForeignKey('user_id', 'users', 'user_id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
}
