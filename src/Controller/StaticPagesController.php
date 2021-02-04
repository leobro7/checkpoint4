<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * This class is used to display all static views
 * @package App\Controller
 */
class StaticPagesController extends AbstractController
{
    /**
     * This method is used to display the home page
     * @return Response
     * @Route("/", name="index")
     */
    public function indexHome(): Response
    {
        return $this->render('/index.html.twig');
    }

    /**
     * This method is used to display the contact page
     * @return Response
     * @Route("/contact", name="contact")
     */
    public function indexForm(): Response
    {
        return $this->render('/contact.html.twig');
    }
}

