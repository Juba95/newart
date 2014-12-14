<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\HttpFoundation\reponse;

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

    public function booksAction()
    {
        return $this->render('NAEPlateformBundle:Expo:books.html.twig');
    }

    public function expoAction()
    {
        return $this->render('NAEPlateformBundle:Expo:expo.html.twig');
    }

    public function naeAction()
    {
        return $this->render('NAEPlateformBundle:Expo:nae.html.twig');
    }

    public function contactAction()
    {
        return $this->render('NAEPlateformBundle:Expo:contact.html.twig');
    }

    public function articlesAction()
    {
        return $this->render('NAEPlateformBundle:Expo:articles.html.twig');
    }

    public function articleAction()
    {
        $repo = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');
        $article= $repo->find(348);
        return $this->render('NAEPlateformBundle:Expo:article.html.twig', array(
            'article' => $article,
        ));
    }


    public function cvgAction()
    {
        return $this->render('NAEPlateformBundle:Expo:cvg.html.twig');
    }

}