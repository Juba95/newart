<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardPermission
 */
class SfGuardPermission
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
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SfGuardPermission
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
     * Set description
     *
     * @param string $description
     * @return SfGuardPermission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add group
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardGroup $group
     * @return SfGuardPermission
     */
    public function addGroup(\NAE\PlateformBundle\Entity\SfGuardGroup $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardGroup $group
     */
    public function removeGroup(\NAE\PlateformBundle\Entity\SfGuardGroup $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add user
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardUser $user
     * @return SfGuardPermission
     */
    public function addUser(\NAE\PlateformBundle\Entity\SfGuardUser $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardUser $user
     */
    public function removeUser(\NAE\PlateformBundle\Entity\SfGuardUser $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
