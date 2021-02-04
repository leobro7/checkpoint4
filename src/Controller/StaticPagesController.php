<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


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
    public function indexContact(): Response
    {
        $contact = new Contact();

        $form = $this->createFormBuilder($contact)
                     ->add('name' , TextType::class, [
                        'attr' => [
                            'placeholder' => "Dumoulin",
                            'class' => 'form-control'
                        ]
                     ])
                     ->add('tel' , TelType::class, [
                         'attr' => [
                             'placeholder' => "06 00 00 00 00",
                             'class' => 'form-control'
                         ]
                     ])
                     ->add('email' , EmailType::class, [
                        'attr' => [
                            'placeholder' => "dumoulin@gmail.com",
                            'class' => 'form-control'
                        ]
                    ])
                     ->add('message' , TextareaType::class, [
                        'attr' => [
                            'placeholder' => "écrivez votre message...",
                            'class' => 'form-control'
                        ]
                    ])
                     ->getForm();

        
        return $this->render('/contact.html.twig',[
            'formContact' => $form->createView()
        ]);

    }
}

