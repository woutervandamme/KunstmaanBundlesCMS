<?php

namespace Kunstmaan\SeoBundle\Helper\Social;

class FacebookScraper extends AbstractScraper
{

    public function reload($url)
    {
        $graph = 'https://graph.facebook.com/';
        $post = 'id='.urlencode($url).'&scrape=true';
        return $this->send_post($graph, $post);
    }

}
