<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasSocialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasSocialsTable Test Case
 */
class AreasSocialsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasSocialsTable
     */
    public $AreasSocials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AreasSocials',
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
        $config = TableRegistry::getTableLocator()->exists('AreasSocials') ? [] : ['className' => AreasSocialsTable::class];
        $this->AreasSocials = TableRegistry::getTableLocator()->get('AreasSocials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreasSocials);

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
