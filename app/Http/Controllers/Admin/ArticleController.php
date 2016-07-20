<?php

namespace App\Http\Controllers\Admin;

use Flash;
use App\Exceptions\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Article\ArticleInterface;
use App\Repositories\Article\ArticleRepository as Article;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository as Category;
use App\Services\Pagination;
use Illuminate\Support\Facades\DB;
use Input;
use Response;
use View;

/**
 * Class ArticleController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class ArticleController extends Controller
{
    /**
     * @var mixed
     */
    protected $article;
    /**
     * @var mixed
     */
    protected $category;
    /**
     * @var mixed
     */
    protected $User;
    /**
     * @var mixed
     */
    protected $perPage;

    /**
     * @param ArticleInterface $article
     * @param CategoryInterface $category
     * @param User $user
     */
    public function __construct(ArticleInterface $article, CategoryInterface $category, User $user)
    {
        View::share('active', 'blog');
        $this->article = $article;
        $this->user    = $user;
        $this->category = $category;
        $this->perPage = config('fully.modules.article.per_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pagiData = $this->article->paginate(Input::get('page', 1), $this->perPage, true);
        $articles = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);

        $users = User::select(DB::raw('concat(first_name," ",last_name) as full_name,id'))->lists('full_name', 'id');

        return view('backend.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->category->lists();

        $users = User::select(DB::raw('concat(first_name," ",last_name) as full_name,id'))->lists('full_name', 'id');

        return view('backend.article.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        try {
            $this->article->create(Input::all());

            Flash::message('Article was successfully added');

            return langRedirectRoute('admin.article.index');
        }
        catch (ValidationException $e)
        {
            return langRedirectRoute('admin.article.create')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int        $id
     * @return Response
     */
    public function show($id)
    {
        $article = $this->article->find($id);

        return view('backend.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int        $id
     * @return Response
     */
	public function edit($id)
	{
		$article = $this->article->find($id);
		//$user = $article->getUsers()->lists('name', 'id')->all();
		//$category = Category::lists('title', 'id');

		//$users   = User::select(DB::raw('concat(first_name," ",last_name) as full_name,id'))->lists('full_name', 'id');
		$tags = null;
		foreach ($article->tags as $tag) {
			$tags .= ','.$tag->name;
		}
		$tags = substr($tags, 1);

		$users = $this->user->lists();
		$categories = $this->category->lists();

		return view('backend.article.edit', compact('article', 'tags', 'categories', 'users'));
	}


	//public function edit($id)
    //{
    //    $article = $this->article->find($id);
    //    //$users   = User::select(DB::raw('concat(first_name," ",last_name) as full_name,id'))->lists('full_name', 'id');
    //
    //    $tags = null;

        //foreach ($article->tags as $tag)
        //{
        //    $tags .= ',' . $tag->name;
        //}
        //
        //$tags       = substr($tags, 1);
        //$categories = $this->category->lists();

    //    return view('backend.article.edit', compact('article', 'tags', 'categories', 'users'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  int        $id
     * @return Response
     */
    public function update($id)
    {
        try {
            $this->article->update($id, Input::all());
            Flash::message('Article was successfully updated');

            return langRedirectRoute('admin.article.index');
        }
        catch (ValidationException $e)
        {
            return langRedirectRoute('admin.article.edit')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int        $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->article->delete($id);
        Flash::message('Article was successfully deleted');

        return langRedirectRoute('admin.article.index');
    }

    /**
     * @param $id
     */
    public function confirmDestroy($id)
    {
        $article = $this->article->find($id);

        return view('backend.article.confirm-destroy', compact('article'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function togglePublish($id)
    {
        return $this->article->togglePublish($id);
    }
}
