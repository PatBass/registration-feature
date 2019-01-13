<?php


namespace App\UI\Responder\API;


use Symfony\Component\HttpFoundation\JsonResponse;

class GetArticleResponder
{
    public function __invoke($data)
    {
        return new JsonResponse($data);
    }
}