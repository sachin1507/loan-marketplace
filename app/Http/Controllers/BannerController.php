<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class BannerController extends Controller
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

        $banners = Banner::all();

        return view('admin.banner.index', compact('banners'));
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

        return view('admin.banner.create');
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

        $banner = new Banner;        
        $banner->name = request('name');
        $banner->sub_title = request('sub_title');
        $banner->title = request('title');
        $banner->button_text = request('button_text');
        $banner->button_link = request('button_link');
        $banner->description = request('description');
        $banner->slug = Str::slug(request('name'), '-');       
        $banner->active = request('active');
        
        

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/banners', $imageName); 
            $banner->image = $imageName;     
        }

        $banner->save();

        return redirect()->route('admin.banner.index');
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

        $banner = Banner::findOrFail($id);

        return view('admin.banner.edit', compact('banner'));
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

        $banner = Banner::where('id',$id)->first();        
        $banner->name = request('name');
        $banner->sub_title = request('sub_title');
        $banner->title = request('title');
        $banner->button_text = request('button_text');
        $banner->button_link = request('button_link');
        $banner->description = request('description');
        //$banner->slug = request('slug');        
        $banner->active = request('active');

        // Store uploaded file...
        if($request->hasFile('image')) {                
            $file = $request->file('image');         
            $imageName = time().'-'.$file->getClientOriginalName();
            $request->image->storeAs('public/banners', $imageName); 
            $banner->image = $imageName;     
        }

        $banner->save();  

        return redirect()->route('admin.banner.index');
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
        $banner = Banner::findOrFail($id);
        $banner->delete();       

        return redirect()->route('admin.banner.index');
    }
}
