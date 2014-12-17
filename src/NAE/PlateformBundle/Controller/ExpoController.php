<?php

// src/NAE/PlatformBundle/Controller/ExpoController.php

namespace NAE\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\HttpFoundation\reponse;

class ExpoController extends Controller
{
    public function indexAction()
    {
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        // Qu'est-ce que NAE
        $intro    = $repoPost->find(9);
        $objectif = $repoPost->find(20);

        // News
        $firstArticle  = $repoPost->find(1);
        $secondArticle = $repoPost->find(2);
        $thirdArticle  = $repoPost->find(3);
        $fourthArticle = $repoPost->find(4);

        // Today
        $introToday        = $repoPost->find(5);
        $artistName        = $repoPost->find(6);
        $artistDescription = $repoPost->find(7);
        $workName          = $repoPost->find(59);
        $workDescription   = $repoPost->find(8);


         return $this->render('NAEPlateformBundle:Expo:index.html.twig', array(
             'intro' => $intro,
             'objectif' => $objectif,
             'firstArticle' => $firstArticle,
             'secondArticle' => $secondArticle,
             'thirdArticle' => $thirdArticle,
             'fourthArticle' => $fourthArticle,
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
        return $this->render('NAEPlateformBundle:Expo:contact.html.twig');
    }

    public function articlesAction()
    {
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        // Les Articles
        $firstArticleName = $repoPost->find(25);
        $firstArticleDescript = $repoPost->find(26);
        $secondArticleName = $repoPost->find(27);
        $secondArticleDescript = $repoPost->find(28);
        $thirdArticleName = $repoPost->find(29);
        $thirdArticleDescript = $repoPost->find(30);
        $fourthArticleName = $repoPost->find(31);
        $fourthArticleDescript = $repoPost->find(63);
        return $this->render('NAEPlateformBundle:Expo:articles.html.twig', array(
            'firstArticleName' => $firstArticleName,
            'firstArticleDescript' => $firstArticleDescript,
            'secondArticleName' => $secondArticleName,
            'secondArticleDescript' => $secondArticleDescript,
            'thirdArticleName' => $thirdArticleName,
            'thirdArticleDescript' => $thirdArticleDescript,
            'fourthArticleName' => $fourthArticleName,
            'fourthArticleDescription' => $fourthArticleDescript,
        ));
    }

    public function articleAction()
    {
        $repoPost = $this->getDoctrine()->getManager()->getRepository('NAEPlateformBundle:Post');

        $title = $repoPost->find(32);
        $subtitlePartOne = $repoPost->find(61);
        $namePartOne = $repoPost->find(62);
        $contentPartOne = $repoPost->find(35);
        $contentPartOneNext = $repoPost->find(60);
        $namePartTwo = $repoPost->find(36);
        $contentPartTwo = $repoPost->find(37);

        // article Star
        $aricleOne = $repoPost->find(38);
        $aricleOneDescription = $repoPost->find(39);
        $aricleTwo = $repoPost->find(40);
        $aricleTwoDescription = $repoPost->find(41);

        return $this->render('NAEPlateformBundle:Expo:article.html.twig', array(
            'title' => $title,
            'subtitlePartOne' => $subtitlePartOne,
            'namePartOne' => $namePartOne,
            'contentPartOne' => $contentPartOne,
            'contentPartOneNext' => $contentPartOneNext,
            'namePartTwo' => $namePartTwo,
            'contentPartTwo' => $contentPartTwo,
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