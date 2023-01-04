<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {

        $questions = [
            [
                'id' => "1",
                'title' => 'Je suis un super question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, facilis iusto! Amet quidem voluptate, aperiam consequuntur eum dolorum praesentium culpa quasi iste. Quaerat dolores placeat optio dicta, iusto ab excepturi.',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar' => 'https://www.lamarquezone.fr/images/Image/dupont_pendule_1348591533.jpg'
                ],
                'nbrOfResponse' => 15,
            ],
            [
                'id' => "2",
                'title' => 'Je suis la deuxieme question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, facilis iusto! Amet quidem voluptate, aperiam consequuntur eum dolorum praesentium culpa quasi iste. Quaerat dolores placeat optio dicta, iusto ab excepturi.',
                'rating' => 0,
                'author' => [
                    'name' => 'Jean Moulin',
                    'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Moulin_Harcourt_1937.jpg/260px-Moulin_Harcourt_1937.jpg'
                ],
                'nbrOfResponse' => 10,
            ],
            [
                'id' => "3",
                'title' => 'Je suis la troisième question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, facilis iusto! Amet quidem voluptate, aperiam consequuntur eum dolorum praesentium culpa quasi iste. Quaerat dolores placeat optio dicta, iusto ab excepturi.',
                'rating' => -10,
                'author' => [
                    'name' => 'Jean Dujardin',
                    'avatar' => 'https://www.programme-tv.net/imgre/fit/~2~providerPerson~26a210e5a2cb1a8b.jpeg/300x300/quality/80/jean-dujardin.jpeg'
                ],
                'nbrOfResponse' => 5,
            ],
            [
                'id' => "4",
                'title' => 'Je suis la quatrième question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, facilis iusto! Amet quidem voluptate, aperiam consequuntur eum dolorum praesentium culpa quasi iste. Quaerat dolores placeat optio dicta, iusto ab excepturi.',
                'rating' => 2,
                'author' => [
                    'name' => 'Jean Valjean',
                    'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Monsieur_Madeleine_par_Gustave_Brion.jpg/1200px-Monsieur_Madeleine_par_Gustave_Brion.jpg'
                ],
                'nbrOfResponse' => 3,
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
