<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\HttpFoundation\reponse;

use Symfony\Component\HttpFoundation\Request;

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

    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($form->get('subject')->getData())
                    ->setFrom($form->get('email')->getData())
                    ->setTo('contact@example.com')
                    ->setBody(
                        $this->renderView(
                            'NAEPlateformBundle:Mail:contact.html.twig',
                            array(
                                'ip' => $request->getClientIp(),
                                'name' => $form->get('name')->getData(),
                                'message' => $form->get('message')->getData()
                            )
                        )
                    );

                $this->get('mailer')->send($message);

                $request->getSession()->getFlashBag()->add('success', 'Your email has been sent! Thanks!');

                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return array(
            'form' => $form->createView()
        );
    }
}