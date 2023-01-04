<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);
        $formQuestion->handleRequest($request);

        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
        }

        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }

    #[Route('/question/{id}', name: 'question_show')]
    public function show(Request $request, string $id): Response
    {
        $question = [
            'title' => 'Je suis la troisième question',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, facilis iusto! Amet quidem voluptate, aperiam consequuntur eum dolorum praesentium culpa quasi iste. Quaerat dolores placeat optio dicta, iusto ab excepturi.',
            'rating' => -10,
            'author' => [
                'name' => 'Jean Dujardin',
                'avatar' => 'https://www.programme-tv.net/imgre/fit/~2~providerPerson~26a210e5a2cb1a8b.jpeg/300x300/quality/80/jean-dujardin.jpeg'
            ],
            'nbrOfResponse' => 5,
        ];

        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }
}
