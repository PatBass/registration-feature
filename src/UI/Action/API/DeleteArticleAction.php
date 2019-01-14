<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 14/01/19
 * Time: 15:04
 */

namespace App\UI\Action\API;


use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DeleteArticleAction
 *
 * @Route(name="api_article_delete", path="/api/article/{id}", methods={"DELETE"})
 */
class DeleteArticleAction
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * DeleteArticleAction constructor.
     *
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        dump($request->attributes->get('id'));

        if (is_int($request->attributes->get('id'))) {
            $article = $this->articleRepository->findOneBy(['id' => $request->attributes->get('id')]);
        } else {
            $article = null;
        }

        if (is_object($article)) {
            $this->articleRepository->remove($article);
            return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
        } else {
            throw new NotFoundHttpException("Article inexistant !");
        }


    }

}