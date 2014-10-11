<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ExpoController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('NAEPlateformBundle:Expo:index.html.twig');
        return new Response($content);
    }
}