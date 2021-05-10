<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class CategoryController extends Controller
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

        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
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

        return view('admin.category.create');
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

        $category = new Category;        
        $category->name = request('name');        
        $category->active = request('active');
        
        

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName); 
            $category->image = $imageName;     
        }

        $category->save();

        return redirect()->route('admin.category.index');
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

        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
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

        $category = Category::where('id',$id)->first();        
        $category->name = request('name');        
        $category->active = request('active');

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName); 
            $category->image = $imageName;     
        }

        $category->save();  

        return redirect()->route('admin.category.index');
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
        $category = Category::findOrFail($id);
        $category->delete();       

        return redirect()->route('admin.category.index');
    }
}
