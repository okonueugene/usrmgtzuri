<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id', 'asc')->paginate(10);
        return view('users', compact('users'));
    }
    public function edit(User $user){

    return view('edituser',['user'=>$user]);
   }
   public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back();
    }
    public function update(Request $request ,User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('home');

        }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    
    }
}