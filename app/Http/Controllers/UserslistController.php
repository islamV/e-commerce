<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;




class UserslistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $users = User::groupBy('id')->get();
        
        return view('pages.users.users.users_list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $data =  $request->validate([
            'name' => 'required|string',
            'email' => ['email', 'max:255'],
            'phone' => 'required|string',
            'age' => 'required|string',
            'role' => 'required|string',
            'gender' => 'required|string',
            'country' => 'required|string',
            'password' => 'required|string'

        ]);

       $user= User::create($data);
       $user->profile()->create($data);
        return redirect('UsersList')->with(['success' => 'Adding new User successfuly']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        $image = Image::find($id);
        return view('pages.users.users.view', compact('users', 'image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $image = Image::where('image_id' ,$id)->latest()->first();
        $userImage =" ";
        if ( $image ==null &&  $user->gender  =="male") {

            $userImage ="real.jpg";
       }elseif ($image ==null && $user->gender =="female") {
        $userImage ="cat.jpg";
       }
       else{
        $userImage =$image->image;
       }
        return view('pages.users.users.edit', compact('user', 'userImage'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UsersUpdateRequest  $request, string $id): RedirectResponse
    {
       
        $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->profile->update([
            'phone'=>$request->phone,
            'age'=>$request->age,
            'country'=>$request->country,
            'gender'=>$request->gender,
        ]);
  $request->user()->save();

        return redirect()->back()->with(['success' => 'Updated Profile successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect('UsersList')->with('success', 'Deleted successfuly');
    }
}
