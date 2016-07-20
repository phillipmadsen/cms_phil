<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Pagination;
use App\Repositories\Tag\TagInterface;
use App\Repositories\Article\ArticleInterface;
use App\Repositories\Tag\TagRepository as Tag;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Article\ArticleRepository as Article;
use App\Repositories\Category\CategoryRepository as Category;
/**
 * Class CategoryController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class CategoryController extends Controller
{
    protected $article;
    protected $tag;
    protected $category;
    protected $perPage;
    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category)
    {
        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
        $this->perPage = config('fully.modules.category.per_page');
    }
    /**
     * Display a listing of the resource by slug.
     *
     * @param Request $request
     * @param $slug
     *
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $slug)
    {
        $articles = $this->category->getArticlesBySlug($slug);
        $tags = $this->tag->all();
        $pagiData = $this->category->paginate($request->get('page', 1), $this->perPage, false);
        $categories = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);
        return view('frontend.category.index', compact('articles', 'tags', 'categories'));
    }
}