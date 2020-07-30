<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasAfetivasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasAfetivasTable Test Case
 */
class AreasAfetivasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasAfetivasTable
     */
    public $AreasAfetivas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AreasAfetivas',
        'app.Avals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AreasAfetivas') ? [] : ['className' => AreasAfetivasTable::class];
        $this->AreasAfetivas = TableRegistry::getTableLocator()->get('AreasAfetivas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreasAfetivas);

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
