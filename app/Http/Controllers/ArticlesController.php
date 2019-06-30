<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

use App\Http\Resources\Article as ArticleResource;
class ArticlesController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get articles
        $article = Article::paginate(15);
        //retunr colleciton of articles as a resource

        return ArticleResource::collection($article);
    }


}
