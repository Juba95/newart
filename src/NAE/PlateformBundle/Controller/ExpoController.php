<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NAE\PlateformBundle\Entity\Enquiry;
use NAE\PlateformBundle\Form\EnquiryType;


class ExpoController extends Controller
{
    public function indexAction()
    {
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        // news == Article
        $conn = $this->get('database_connection');
        $news = $conn->fetchAll('SELECT * FROM news_entry ORDER BY created_at DESC LIMIT 4');

        // Qu'est-ce que NAE
        $intro    = $repoPost->find(9);
        $objectif = $repoPost->find(20);


        // Today
        $introToday        = $repoPost->find(5);
        $artistName        = $repoPost->find(6);
        $artistDescription = $repoPost->find(7);
        $workName          = $repoPost->find(59);
        $workDescription   = $repoPost->find(8);


         return $this->render('NAEPlateformBundle:Expo:index.html.twig', array(
             'news' => $news,
             'intro' => $intro,
             'objectif' => $objectif,
             'introToday' => $introToday,
             'artistName' => $artistName,
             'artistDescription' => $artistDescription,
             'workName' => $workName,
             'workDescription' => $workDescription,
         ));
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
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        // Pourquoi avoir crée cette plateforme ?
        $intro = $repoPost->find(9);

        // Pourquoi avoir crée cette plateforme ?
        $whyNaeIntro = $repoPost->find(10);
            // Capaciter des artistes
        $whyNaeFirstCap   = $repoPost->find(11);
        $whyNaeSecondCap  = $repoPost->find(12);
        $whyNaeThirdCap   = $repoPost->find(13);
        $whyNaeFourthCap  = $repoPost->find(14);
        $whyNaeFiftCap    = $repoPost->find(15);
        $whyNaeSixthCap   = $repoPost->find(16);
        $whyNaeSeventhCap = $repoPost->find(17);

        // Comment avez-vous eu cette idée ?
        $ideaIntro = $repoPost->find(18);

        // Quels sont vos objectifs aujourd’hui ?
        $firstObj  = $repoPost->find(20);
        $secondObj = $repoPost->find(21);
        $thirdObj  = $repoPost->find(22);
        $fourthObj = $repoPost->find(23);
        $fifthObj  = $repoPost->find(24);

        return $this->render('NAEPlateformBundle:Expo:nae.html.twig', array(
            'intro' => $intro,
            'whyNaeIntro' => $whyNaeIntro,
            'whyNaeFirstCap' => $whyNaeFirstCap,
            'whyNaeSecondCap' => $whyNaeSecondCap,
            'whyNaeThirdCap' => $whyNaeThirdCap,
            'whyNaeFourthCap' => $whyNaeFourthCap,
            'whyNaeFiftCap' => $whyNaeFiftCap,
            'whyNaeSixthCap' => $whyNaeSixthCap,
            'whyNaeSeventhCap' => $whyNaeSeventhCap,
            'ideaIntro' => $ideaIntro,
            'firstObj' => $firstObj,
            'secondObj' => $secondObj,
            'thirdObj' => $thirdObj,
            'fourthObj' => $fourthObj,
            'fifthObj' => $fifthObj,


        ));
    }



    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->submit($request);

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

    public function articlesAction()
    {
        $repoNewsEnry = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:NewsEntry');

        // Les Articles

        $firstArticle = $repoNewsEnry->find(1);
        $secondArticle = $repoNewsEnry->find(2);
        $thirdArticle = $repoNewsEnry->find(3);
        $fourthArticle = $repoNewsEnry->find(4);
        return $this->render('NAEPlateformBundle:Expo:articles.html.twig', array(
            'firstArticle' => $firstArticle,
            'secondArticle' => $secondArticle,
            'thirdArticle' => $thirdArticle,
            'fourthArticle' => $fourthArticle,
        ));
    }

    public function articleAction($id)
    {
        $repoNewsEntry = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:NewsEntry');
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        $article = $repoNewsEntry->find($id);


        // article Star
        $aricleOne = $repoPost->find(38);
        $aricleOneDescription = $repoPost->find(39);
        $aricleTwo = $repoPost->find(40);
        $aricleTwoDescription = $repoPost->find(41);

        return $this->render('NAEPlateformBundle:Expo:article.html.twig', array(
            'article' => $article,
            'aricleOne' => $aricleOne,
            'aricleOneDescription' => $aricleOneDescription,
            'aricleTwo' => $aricleTwo,
            'aricleTwoDescription' => $aricleTwoDescription,
        ));
    }


    public function cvgAction()
    {
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        // Mention Legale
        $editor = $repoPost->find(42);
        $businessName = $repoPost->find(43);
        $mail = $repoPost->find(44);
        $CNIL = $repoPost->find(45);


        // Conditions générales d’utilisation
        $firstCap   = $repoPost->find(46);
        $secondCap  = $repoPost->find(47);
        $thirdCap   = $repoPost->find(48);
        $fourthCap  = $repoPost->find(49);
        $fifthCap    = $repoPost->find(50);
        $sixthCap   = $repoPost->find(51);
        $seventhCap = $repoPost->find(52);

        // Comment avez-vous eu cette idée ?
        $idea = $SeventhCap = $repoPost->find(53);

        // Quels sont vos objectifs aujourd’hui ?
        $firstObj  = $repoPost->find(54);
        $secondObj = $repoPost->find(55);
        $thirdObj  = $repoPost->find(56);
        $fourthObj = $repoPost->find(57);
        $fifthObj  = $repoPost->find(58);

        return $this->render('NAEPlateformBundle:Expo:cvg.html.twig', array(
            'editor' => $editor,
            'businessName' => $businessName,
            'mail' => $mail,
            'CNIL' => $CNIL,
            'firstCap' => $firstCap,
            'secondCap' => $secondCap,
            'thirdCap' => $thirdCap,
            'fourthCap' => $fourthCap,
            'fifthCap' => $fifthCap,
            'sixthCap' => $sixthCap,
            'seventhCap' => $seventhCap,
            'idea' => $idea,
            'firstObj' => $firstObj,
            'secondObj' => $secondObj,
            'thirdObj' => $thirdObj,
            'fourthObj' => $fourthObj,
            'fifthObj' => $fifthObj,

        ));
    }

}