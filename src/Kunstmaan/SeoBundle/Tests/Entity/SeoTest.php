<?php

namespace Kunstmaan\SeoBundle\Tests\Entity;

use Kunstmaan\SeoBundle\Entity\Seo;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-18 at 12:21:52.
 */
class SeoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Seo
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Seo();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getMetaAuthor
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setMetaAuthor
     */
    public function testGetSetMetaAuthor()
    {
        $this->object->setMetaAuthor('Author Name');
        $this->assertEquals('Author Name', $this->object->getMetaAuthor());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getMetaDescription
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setMetaDescription
     */
    public function testGetSetMetaDescription()
    {
        $this->object->setMetaDescription('Meta Description');
        $this->assertEquals('Meta Description', $this->object->getMetaDescription());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getMetaKeywords
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setMetaKeywords
     */
    public function testGetSetMetaKeywords()
    {
        $this->object->setMetaKeywords('Meta Keywords');
        $this->assertEquals('Meta Keywords', $this->object->getMetaKeywords());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getMetaRobots
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setMetaRobots
     */
    public function testGetSetMetaRobots()
    {
        $this->object->setMetaRobots('noindex, nofollow');
        $this->assertEquals('noindex, nofollow', $this->object->getMetaRobots());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getMetaRevised
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setMetaRevised
     */
    public function testGetSetMetaRevised()
    {
        $this->object->setMetaRevised('18/09/2012');
        $this->assertEquals('18/09/2012', $this->object->getMetaRevised());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getExtraMetadata
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setExtraMetadata
     */
    public function testGetSetExtraMetadata()
    {
        $this->object->setExtraMetadata('Extra Metadata');
        $this->assertEquals('Extra Metadata', $this->object->getExtraMetadata());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setOgDescription
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getOgDescription
     */
    public function testGetSetOgDescription()
    {
        $this->object->setOgDescription('OpenGraph description');
        $this->assertEquals('OpenGraph description', $this->object->getOgDescription());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setOgImage
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getOgImage
     */
    public function testGetSetOgImageWithImage()
    {
        $media = $this->getMock('Kunstmaan\MediaBundle\Entity\Media');
        $this->object->setOgImage($media);
        $this->assertEquals($media, $this->object->getOgImage());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setOgImage
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getOgImage
     */
    public function testGetSetOgImageWithNullValue()
    {
        $this->object->setOgImage(null);
        $this->assertEquals(null, $this->object->getOgImage());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setOgTitle
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getOgTitle
     */
    public function testGetSetOgTitle()
    {
        $this->object->setOgTitle('OpenGraph title');
        $this->assertEquals('OpenGraph title', $this->object->getOgTitle());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::setOgType
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getOgType
     */
    public function testGetSetOgType()
    {
        $this->object->setOgType('website');
        $this->assertEquals('website', $this->object->getOgType());
    }

    /**
     * @covers Kunstmaan\SeoBundle\Entity\Seo::getDefaultAdminType
     */
    public function testGetDefaultAdminType()
    {
        $this->assertInstanceOf('Kunstmaan\SeoBundle\Form\SeoType', $this->object->getDefaultAdminType());
    }
}
