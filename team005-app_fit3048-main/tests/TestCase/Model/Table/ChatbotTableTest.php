<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChatbotTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChatbotTable Test Case
 */
class ChatbotTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChatbotTable
     */
    protected $Chatbot;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Chatbot',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chatbot') ? [] : ['className' => ChatbotTable::class];
        $this->Chatbot = $this->getTableLocator()->get('Chatbot', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chatbot);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChatbotTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
