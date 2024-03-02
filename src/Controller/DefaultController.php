<?php

namespace App\Controller;

use App\Entity\Info;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(EntityManagerInterface $em): Response
    {
        #$info = (new Info())
        #    ->setTitle('Info number 4')
        #    ->setContent('Content number 5')
        #;

        #$em->persist($info);
        #$em->flush();

        #exit;

        return $this->render('default/index.html.twig', [
            
        ]);
    }

    #[Route('/default/{id}', name: 'app_default_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Info $info): Response
    {
        return $this->render('default/show.html.twig', [
            'info' => $info,
        ]);
    }
}
