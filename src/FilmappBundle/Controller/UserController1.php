<?php

namespace FilmappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    
        /**
     * @Route("/admin/showUsers")
     * @Template("::showUsers.html.twig")
     */
    
    public function showUsersAction(){
//         $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Access denied!'); 
        $repository = $this->getDoctrine()->getRepository("FilmappBundle:User");
        $users = $repository->findAll();
       
        return ['users' => $users];
        
        
        
    }
    
    
    
    /**
     * @Route("/admin/changeRole/{id}")
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
