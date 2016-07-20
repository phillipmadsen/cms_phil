<?php

namespace App\Composers;

use App\Models\Article;
use App\Repositories\Article\ArticleInterface;

/**
 * Class ArticleComposer.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class ArticleComposer
{
    /**
     * @var \App\Repositories\Article\ArticleInterface
     */
    protected $article;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(ArticleInterface $article)
    {
        $this->article = $article;
    }

    /**
     * @param $view
     */
    public function compose($view )
    {

        // $articles = $this->article->getLastArticle(6);
        // $related_view->with('articles', $articles);

        $articles = $this->article->getLastArticle(3);
        $view->with('articles', $articles);
    }
}
