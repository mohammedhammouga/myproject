<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use  Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {


        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
             $tasks = Task::all(); 
            return view('admin.index',compact('tasks'));
            
        }
        else{
           
             
            return view('user.index' );
        }
    }
    public function show()
    {
        $user = Auth::user(); 
        
        return view('user.profil', compact('user'));
    }
    public function updateBio(Request $request)
    {
        $request->validate([
            'bio' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->bio = $request->bio;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Bio updated successfully!');
    }
}
