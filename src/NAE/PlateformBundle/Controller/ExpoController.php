<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ExpoController extends Controller
{
    public function indexAction()
    {
         return $this->render('NAEPlateformBundle:Expo:index.html.twig');
    }

    public function profilAction()
    {
        return $this->render('NAEPlateformBundle:Expo:profil.html.twig');
    }
}