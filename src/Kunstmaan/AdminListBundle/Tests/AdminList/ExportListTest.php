<?php

namespace Kunstmaan\AdminListBundle\Tests\AdminList;

use Kunstmaan\AdminListBundle\AdminList\Configurator\ExportListConfiguratorInterface;
use Kunstmaan\AdminListBundle\AdminList\ExportList;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-03-19 at 10:47:14.
 */
class ExportListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ExportList
     */
    protected $object;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $configurator;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->configurator = $this->getMock('Kunstmaan\AdminListBundle\AdminList\Configurator\ExportListConfiguratorInterface');
        $this->configurator
            ->expects($this->once())
            ->method('buildExportFields');
        $this->configurator
            ->expects($this->once())
            ->method('buildIterator');

        $this->object = new ExportList($this->configurator);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\ExportList::__construct
     * @covers Kunstmaan\AdminListBundle\AdminList\ExportList::getExportColumns
     */
    public function testGetExportColumns()
    {
        $fields = array('field1', 'field2', 'field3');
        $this->configurator
            ->expects($this->once())
            ->method('getExportFields')
            ->will($this->returnValue($fields));

        $this->assertEquals($fields, $this->object->getExportColumns());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\ExportList::getIterator
     */
    public function testGetIterator()
    {
        $iterator = $this->getMock('\Iterator');
        $this->configurator
            ->expects($this->once())
            ->method('getIterator')
            ->will($this->returnValue($iterator));

        $this->assertInstanceOf('\Iterator', $iterator);
        $this->assertEquals($iterator, $this->object->getIterator());
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\ExportList::getStringValue
     */
    public function testGetStringValue()
    {
        $item = array('id' => 1);

        $this->configurator
            ->expects($this->once())
            ->method('getStringValue')
            ->with($item, 'id')
            ->will($this->returnValue($item['id']));

        $this->assertEquals(1, $this->object->getStringValue($item, 'id'));
    }
}
