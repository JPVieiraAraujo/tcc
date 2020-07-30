<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasMotorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasMotorasTable Test Case
 */
class AreasMotorasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasMotorasTable
     */
    public $AreasMotoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AreasMotoras',
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
        $config = TableRegistry::getTableLocator()->exists('AreasMotoras') ? [] : ['className' => AreasMotorasTable::class];
        $this->AreasMotoras = TableRegistry::getTableLocator()->get('AreasMotoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreasMotoras);

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
