<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class SubCategoryController extends Controller
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
        
        $subcategories = SubCategory::with('category')->get();
    
        return view('admin.subcategory.index', compact('subcategories'));
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

        return view('admin.subcategory.create', compact('categories'));
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

        /*$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/

        $category = new SubCategory;        
        $category->name = request('name');
        $category->cat_id = request('cat_id');        
        $category->active = request('active');
        
        

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName); 
            $category->image = $imageName;     
        }

        $category->save();

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $categories = Category::all();
        $subcategory = SubCategory::findOrFail($id);

        return view('admin.subcategory.edit', compact('categories','subcategory'));
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

        $category = SubCategory::where('id',$id)->first();        
        $category->name = request('name');
        $category->cat_id = request('cat_id');        
        $category->active = request('active');

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName); 
            $category->image = $imageName;     
        }

        $category->save();  

        return redirect()->route('admin.subcategory.index');
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
        $category = SubCategory::findOrFail($id);
        $category->delete();       

        return redirect()->route('admin.subcategory.index');
    }
}
