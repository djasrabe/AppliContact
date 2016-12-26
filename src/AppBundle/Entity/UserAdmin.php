<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * UserAdmin
 *
 * @ORM\Table(name="user_admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserAdminRepository")
 */
class UserAdmin extends BaseUser
{

    public function __construct ()
    {
        parent::__construct();

    }
       /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

