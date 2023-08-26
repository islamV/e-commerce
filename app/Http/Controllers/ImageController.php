<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $user_id =User::find($id);

        $data = $request->validate([
            'image' => 'required|image',
            'user_id' =>'required'
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move(public_path('photos'), $filename);
            $data['image'] = $filename ;
        }

        Image::create($data);

        return redirect('UsersList')->with('success', 'Image stored successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Retrieve the existing image data
        $existingImage = Image::where('image_id', $id)->first();
    
        $data = $request->validate([
            'image1',
            'image2',
            'image3',
        ]);
    
        // Update the image if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('photos'), $filename);
    
            // Delete the old image file if it exists
            if ($existingImage && file_exists(public_path('photos/'.$existingImage->image))) {
                unlink(public_path('photos/'.$existingImage->image));
            }
    
            $data['image'] = $filename;
        }
    
        // Update other data if necessary
        // For example: $data['user_id'] = $id;
    
        // Update the image data in the database
        if ($existingImage) {
            $existingImage->update($data);
        } else {
            $data['image_id'] = $id;
            Image::create($data);
        }
        return redirect()->back()->with('success', 'Image updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
