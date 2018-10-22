<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainPage()
    {
        return 'Main page';
        //return view('welcome');
    }

    public function about()
    {
        return redirect()
        ->route('index');
    }

    public function getNews(Request $request, $id, $slug)
    {
        return 'NEWS_CONTENT ' . $id . $slug; 
    }
}