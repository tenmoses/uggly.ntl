<?php

namespace Site\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
/**
 * Roles
 */
class Roles implements RoleInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $created;
    
     /**
     * Constructor
     */
    function __construct()
    {
        $this->created = new \DateTime();
    }

    function __toString() {
        return $this->name? $this->name: 'Роль';
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Roles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Roles
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    

    /**
     * Add users
     *
     * @param \Site\FrontEndBundle\Entity\Users $users
     * @return Roles
     */
    public function addUser(\Site\FrontEndBundle\Entity\Users $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Site\FrontEndBundle\Entity\Users $users
     */
    public function removeUser(\Site\FrontEndBundle\Entity\Users $users)
    {
        $this->users->removeElement($users);
    }

     /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    public function getRole()
    {
        return $this->getName();
    }
}
