<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
//        $articles = Article::paginate(15);
        // Return collection of articles as a resource
        $articles = Article::all();
//        return view("eye-diseases.index")->with('eyeDiseases', $eyeDiseases);
        return view('articles.index')->with('articles', $articles);
//        return ArticleResource::collection($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;
        $article = new Article();
        $user = auth()->user();
//        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
//        $role = DB::table('roles')->where('id', $roleId)->first()->name;
//        echo '<pre>';
//        var_dump($user->id);
//        var_dump($request->input('title'));
//        var_dump($request->input('body'));die;
        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->user_id = $user->id;
        echo '<pre>';
//        var_dump($article);die;
        $article->save();
        return redirect("/articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get article
//        $article = Article::findOrFail($id);
//        // Return single article as a resource
//        return new ArticleResource($article);
        $article = Article::find($id); //get the post using the ID
        return view("articles.show")->with('article', $article); //return a view with the post data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
