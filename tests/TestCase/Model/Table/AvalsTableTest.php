<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvalsTable Test Case
 */
class AvalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AvalsTable
     */
    public $Avals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Avals',
        'app.Alunos',
        'app.AreasMotoras',
        'app.AreasAfetivas',
        'app.AreasCognitivas',
        'app.AreasSocials',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Avals') ? [] : ['className' => AvalsTable::class];
        $this->Avals = TableRegistry::getTableLocator()->get('Avals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avals);

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
