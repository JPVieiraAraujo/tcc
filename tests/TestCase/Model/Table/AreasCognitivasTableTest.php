<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasCognitivasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasCognitivasTable Test Case
 */
class AreasCognitivasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasCognitivasTable
     */
    public $AreasCognitivas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AreasCognitivas',
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
        $config = TableRegistry::getTableLocator()->exists('AreasCognitivas') ? [] : ['className' => AreasCognitivasTable::class];
        $this->AreasCognitivas = TableRegistry::getTableLocator()->get('AreasCognitivas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreasCognitivas);

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
