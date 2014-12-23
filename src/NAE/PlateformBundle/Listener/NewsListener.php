<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 21/12/2014
 * Time: 19:52
 */

namespace NAE\PlateformBundle\Listener;

use NAE\PlateformBundle\Entity\NewsEntry;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Validator\Constraints\DateTime;

class NewsListener {
    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof NewsEntry)
        {
            $entity->setCreatedAt(new \DateTime());
            $entity->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public  function  preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if($entity instanceof NewsEntry)
        {
            $entity->setUpdatedAt(new \DateTime());
        }
    }
} 