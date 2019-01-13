<?php


namespace App\UI\Action\API;

use App\Repository\ArticleRepository;
use App\UI\Responder\API\GetArticleResponder;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


/**
 * Class GetArticleAction
 *
 * @Route(name="api_article_get", path="/api/article", methods={"GET"})
 */
class GetArticleAction
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * @var GetArticleResponder
     */
    private $responder;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * GetArticleAction constructor.
     *
     * @param ArticleRepository $articleRepository
     * @param GetArticleResponder $responder
     * @param SerializerInterface $serializer
     */
    public function __construct(
        ArticleRepository $articleRepository,
        GetArticleResponder $responder,
        SerializerInterface $serializer
    ) {
        $this->articleRepository = $articleRepository;
        $this->responder = $responder;
        $this->serializer = $serializer;
    }


    public function __invoke()
    {
        //return new JsonResponse($this->articleRepository->findAll());
        //return new JsonResponse("Hello from Get articles");
        $responder = $this->responder;
        $data = "Hello from Get Article";
        return $responder($this->serializer->serialize($data, 'json'));
    }
}