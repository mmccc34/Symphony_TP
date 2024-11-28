<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('accueil.html.twig'); 
    }

    // Route pour la page "À propos"
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');  
    }

    // Route pour la page "Contact"
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');  
    }

    // Route pour la page "Articles"
    #[Route('/articles', name: 'app_articles')]
    public function articles(): Response
    {
        $articles = 
        [ 
        [        'id' => 1,        'title' => 'Article 1',        'content' => 'Contenu de l\'article 1',  'date' => new \DateTime(),  ],    
        [        'id' => 2,        'title' => 'Article 2',        'content' => 'Contenu de l\'article 2', 'date' => new \DateTime(),   ],    
        [        'id' => 3,        'title' => 'Article 3',        'content' => 'Contenu de l\'article 3', 'date' => new \DateTime(),   ],];

        return $this->render('articles.html.twig', [
            'articles' => $articles, // Nom de la variable dans Twig
        ]);
    }
   

}

