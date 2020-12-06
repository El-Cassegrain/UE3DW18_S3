<?php

namespace Watson\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class RssController {

     /**
     * RssController.
     *
     * @param Application $app Silex application
     */
    public function rssFeed(Application $app) {
        $links = $app['dao.link']->getFifteenLinks();
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<Links>';
        
        foreach($links as $key => $link) {
            $xml .= '<link link_id="'.$link->getId().'">';
            $xml .= '<title>'.$link->getTitle().'</title>';
            $xml .= '<url>'.$link->getUrl().'</url>';
            $xml .= '<desc>'.$link->getDesc().'</desc>';
            $xml .= '<user>'.$link->getUser()->getUsername().'</user>';
            $xml .= '</link>';
        }
        $xml .= '</Links>';
  
        $response = new Response($xml);
        $response->headers->set('Content-Type', 'xml');
        
        return $response;

    }
}