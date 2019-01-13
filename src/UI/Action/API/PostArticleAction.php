<?php

namespace App\UI\Action\API;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PostArticleAction
 *
 * @package App\UI\Action\API
 * @Route(name="api_article_post", path="/api/article", methods={"POST"})
 */
class PostArticleAction
{
    public function __invoke()
    {
        return new JsonResponse("Hello World from post");
    }
}