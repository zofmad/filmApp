<?php

namespace FilmappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
//use Symfony\Component\Form;

use FilmappBundle\Entity\Movie;

class MovieController extends BaseController
{
    
    
    private function generateMovieForm(Movie $movie){
        return $this->createFormBuilder($movie)
                ->add('name', 'text', ['label' => 'Nazwa'])
                ->add('description', 'text', ['label' => 'Opis'])
                ->add('production_year', 'integer', ['label' => 'Rok produkcji'])
                ->add('rating', 'integer', ['label' => 'Ocena'])
                ->add('genres', 'entity', [
                    'label' => 'movie.genres',
                    'class' => 'FilmappBundle:Genre',
                    'choice_label' => 'name',
                    'multiple' => true,
                    ])
                ->add('Save', 'submit')
                ->getForm();
        
    }
//    private function getManager(){
//        $em = $this->getDoct
//    }//w base controlerze
    /**
     * @Route("/showMovie/{id}")
     * @Template()
     */
    public function showMovieAction($id)
    {
        $repo = $this->getDoctrine()->getRepository("FilmappBundle:Movie");
        $movie = $repo->find($id);
        
//        if(!$mository();ovie){
//            
//            
//        }
        return ['movie' => $movie]; 
        
        
    }

    /**
     * @Route("/deleteMovie/{id}")
     * @Template()
     */
    public function deleteMovieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $movie = $em->getRepository('FilmappBundle:Movie')
                ->find($id);
        $em->remove($movie);
        $em->flush();
        return $this->redirectToRoute('filmapp_movie_listmovies');
//        return ['movie' => $movie];  //render do listy
        
    }

    /**
     * @Route("/createMovie")
     * @Template()
     * @Method("GET")
     */
    public function createMovieAction()
    {
//        $em= $this->getDoctrine()->getManager();
//        
        $movie = new Movie();
        
      
//        $form = $this->createFormBuilder($movie)
//                ->add('name', 'text')
//                ->add('production_year', 'integer')
//                ->add('description', 'text')
//                ->add('rating', 'integer')
//                ->add('send', 'submit')
//                ->getForm();
                
        $form = $this->generateMovieForm($movie);
        
        return ["form" => $form->createView()];
    }
     /**
     * @Route("/createMovie")
     * @Template()
      * @Method("POST")
     */
    public function createMoviePostAction(Request $req)
    {
        $movie = new Movie();
//        $em = $this->getDoctrine()->getManager();
        $form = $this->generateMovieForm($movie);
        $form->handleRequest($req);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($movie);
        $em->flush();
        
        return $this->redirectToRoute('filmapp_movie_listmovies');   
        
    }

//@Route("/admin/editMovie/{id}")
    /**
     * 
     * @Route("/editMovie/{id}")
     * @Template("FilmappBundle:Movie:createMovie.html.twig")
     * @Method("GET")
     */
    public function editMovieAction($id)
    {   

        $em = $this->getDoctrine()->getManager();
        $movie = $em->getRepository('FilmappBundle:Movie')
                ->find($id);
//        dump($movie);
        $form = $this->generateMovieForm($movie);
       
        return ['form' => $form->createView()];
        
    }
            
     /**
     * @Route("/editMovie/{id}")
     * @Template()
      * @Method("POST")
     */
    public function editMoviePostAction(Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $movie = $em->getRepository('FilmappBundle:Movie')
                ->find($id);
        $form = $this->generateMovieForm($movie);
        $form->handleRequest($req);
        
        $em->flush();
        return $this->redirectToRoute('filmapp_movie_listmovies'); 
//        return new Response('');
//        return ['movie' => $movie];
    }
    
    /**
     * @Route("/listMovies")
     * @Template("FilmappBundle:Movie:listMovies.html.twig")
     */
    
    public function listMoviesAction(){
        $repo = $this->getDoctrine()->getRepository('FilmappBundle:Movie');
        $movies = $repo->findAll();
        return ['movies' => $movies];
        
    }
    
    

            
            

}

//->add('groups', 'entity', ['label' => 'user.group',
//                'class' => 'CnsCommonBundle:Group',
//                'property' => 'name',
//                'expanded' => true,
//                'multiple' => true,
//                'required' => true,
//                'translation_domain' => 'messages',
//            ])

