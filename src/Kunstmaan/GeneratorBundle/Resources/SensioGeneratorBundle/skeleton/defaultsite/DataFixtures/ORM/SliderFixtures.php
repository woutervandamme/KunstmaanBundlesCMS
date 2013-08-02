<?php

namespace {{ namespace }}\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Faker\Provider\Lorem;

use Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService;
use Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * SliderFixtures
 */
class SliderFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container = null;

    /**
     * Load data fixtures with the passed EntityManager.
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');

        // Add slider images to database
        $mediaCreatorService = new MediaCreatorService();
        $mediaCreatorService->setEntityManager($em);

        $folder = $em->getRepository('KunstmaanMediaBundle:Folder')->findOneBy(array('rel' => 'image'));

        $sliderDir = dirname(__FILE__).'/../../Resources/public/files/slider/';

        $allFiles = scandir($sliderDir);
        $mediaImages = array();
        foreach ($allFiles as $file) {
            if (preg_match('/^slide/', $file)) {
                $mediaImages[] = $mediaCreatorService->createFile($sliderDir.$file, $folder->getId(), MediaCreatorService::CONTEXT_console);
            }
        }

        // Create slide page parts
        $nodeRepo = $em->getRepository('KunstmaanNodeBundle:Node');
        $homePage = $nodeRepo->findOneBy(array('internalName' => 'homepage'));

        $ppCreatorService = new PagePartCreatorService($em);

        $pageparts = array('slider' => array());
        foreach ($mediaImages as $key => $media) {
            $pageparts['slider'][] = $ppCreatorService->getCreatorArgumentsForPagePartAndProperties('{{ namespace }}\Entity\PageParts\SlidePagePart',
                array(
                    'setTitle'           => 'Title '.($key+1),
                    'setDescription'     => Lorem::paragraph(4),
                    'setTickText'        => 'thick text '.($key+1),
                    'setButtonText'      => 'Click me!',
                    'setButtonUrl'       => 'http://www.kunstmaan.be',
                    'setButtonNewWindow' => true,
                    'setImage'           => $media
                )
            );
        }

        $ppCreatorService->addPagePartsToPage($homePage, $pageparts, 'en');
    }

    /**
     * Get the order of this fixture
     *
     * @return int
     */
    public function getOrder()
    {
        return 70;
    }

    /**
     * Sets the Container.
     *
     * @param ContainerInterface $container A ContainerInterface instance
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

}
