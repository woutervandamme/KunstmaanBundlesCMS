<?php

namespace Kunstmaan\SeoBundle\Helper\Social;

abstract class AbstractScraper {

    public abstract function reload($url);

    protected function send_post($url, $post)
    {
        $r = curl_init();
        curl_setopt($r, CURLOPT_URL, $url);
        curl_setopt($r, CURLOPT_POST, 1);
        curl_setopt($r, CURLOPT_POSTFIELDS, $post);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($r, CURLOPT_CONNECTTIMEOUT, 5);
        $data = curl_exec($r);
        curl_close($r);
        return $data;
    }

}