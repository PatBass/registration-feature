<?php


namespace App\UI\Responder;


use App\UI\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;

class HomeResponder implements HomeResponderInterface
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * HomeResponder constructor.
     *
     * @param Environment $twig
     */public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke()
    {
        $response = new Response(
            $this->twig->render('home/index.html.twig')
        );

        $response->headers->set('Content-Type', 'application/json');
        $response->setCharset('ISO-8859-1');

        return $response;
    }
}