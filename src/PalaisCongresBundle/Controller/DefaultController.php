<?php

namespace PalaisCongresBundle\Controller;

use PalaisCongresBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('PalaisCongresBundle:Default:index.html.twig');
    }


    /**
     * @Route("/dav")
     */
    public function userAction()
    {

        $me = new Client(969);
        $em = $this->getDoctrine()->getManager();
        $em->persist($me);
        $em->flush();

        return $this->render('PalaisCongresBundle:Default:dav.html.twig', array());

    }
}
