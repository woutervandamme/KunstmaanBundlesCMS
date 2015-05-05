<?php

namespace Kunstmaan\PagePartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\PagePartBundle\Form\TextPagePartAdminType;
use Doctrine\ORM\Mapping\Cache;

/**
 * Class that defines a text page part object to add to a page
 *
 * @Cache(region="kunstmaan_slc_pagepart_region")
 * @ORM\Entity
 * @ORM\Table(name="kuma_text_page_parts")
 */
class TextPagePart extends AbstractPagePart
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
     * @return TextPagePart
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
        return "TextPagePart " . $this->getContent();
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return "KunstmaanPagePartBundle:TextPagePart:view.html.twig";
    }

    /**
     * @return TextPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new TextPagePartAdminType();
    }
}
