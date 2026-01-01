<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerModel;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $banners = BannerModel::all();
      return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,webp',
            'button' => 'required|string|max:100'
        
        ]);
         $path = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
        }
            $banner = new BannerModel();
            $banner->heading = $request->input('heading');
            $banner->description = $request->input('description');
            $banner->image = $path;
            $banner->button = $request->input('button');
            $banner->save();

        return redirect()->route('banner.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = BannerModel::findOrFail($id);
        return view('backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,webp',
            'button' => 'required|string|max:100'
        
        ]);

        $banner = BannerModel::findOrFail($id);
         $path = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banners', 'public');
        }
            $banner->update([

            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $path,
            'button' => $request->button
           
        ]);

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $banner = BannerModel::findOrFail($id);
        $banner->delete();

        return redirect()->route('banner.index');
    }
}
