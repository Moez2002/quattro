<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
  public function __construct()
  {
    $this->middleware('permission:view permission', ['only'=>['index']]);
    $this->middleware('permission:create permission', ['only'=>['create','store']]);
    $this->middleware('permission:update permission', ['only'=>['update','edit']]);
    $this->middleware('permission:delete permission', ['only'=>['destroy']]);

  }
    public function index()
    {
        $permissions = Permission::get();
        return view('roles-permission.permission.permissions', ['permissions' => $permissions]);
        
    }
    public function create()
    {
        return view('roles-permission.permission.create');
    }
    public function store(request $request)
    {
      $permission = Permission::create([
        'name' => $request->name,
      ]);
        return redirect('permissions');

    }
    public function edit(Permission $permission)
    {
      return view ('roles-permission.permission.edit',[
        'permission' =>$permission
      ]);
    }
    public function update(request $request, Permission $permission)
    {
      $permission->update([
        'name' =>$request->name

      ]);
      return redirect ('permissions');

    }
    public function destroy($permissionid)
    {
      $permission=Permission::find($permissionid);
      $permission->delete();
      return redirect('permissions');

    }
}
