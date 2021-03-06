<?php

namespace Kunstmaan\LeadGenerationBundle\Controller;

use Kunstmaan\LeadGenerationBundle\Entity\Popup\AbstractPopup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

abstract class AbstractRedirectController extends Controller
{
    /**
     * @Route("/{popup}", name="redirect_index", requirements={"popup": "\d+"})
     */
    public function indexAction($popup)
    {
        /** @var \Kunstmaan\LeadGenerationBundle\Entity\Popup\AbstractPopup $thePopup */
        $thePopup = $this->getDoctrine()->getRepository('KunstmaanLeadGenerationBundle:Popup\AbstractPopup')->find($popup);

        return $this->render($this->getIndexTemplate(), array(
            'popup' => $thePopup
        ));
    }

    protected function getIndexTemplate()
    {
        return 'KunstmaanLeadGenerationBundle:Redirect:index.html.twig';
    }
}
