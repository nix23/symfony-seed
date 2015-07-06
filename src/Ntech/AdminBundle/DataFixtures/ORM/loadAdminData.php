<?php
namespace Ntech\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Ntech\AdminBundle\Entity\Admin;

class LoadAdminData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $em)
    {
        $admin = new Admin();
        $admin->setUsername($this->container->getParameter("admin.username"));

        $factory = $this->container->get('security.encoder_factory');
        $encoder = $factory->getEncoder($admin);

        $encodedAdminPassword = $encoder->encodePassword(
            $this->container->getParameter("admin.password"),
            null
        );
        $admin->setPassword($encodedAdminPassword);

        $em->persist($admin);
        $em->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}