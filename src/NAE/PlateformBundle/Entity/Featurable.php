<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Featurable
 */
class Featurable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $featuringDate;

    /**
     * @var string
     */
    private $descendantClass;


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
     * Set featuringDate
     *
     * @param \DateTime $featuringDate
     * @return Featurable
     */
    public function setFeaturingDate($featuringDate)
    {
        $this->featuringDate = $featuringDate;

        return $this;
    }

    /**
     * Get featuringDate
     *
     * @return \DateTime 
     */
    public function getFeaturingDate()
    {
        return $this->featuringDate;
    }

    /**
     * Set descendantClass
     *
     * @param string $descendantClass
     * @return Featurable
     */
    public function setDescendantClass($descendantClass)
    {
        $this->descendantClass = $descendantClass;

        return $this;
    }

    /**
     * Get descendantClass
     *
     * @return string 
     */
    public function getDescendantClass()
    {
        return $this->descendantClass;
    }
}
