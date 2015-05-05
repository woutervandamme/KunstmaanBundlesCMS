<?php

namespace Kunstmaan\PagePartBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\PagePartBundle\Form\ToTopPagePartAdminType;
use Doctrine\ORM\Mapping\Cache;

/**
 * ToTopPagePart
 * @Cache(region="kunstmaan_slc_pagepart_region")
 * @ORM\Entity
 * @ORM\Table(name="kuma_to_top_page_parts")
 */
class ToTopPagePart extends AbstractPagePart
{

    /**
     * @return string
     */
    public function __toString()
    {
        return "ToTopPagePart";
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return "KunstmaanPagePartBundle:ToTopPagePart:view.html.twig";
    }

    /**
     * @return ToTopPagePartAdminType
     */
    public function getDefaultAdminType()
    {
        return new ToTopPagePartAdminType();
    }
}
