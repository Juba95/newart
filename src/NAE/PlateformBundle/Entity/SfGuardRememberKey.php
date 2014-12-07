<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardRememberKey
 */
class SfGuardRememberKey
{
    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $rememberKey;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \NAE\PlateformBundle\Entity\SfGuardUser
     */
    private $user;


    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return SfGuardRememberKey
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set rememberKey
     *
     * @param string $rememberKey
     * @return SfGuardRememberKey
     */
    public function setRememberKey($rememberKey)
    {
        $this->rememberKey = $rememberKey;

        return $this;
    }

    /**
     * Get rememberKey
     *
     * @return string 
     */
    public function getRememberKey()
    {
        return $this->rememberKey;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SfGuardRememberKey
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set user
     *
     * @param \NAE\PlateformBundle\Entity\SfGuardUser $user
     * @return SfGuardRememberKey
     */
    public function setUser(\NAE\PlateformBundle\Entity\SfGuardUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \NAE\PlateformBundle\Entity\SfGuardUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}
