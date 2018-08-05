<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DecisionCodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DecisionCodesTable Test Case
 */
class DecisionCodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DecisionCodesTable
     */
    public $DecisionCodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.decision_codes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DecisionCodes') ? [] : ['className' => DecisionCodesTable::class];
        $this->DecisionCodes = TableRegistry::getTableLocator()->get('DecisionCodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DecisionCodes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
