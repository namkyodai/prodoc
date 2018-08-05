<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RevisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RevisionsTable Test Case
 */
class RevisionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RevisionsTable
     */
    public $Revisions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.revisions',
        'app.documents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Revisions') ? [] : ['className' => RevisionsTable::class];
        $this->Revisions = TableRegistry::getTableLocator()->get('Revisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Revisions);

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
