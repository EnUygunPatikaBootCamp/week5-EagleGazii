<?php

namespace App\Service;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

class MarkdownService
{
    // dependency Injection
    private $markdownParser;
    public function __construct(MarkdownParserInterface $markdownParser){
        $this->markdownParser = $markdownParser;
    }
    // use my service with another service which parse markdown as html

    public function parser($text){
        return $this->markdownParser->transformMarkdown($text);
    }
}