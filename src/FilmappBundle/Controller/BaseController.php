<?php

namespace FilmappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class BaseController extends Controller
{
    public function em(){
        return $this->getDoctrine()->getManager();
    }
    
    
//    /**
//     * @Route("/listActors")
//     * 
//     */
//    
//    public function listActorsAction(){
//        $em = $this->em();
//        var_dump($em);
//        
//        
//        
//        return new Response();
////        return [''];
//    }
}
