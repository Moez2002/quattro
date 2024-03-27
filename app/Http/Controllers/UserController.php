<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view users', ['only'=>['index']]);
      $this->middleware('permission:create users', ['only'=>['create','store']]);
      $this->middleware('permission:update users', ['only'=>['update','edit']]);
      $this->middleware('permission:delete users', ['only'=>['destroy']]);
  
    }
    public function index()
    {
        $users=User::get();
        return view('roles-permission.user.users',[
            'users' =>$users
        ]);
    }
    public function create()
    {
        $roles= Role::pluck('name','name')->all();
        return view('roles-permission.user.create',[
            'roles' =>$roles
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|email|max:255|unique:users,email',
            'password' =>'required|string|min:8|max:20',
            'roles' => 'required',
        ]);

        $user= User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'is_admin'=>1,
                     
                ]);
        $user-> syncRoles($request->roles);
        return redirect ('users');
    }
    public function edit(user $user)
    {
        $roles= Role::pluck('name','name')->all();
        $userRoles= $user->roles->pluck('name','name')->all();
        return view('roles-permission.user.edit',[
            'user'=>$user,
            'roles'=>$roles,
            'userRoles'=>$userRoles
        ]);

    }
    public function update(request $request, user $user)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'password' =>'required|string|min:8|max:20',
            'roles' => 'required',
        ]);
        $data= [
            'name'=>$request->name,
            'email'=>$request->email,   
            'is_admin'=>1,
        ];

        if(!empty($request->password)){
            $data+=[
            'password'=>Hash::make($request->password),
            ];
        }

        $user->update($data);
        $user-> syncRoles($request->roles);

        return redirect('users');

    }
    public function destroy($userid)
    {
        $user=User::findorfail($userid);
        $user->delete();
        return redirect('users');

    }
}
