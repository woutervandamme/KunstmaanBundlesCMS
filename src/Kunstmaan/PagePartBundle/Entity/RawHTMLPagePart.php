<?php

namespace Kunstmaan\PagePartBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\PagePartBundle\Form\RawHTMLPagePartAdminType;
use Doctrine\ORM\Mapping\Cache;

/**
 * Class that defines a raw html page part object to add to a page
 * @Cache(region="kunstmaan_slc_pagepart_region")
 * @ORM\Entity
 * @ORM\Table(name="kuma_raw_html_page_parts")
 */
class RawHTMLPagePart extends AbstractPagePart
{

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return RawHTMLPagePart
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "RawHTMLPagePart " . htmlentities($this->getContent());
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return "KunstmaanPagePartBundle:RawHTMLPagePart:view.html.twig";
    }

    /**
     * @return RawHTMLPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new RawHTMLPagePartAdminType();
    }
}
