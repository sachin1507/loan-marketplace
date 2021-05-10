<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Newsletter;

class NewsletterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    
        $categories = Category::all()->where('active',1);        
        return view('home', compact('categories'));
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
        }
        echo $request->user_email;
        Newsletter::subscribe('sachingupta22cs@gmail.com');
        return redirect('/');
    }
        
}
