<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SpatiePermissionController extends Controller
{
    //

    public function addRoles()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAgent = Role::create(['name' => 'agent']);
        $roleUser = Role::create(['name' => 'user']);

        # table_CRUD

        $permission_users_crate = Permission::create(['name' => 'users_create']);
        $permission_users_read = Permission::create(['name' => 'users_read']);
        $permission_users_update = Permission::create(['name' => 'users_update']);
        $permission_users_delete = Permission::create(['name' => 'users_delete']);


        $roleAdmin->givePermissionTo($permission_users_crate);
        $roleAdmin->givePermissionTo($permission_users_read);
        $roleAdmin->givePermissionTo($permission_users_update);
        $roleAdmin->givePermissionTo($permission_users_delete);


        $roleAgent->givePermissionTo($permission_users_read);


    }

    public function assignRoles()
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleAgent = Role::where('name', 'agent')->first();
        $roleUser = Role::where('name', 'user')->first();


        $majid = User::find(1);
        $msMozafari = User::find(2);
        $ali = User::find(3);

        $majid->assignRole($roleAdmin);
        $msMozafari->assignRole($roleAgent);
        $ali->assignRole($roleUser);


        return 'رول ها با موفقیت اختصاص یافت';

    }

    public function updateRoles(Request $request)
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleAgent = Role::where('name', 'agent')->first();
        $roleUser = Role::where('name', 'user')->first();

        $majid = User::find($request->get('userId'));

        $majid->syncRoles(['admin']);


        return User::where('id', $request->get('userId'))->with('roles')->get();
    }


    public function showRoles()
    {
        $majid = User::find(1);

        return $majid->getRoleNames();
    }

    public function getAllPermissions()
    {
        $majid = User::find(1);

        return $majid->getAllPermissions();
    }


    public function users(Request $request)
    {
        return User::role($request->get('role'))->get();

    }


    public function usersByPermission(Request $request)
    {
        $permission = $request->get('permission');

        return User::permission($permission)->with(['roles', 'permissions'])->get();

    }


    public function createUser()
    {

        #fake login
        Auth::loginUsingId(2);

        $user = Auth::user();


        $result = $user->can('users_read');

        dd($result);

        if ($result)
            return 'create users';
        else
            return redirect('cases');


    }


    public function afterLogin()
    {
        #fake login
        Auth::loginUsingId(1);

        $user = Auth::user();


        if ($user->hasRole(['admin','agent']))
            return redirect('admin/dashboard');

        elseif ($user->hasRole('user'))
            return redirect('/');


        return $user;

    }


}
