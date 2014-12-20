<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\HttpFoundation\reponse;

use NAE\PlateformBundle\Entity\Enquiry;
use NAE\PlateformBundle\Form\EnquiryType;

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

    /*public function contactAction()
    {
        return $this->render('NAEPlateformBundle:Expo:contact.html.twig');
    }*/

    public function articlesAction()
    {
        return $this->render('NAEPlateformBundle:Expo:articles.html.twig');
    }

    public function articleAction()
    {
        return $this->render('NAEPlateformBundle:Expo:article.html.twig');
    }


    public function cvgAction()
    {
        return $this->render('NAEPlateformBundle:Expo:cvg.html.twig');
    }

    public function newsletterAction()
    {
         // return $this->render('NAEPlateformBundle:Expo:newsletter.html.twig');
        $reponse =$this->forward('WowoNewsletterBundle:DefaultController:createMailingAction()');
        return $reponse;
    }


    // Formulaire Contact
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('NAEPlateformBundle_contact'));
            }
        }

        return $this->render('NAEPlateformBundle:Expo:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

}