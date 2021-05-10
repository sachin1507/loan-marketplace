<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }

        $articles = Article::all();

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }

        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $article = new Article;        
        $article->name = request('name');
        $article->sub_title = request('sub_title');
        $article->title = request('title');
        $article->button_text = request('button_text');
        $article->button_link = request('button_link');
        $article->description = request('description');
        $article->slug = Str::slug(request('title'), '-');        
        $article->active = request('active');
        
        

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/articles', $imageName); 
            $article->image = $imageName;     
        }

        $article->save();

        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $article = Article::where('slug',$slug)->first();
        return view('article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }

        $article = Article::findOrFail($id);

        return view('admin.article.edit', compact('article'));
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
        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }

        $article = Article::where('id',$id)->first();        
        $article->name = request('name');
        $article->sub_title = request('sub_title');
        $article->title = request('title');
        $article->button_text = request('button_text');
        $article->button_link = request('button_link');
        $article->description = request('description');
        $article->slug = Str::slug(request('title'), '-');     
        $article->active = request('active');

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/articles', $imageName); 
            $article->image = $imageName;     
        }

        $article->save();  

        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ( Auth::user()->userrole != "Admin") {
            return abort(401, 'Access Denied');
        }
        $article = Article::findOrFail($id);
        $article->delete();       

        return redirect()->route('admin.article.index');
    }
}
