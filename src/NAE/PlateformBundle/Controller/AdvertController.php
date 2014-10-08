<?php

// src/NAE/PlatformBundle/Controller/AdvertController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Hello World !");
    }
}