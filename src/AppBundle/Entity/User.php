<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
//        $this->roles = ['ROLE_USER'];
//        $this->addRole(['ROLE_USER']);
          $this->setRoles(['ROLE_USER']);
//        $userManager = $this->get( 'fos_user.user_manager' );
//	$user = $userManager->createUser();
//        $user->setRoles(['ROLE_USER']);
//        $userManager->updateUser( $user );
    }
}