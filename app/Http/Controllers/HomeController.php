<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Newsletter;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutus()
    {    
        $categories = Category::all();        
        return view('aboutus', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function article()
    {    
        $categories = Category::all();        
        return view('article', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {    
        $categories = Category::all();        
        return view('blog', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cardcomparison()
    {    
        $categories = Category::all();        
        return view('cardcomparison', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function comparison()
    {    
        $categories = Category::all();        
        return view('comparison', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {    
        $categories = Category::all();        
        return view('contact', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function guidestips()
    {    
        $categories = Category::all();        
        return view('guidestips', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function investor()
    {    
        $categories = Category::all();        
        return view('investor', compact('categories'));
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
        }
        
        Newsletter::subscribe('sachingupta22cs@gmail.com');
        echo "Check --> ".$request->user_email; 
        $getMem = Newsletter::getMember('sachingupta22cs@gmail.com');
        $err = Newsletter::getLastError();
        print_r($getMem);        
        die;
        return redirect('/');
    }
        
}
