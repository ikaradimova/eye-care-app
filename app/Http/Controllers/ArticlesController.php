<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        foreach ($articles as $article){
            $article->author = DB::table('users')->where('id', $article->user_id)->value('name');
            $comments = DB::table('comments')
                ->select('comments.*', 'article_comment.*')
                ->join('article_comment', 'comments.id', '=', 'article_comment.comment_id')
                ->where(['article_comment.article_id' => $article->id])
                ->get();

            $article->comments_count = count($comments);
            if($article->comments_count > 0){
                $article->comment_last = $comments->last();
//                $lastCommentUserId = $comments->last()->user_id;
                $article->comment_last_author = DB::table('users')->where(['id' => $comments->last()->user_id])->value('name');
            }
        }

        return view('articles.index')->with('articles', $articles);
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
        $article = new Article();
        $user = auth()->user();
        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->user_id = $user->id;
        echo '<pre>';
        $article->save();
        return redirect("/articles");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $article->author = DB::table('users')->where('id', $article->user_id)->value('name');
        $comments = DB::table('comments')
            ->select('comments.*', 'article_comment.*')
            ->join('article_comment', 'comments.id', '=', 'article_comment.comment_id')
            ->where(['article_comment.article_id' => $article->id])
            ->get();
        foreach ($comments as $comment){
            $comment->author = DB::table('users')->where('id', $comment->user_id)->value('name');
        }
        return view("articles.show")->with('article', $article)->with('comments', $comments); //return a view with the post data
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
        $article = Article::find($id);

        $article->delete();
        return redirect("/articles")->with("success", "Article deleted!");
    }

    public function storeComment(Request $request, $articleId)
    {
        $comment = new Comment();
        $user = auth()->user();
        $comment->body = $request->input('comment');
        $comment->user_id = $user->id;
        $comment->save();

        $commentId = $comment->id;

        DB::table('article_comment')->insert([
            ['article_id' => $articleId, 'comment_id' => $commentId],
        ]);
        return redirect("/articles/{$articleId}");
    }
}
