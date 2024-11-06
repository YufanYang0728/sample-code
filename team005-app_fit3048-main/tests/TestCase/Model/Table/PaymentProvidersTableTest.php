<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentProvidersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentProvidersTable Test Case
 */
class PaymentProvidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentProvidersTable
     */
    protected $PaymentProviders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PaymentProviders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PaymentProviders') ? [] : ['className' => PaymentProvidersTable::class];
        $this->PaymentProviders = $this->getTableLocator()->get('PaymentProviders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PaymentProviders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaymentProvidersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
