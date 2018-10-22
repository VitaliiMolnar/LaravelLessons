<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainPage()
    {
        return 'Main page';
        //return view('welcome');
    }

    public function about(Request $request)
    {
        $name = $request->input('name', '');
        //$age = $request->input('age');

        $user1 = new\stdClass();
        $user1->name = 'Вася';

        $user2 = new\stdClass();
        $user2->name = 'Петя';

        $users = [];

        array_push($users, $user1, $user2);

        return view('les3.asd', [
            'name' => $name,
            'age' => $request->input('age'),
            'users' => $users
        ]);
    }

    public function getNews(Request $request, $id, $slug)
    {
        return 'NEWS_CONTENT ' . $id . $slug; 
    }
}