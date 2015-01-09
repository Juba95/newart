<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardRememberKey
 *
 * @ORM\Table(name="sf_guard_remember_key", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1EEA28AA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class SfGuardRememberKey
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="remember_key", type="string", length=32, nullable=true)
     */
    private $rememberKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \SfGuardUser
     *
     * @ORM\ManyToOne(targetEntity="SfGuardUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
