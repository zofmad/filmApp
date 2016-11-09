<?php

namespace FilmappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
//use Mane

class DefaultController extends BaseController
{
//    /**
//     * @Route("/hello/{name}")
//     * @Template()
//     */
//    public function indexAction($name)
//    {
//        return array('name' => $name);
//    }
//    
    
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction(){
//        return new Response('');
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery( 'SELECT m FROM FilmappBundle:Movie m WHERE m.rating > 7 ORDER BY m.rating DESC' );
        
//        $movies = $query->setMaxResults(5)->getResult();
        $movies = $query->getResult();
        
        return $this->render('FilmappBundle:Default:index.html.twig', array('movies' => $movies));
    }
//    
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
//    
     /**
     * @Route("/listActors")
     * @Template()
     */
    
    public function listActorsAction(){
        $em = $this->em();
//        var_dump($em);
        $actors = $em->getRepository('FilmappBundle:Actor')
                ->findAll();
        
        
//        return new Response('');
        return ['actors' => $actors];
    }
    
    /**
     * @Route("/listDirectors")
     * @Template()
     */
    
//    public function listDirectorsAction(){
//        $em = $this->em();
//        $directors = $em->getRepository('FilmappBundle:Director')
//                ->findAll();
//        return ['directors' => $directors];
//
//    }
//    
    
    
    
    
}
