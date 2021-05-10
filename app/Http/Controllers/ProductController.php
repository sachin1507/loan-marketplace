<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;



class ProductController extends Controller
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

        $articles = Product::with('category','subcategory')->get();        

        return view('admin.product.index', compact('articles'));
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

        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
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

        $article = new Product;        
        $article->name = request('name');
        $article->sub_title = request('sub_title');
        $article->cat_id = request('cat_id');
        $article->subcat_id = request('subcat_id');
        $article->title = request('title');
        $article->title1 = request('title1');
        $article->title2 = request('title2');
        $article->title3 = request('title3');
        $article->content1 = request('content1');
        $article->content2 = request('content2');
        $article->content3 = request('content3');
        $article->button_text = request('button_text');
        $article->button_link = request('button_link');
        $article->description = request('description');
        $article->slug = Str::slug(request('title'), '-');       
        $article->active = request('active');
        
        

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/products', $imageName); 
            $article->image = $imageName;     
        }

        $article->save();

        return redirect()->route('admin.product.index');
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
        $article = Product::where('slug',$slug)->first();
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

        $article = Product::findOrFail($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();        

        return view('admin.product.edit', compact('article','categories','subcategories'));
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

        $article = Product::where('id',$id)->first();        
        $article->name = request('name');
        $article->sub_title = request('sub_title');
        $article->title = request('title');
        $article->title1 = request('title1');
        $article->title2 = request('title2');
        $article->title3 = request('title3');
        $article->content1 = request('content1');
        $article->content2 = request('content2');
        $article->content3 = request('content3');
        $article->button_text = request('button_text');
        $article->button_link = request('button_link');
        $article->description = request('description');
        $article->slug = Str::slug(request('title'), '-');        
        $article->active = request('active');

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/products', $imageName); 
            $article->image = $imageName;     
        }

        $article->save();  

        return redirect()->route('admin.product.index');
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
        $article = Product::findOrFail($id);
        $article->delete();       

        return redirect()->route('admin.product.index');
    }

    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubCategoryAjax($id)
    {
        $subcategories = DB::table("subcategory")
                    ->where("cat_id",$id)
                    ->where("active",1)
                    ->pluck("name","id");
        return json_encode($subcategories);
    }

}
