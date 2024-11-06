<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvestmentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvestmentTable Test Case
 */
class InvestmentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InvestmentTable
     */
    protected $Investment;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Investment',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Investment') ? [] : ['className' => InvestmentTable::class];
        $this->Investment = $this->getTableLocator()->get('Investment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Investment);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InvestmentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
