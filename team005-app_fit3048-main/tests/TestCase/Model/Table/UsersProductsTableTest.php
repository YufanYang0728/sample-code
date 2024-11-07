<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersProductsTable Test Case
 */
class UsersProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersProductsTable
     */
    protected $UsersProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UsersProducts',
        'app.Users',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UsersProducts') ? [] : ['className' => UsersProductsTable::class];
        $this->UsersProducts = $this->getTableLocator()->get('UsersProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsersProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UsersProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
