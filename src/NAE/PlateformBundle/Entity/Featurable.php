<?php

namespace NAE\PlateformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Featurable
 *
 * @ORM\Table(name="featurable")
 * @ORM\Entity
 */
class Featurable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="featuring_date", type="datetime", nullable=true)
     */
    private $featuringDate;

    /**
     * @var string
     *
     * @ORM\Column(name="descendant_class", type="string", length=100, nullable=true)
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
