<?php

namespace App\Controller;

use App\Service\MarkdownService;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function number(Request $request, MarkdownParserInterface $parser, MarkdownService $service): Response
    {
    // getting area text from form and convert it using MarkdownService and MarkdownParserInterface
    $markdown = $service->parser($request->request->get('area'));
        return $this->render('index.html.twig',['parser'=>$markdown]);
    }
}

