<?php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NAEPlateformBundle:Expo:index.html.twig');
    }

    public function profileAction()
    {
        return $this->render('NAEPlateformBundle:Expo:profile.html.twig');
    }
}
