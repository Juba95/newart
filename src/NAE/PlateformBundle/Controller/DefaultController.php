<<<<<<< HEAD
<?php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NAEPlateformBundle:Expo:index.html.twig');
    }

}
=======
<?php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
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
>>>>>>> FETCH_HEAD
