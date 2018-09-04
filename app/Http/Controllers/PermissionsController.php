<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PermissionsController extends Controller
{

    public function permissionPost(Request $request){


        date_default_timezone_set('Asia/Calcutta');

        $permissions = new Permission();
        $permissions->name = $request->input('name');
        $permissions->created_at = "2018-08-01";
        $permissions->created_by = "Respati";
        $permissions->modifier_at = "2018-08-01";
        $permissions->modifier_by = "Respati";
        $permissions->save();

        return response()->json('success');
    }

    public function permissionGet(){

        $permission = Permission::all();
        return response()->json(['data' => $permission], 200);
    }
}
