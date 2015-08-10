<?php

namespace Site\FrontEndBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use Site\FrontEndBundle\Entity\Users;
use Site\FrontEndBundle\Entity\Roles;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $role = new Roles;
        $role ->setName('ROLE_USER')
              ->setCreated(new \DateTime);
        $manager->persist($role);
        
        $encoder = new MessageDigestPasswordEncoder('sha512', false, 10);
        $userAdmin = new Users();
        $userAdmin->setUsername('admin')
                  ->setSalt(md5(time()))
                  ->setSurname('**')
                  ->setName('**')
                  ->setCreated(new \DateTime)
                  ->addRole($role);
        
        $password = $encoder->encodePassword('123', $userAdmin->getSalt());
        $userAdmin->setPassword($password);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
