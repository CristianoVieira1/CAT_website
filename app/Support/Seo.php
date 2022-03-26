<?php


namespace App\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    private $optimizer;

    public function __construct()
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            'CAT - Centro de Aperfeiçoamento Tecnológico',
            'pt_BR',
            'article'
        )->twitterCard(
            "@catbroficial",
            "@catbroficial",
            "eadcat.com.br",
            "summary_large_image"
        )->publisher(
            "catbroficial",
            "catbroficial"
        )->facebook(
            "catbroficial",
            null


        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true)
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}
