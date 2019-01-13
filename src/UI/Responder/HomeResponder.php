<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 12/01/19
 * Time: 23:50
 */

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
        return new Response(
            $this->twig->render('home/index.html.twig')
        );
    }
}