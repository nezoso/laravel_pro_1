<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $art = Article::first();
        return view('article.index',['art'=>$art]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create article';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return 'show article';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return 'edit article';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
