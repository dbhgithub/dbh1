<?php

namespace Acme\NeogeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    
    /**
     * @Route("/", name="_acme_neogeo_homepage")
     * @Template()
     */
    public function indexAction()
    {
        
        //Banner
        $data = array('banner/parallax4.jpg', 'banner/parallax1.jpg' );        
        
        
        //Servicios
        
        return array('data' => $data);
        
    }
}
