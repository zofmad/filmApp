<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       // replace this example code with whatever you need
         return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        
        
    }
    
    
    /**
     * @Route("/showUsers")
     * @Template("::showUsers.html.twig")
     */
    
    public function showUsersAction(){
//         $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Access denied!'); 
        $repository = $this->getDoctrine()->getRepository("AppBundle:User");
        $users = $repository->findAll();
       
        return ['users' => $users];
        
        
        
    }
    
    
    
    /**
     * @Route("/changeRole/{id}")
    Template("::showUsers.html.twig")
     */
    public function changeRoleAction($id){
        $user = $this->getDoctrine()->getRepository("AppBundle:User")
                ->find($id);
//        $user->removeRole('ROLE_ADMIN');//ROLE_USER jest zawsze
        $user->setRoles(['ROLE_ADMIN']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        
        
        $response = $this->redirectToRoute("app_default_showusers");
        return $response;
        
        
    }
    
}
