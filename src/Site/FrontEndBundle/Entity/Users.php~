<?php

namespace Site\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 */
class Users implements UserInterface, \Serializable
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var \Site\FrontEndBundle\Entity\Roles
     */
    private $roles;
    
    function __construct()
    {
        $this->created = new \DateTime();
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function __toString() 
    {
        return $this->username? $this->username: 'Пользователь';
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
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Users
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Users
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
     * @return Users
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
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param \Site\FrontEndBundle\Entity\Roles $roles
     * @return Users
     */
    public function setRoles(\Site\FrontEndBundle\Entity\Roles $roles = null)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return \Site\FrontEndBundle\Entity\Roles 
     */
    public function getRoles()
    {
        return $this->getRoles()->toArray();
    }
    
    /**
     * Add roles
     *
     * @param \Site\FrontEndBundle\Entity\Roles $roles
     * @return Users
     */
    public function addRole(\Site\FrontEndBundle\Entity\Roles $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \Site\FrontEndBundle\Entity\Roles $roles
     */
    public function removeRole(\Site\FrontEndBundle\Entity\Roles $roles)
    {
        $this->roles->removeElement($roles);
    }
    
    public function eraseCredentials()
    {
 
    }
    
     public function equals(UserInterface $user)
    {
        return md5($this->getUsername()) == md5($user->getUsername());
    }
    
    public function serialize()
    {
        return \json_encode(
                array($this->username, $this->password, $this->salt, $this->name, $this->surname,
                        $this->roles, $this->id, $this->created));
    }
    
    public function unserialize($serialized)
    {
        list($this->username, $this->password, $this->salt, $this->name, $this->surname,
                        $this->roles, $this->id, $this->created) = \json_decode(
                $serialized);
    }
}
