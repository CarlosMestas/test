<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudenttTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudenttTable Test Case
 */
class StudenttTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudenttTable
     */
    public $Studentt;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Studentt'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Studentt') ? [] : ['className' => StudenttTable::class];
        $this->Studentt = TableRegistry::getTableLocator()->get('Studentt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Studentt);

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
