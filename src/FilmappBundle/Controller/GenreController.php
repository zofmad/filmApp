<?php

namespace FilmappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FilmappBundle\Entity\Genre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class GenreController extends BaseController
{
    private function generateGenreForm(Genre $genre){
        return $this->createFormBuilder($genre)
                ->add('name', 'text')
                ->add('save', 'submit')
                ->getForm();
        
        
    }
  
    
    /**
     * @Route("/showGenre/{id}")
     * 
     * @Template()
     */
    public function showGenreAction($id)
    {

        $repo = $this->getDoctrine()->getRepository('FilmappBundle:Genre');
        $genre = $repo->find($id);
        
        return ['genre' => $genre];    
        
    }

    /**
     * @Route("/deleteGenre/{id}")
     * @Security("has_role('ROLE_ADMIN')")
     * @Template()
     */
    public function deleteGenreAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $genre = $em->getRepository('FilmappBundle:Genre')
                ->find($id);
        if(!$genre){
            
        }
        $em->remove($genre);
        $em->flush();

        return $this->redirectToRoute('filmapp_genre_listgenres');
       
    }

    /**
     * @Route("/editGenre/{id}")
     * @Template()
     * @Method("GET")
     */
    public function editGenreAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $genre = $em->getRepository('FilmappBundle:Genre')
                ->find($id);
        $form = $this->generateGenreForm($genre);
        
        return ['form' => $form->createView()];   
        
        
    }
    
      /**
     * @Route("/editGenre/{id}")
     * @Template()
     * @Method("POST")
     */
    public function postEditGenreAction(Request $req, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $genre = $em->getRepository('FilmappBundle:Genre')
                ->find($id);
        $form = $this->generateGenreForm($genre);
        $form->handleRequest($req);
        $em->flush();        
        return $this->redirectToRoute('filmapp_genre_listgenres');
//        return ['genre' => $genre];   
        
    }

    /**
     * @Route("/createGenre")
     * @Template()
     * @Method("GET")
     */
    public function createGenreAction()
    {
        $genre = new Genre();
//        $em = $this->getDoctrine()->getManager();       
        $form = $this->generateGenreForm($genre);
        return ['form' => $form->createView()];
    }
    
    /**
     * @Route("/createGenre")
     * @Template()
     * @Method("POST")
     */
    public function postCreateGenreAction(Request $req)
    {
        $genre = new Genre();
        $form = $this->generateGenreForm($genre);
        $form->handleRequest($req);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($genre);
        $em->flush();
        return $this->redirectToRoute('filmapp_genre_listgenres');
//        return ['form' => $form->createView()];
    }

    /**
     * @Route("/listGenres")
     * 
     * @Template()
     */
    public function listGenresAction()
    {
        $genres = $this->getDoctrine()->getRepository('FilmappBundle:Genre')
                ->findAll();
        return ['genres' => $genres];    
        
    }
    
    

}
//kobntorler - uzytkownik