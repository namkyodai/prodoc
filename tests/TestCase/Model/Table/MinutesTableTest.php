<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MinutesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MinutesTable Test Case
 */
class MinutesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MinutesTable
     */
    public $Minutes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.minutes',
        'app.subjects',
        'app.statuss',
        'app.peoples',
        'app.activities',
        'app.work_packages',
        'app.areas',
        'app.disciplines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Minutes') ? [] : ['className' => MinutesTable::class];
        $this->Minutes = TableRegistry::getTableLocator()->get('Minutes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Minutes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
