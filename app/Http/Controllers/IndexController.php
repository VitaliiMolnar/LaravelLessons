<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Implementations\Counter;
use App\Interfaces\CounterInterface;

class IndexController extends Controller
{
    protected $request, $counter;

    public function __construct( Request $request, CounterInterface $counter)
    {
        $this->counter = $counter;
        //$this->counter = resolve('Counter');
        $this->request = $request;
    }

    public function mainPage()
    {
        return 'Main page';
        //return view('welcome');
    }

    public function about()
    {
        //$counter = new Counter();
        $this->counter->increment();
        $this->counter->increment();
        echo $this->counter->getValue();

        $name = $this->request->input('name', '');
        //$age = $request->input('age');

        $user1 = new \stdClass();
        $user1->name = 'Вася';

        $user2 = new \stdClass();
        $user2->name = 'Петя';

        $users = [];

        array_push($users, $user1, $user2);

        return view('les3.asd', [
            'name' => $name,
            'age' => $this->request->input('age'),
            'users' => $users
        ]);
    }

    public function getNews(Request $request, $id, $slug)
    {
        return 'NEWS_CONTENT ' . $id . $slug; 
    }
}