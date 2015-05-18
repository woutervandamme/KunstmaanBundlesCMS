<?php

namespace \Kunstmaan\SeoBundle\Helper\Social;

use \Kunstmaan\SeoBundle\Helper\Social\AbstractScraper;

class FacebookScraper extends AbstractScraper
{

    public function reload($url)
    {
        $graph = 'https://graph.facebook.com/';
        $post = 'id='.urlencode($url).'&scrape=true';
        return $this->send_post($graph, $post);
    }

}
