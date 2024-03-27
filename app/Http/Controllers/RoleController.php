<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
  public function __construct()
  {
    $this->middleware('permission:view role', ['only'=>['index']]);
    $this->middleware('permission:create role', ['only'=>['create','store',"addPermissionToRole","givePermissionToRole"]]);
    $this->middleware('permission:update role', ['only'=>['update','edit']]);
    $this->middleware('permission:delete role', ['only'=>['destroy']]);

  }
    public function index()
    {
        $roles = role::get();
        return view('roles-permission.role.roles', ['roles' => $roles]);
        
    }
    public function create()
    {
        return view('roles-permission.role.create');
    }
    public function store(request $request)
    {
      $role = role::create([
        'name' => $request->name,
      ]);
        return redirect('roles');

    }
    public function edit(role $role)
    {
      return view ('roles-permission.role.edit',[
        'role' =>$role
      ]);
    }
    public function update(request $request, role $role)
    {
      $role->update([
        'name' =>$request->name

      ]);
      return redirect ('roles');

    }
    public function destroy($roleid)
    {
      $role=role::find($roleid);
      $role->delete();
      return redirect('roles');

    }
    public function addPermissionToRole($roleid)
    {
        $permissions= Permission::get();
        $role = role::findOrFail($roleid);
        $rolePermissions=DB::table('role_has_permissions')
                                  ->where('role_has_permissions.role_id', $role->id)
                                  ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                  ->all();
        return view('roles-permission.role.add-permissions',[
            'role' =>$role,
            'permissions' => $permissions,
            'rolePermissions' =>$rolePermissions
        ]);

    }
    public function givePermissionToRole(request $request, $roleid)
    {
        $request->validate([
            'permission' => 'required'

        ]);
        $role =Role::findorfail($roleid);
        $role->syncPermissions($request->permission);
        
        return redirect('roles');

    }
}
