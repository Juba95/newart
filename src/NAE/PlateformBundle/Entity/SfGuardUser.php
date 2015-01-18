<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser;

/**
 * SfGuardUser
 */
class SfGuardUser extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $algorithm;

    /**
     * @var string
     */
    protected $salt;

    /**
     * @var string
     */
    protected $enabled;

    /**
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param string $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $lastLogin;

    /**
     * @var boolean
     */
    protected $isActive;

    /**
     * @var boolean
     */
    private $SuperAdmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $permission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salt = new BaseUser();
        $this->locked = new BaseUser();
        $this->expired = new BaseUser();
        $this->credentialsExpired = new BaseUser();
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
     * @return SfGuardUser
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
     * Set email
     *
     * @param string $email
     * @return SfGuardUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set algorithm
     *
     * @param string $algorithm
     * @return SfGuardUser
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    /**
     * Get algorithm
     *
     * @return string 
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return SfGuardUser
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
     * Set password
     *
     * @param string $plainPassword
     * @return SfGuardUser
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SfGuardUser
     */
//    public function setCreatedAt($createdAt)
//    {
//        $this->createdAt = $createdAt;
//
//        return $this;
//    }
//
//    /**
//     * Get createdAt
//     *
//     * @return \DateTime
//     */
//    public function getCreatedAt()
//    {
//        return $this->createdAt;
//    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return SfGuardUser
     */
//    public function setLastLogin($lastLogin)
//    {
//        $this->lastLogin = $lastLogin;
//
//        return $this;
//    }
//
//    /**
//     * Get lastLogin
//     *
//     * @return \DateTime
//     */
//    public function getLastLogin()
//    {
//        return $this->lastLogin;
//    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return SfGuardUser
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set superAdmin
     *
     * @param boolean $superAdmin
     * @return SfGuardUser
     */
    public function setSuperAdmin($superAdmin)
    {
        $this->superAdmin = $superAdmin;

        return $this;
    }

    /**
     * Get SuperAdmin
     *
     * @return boolean 
     */
    public function getSuperAdmin()
    {
        return $this->SuperAdmin;
    }

    /**
     * Add group
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardGroup $group
     * @return SfGuardUser
     */
//    public function addGroup(\NAE\PlateformBundle\Entity\SfGuardGroup $group)
//    {
//        $this->group[] = $group;
//
//        return $this;
//    }
//
//    /**
//     * Remove group
//     *
//     * @param \NAE\PlateformBundle\Entity\SfGuardGroup $group
//     */
//    public function removeGroup(\NAE\PlateformBundle\Entity\SfGuardGroup $group)
//    {
//        $this->group->removeElement($group);
//    }

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
     * Add permission
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardPermission $permission
     * @return SfGuardUser
     */
    public function addPermission(\NAE\PlateformBundle\Entity\SfGuardPermission $permission)
    {
        $this->permission[] = $permission;

        return $this;
    }

    /**
     * Remove permission
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardPermission $permission
     */
    public function removePermission(\NAE\PlateformBundle\Entity\SfGuardPermission $permission)
    {
        $this->permission->removeElement($permission);
    }

    /**
     * Get permission
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermission()
    {
        return $this->permission;
    }
    /**
     * @var string
     */
   protected $password;


    /**
     * Set password
     *
     * @param string $password
     * @return SfGuardUser
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
     * @var boolean
     */
    private $isSuperAdmin;


    /**
     * Set isSuperAdmin
     *
     * @param boolean $isSuperAdmin
     * @return SfGuardUser
     */
    public function setIsSuperAdmin($isSuperAdmin)
    {
        $this->isSuperAdmin = $isSuperAdmin;

        return $this;
    }

    /**
     * Get isSuperAdmin
     *
     * @return boolean 
     */
    public function getIsSuperAdmin()
    {
        return $this->isSuperAdmin;
    }
}
