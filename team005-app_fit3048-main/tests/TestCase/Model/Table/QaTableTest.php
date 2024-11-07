<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QaTable Test Case
 */
class QaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QaTable
     */
    protected $Qa;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Qa',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Qa') ? [] : ['className' => QaTable::class];
        $this->Qa = $this->getTableLocator()->get('Qa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Qa);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
