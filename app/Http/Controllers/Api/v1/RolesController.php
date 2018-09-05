<?php

namespace App\Http\Controllers\Api\v1;

use App\Permission;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class RolesController extends Controller
{
    public function store(Request $request){

        $rolesRequest   = $request->input('roles');
        $roleName       = $request->input('name');

        $roleValue = array();
      for($i = 0; $i < count($rolesRequest); $i++){
          $temp = $rolesRequest[$i];
          $roleValue[$i] = $temp['value'];
      }

      $roles = new Role();
      $roles->create([
          'name' => $roleName['value'],
          'created_at' => '2018-08-10',
          'created_by' => 'respati',
          'modifier_at' => '2018-08-11',
          'modifier_by' => 'respati',

      ])->permission()->attach($roleValue);

      return response()->json([
          'message' => 'success',
          'data'    => $roles->permission()->get()
      ]);

    }

    public function index(){

        $roles = Role::paginate(15);
        $data = $roles->load('Permission');

        return response()->json([
           'data' => $data,
        ]);
    }

    public function show($id){

        $roles = Role::find($id);

        $data = $roles->load('Permission');

        return response()->json(['data' => $data], Response::HTTP_OK);
    }


    public function update(Request $request, $id){


        $dataTemp = $request->all();
        for($i = 0; $i < count($dataTemp); $i++){
            $dataRole = $dataTemp['role'];
            $dataName = $dataTemp['name'];
        }

        $dataSync = array();
        foreach($dataTemp['role'] as $key => $req){
            $dataSync[$key] = $req['value'];
        }

        $post = Role::find($id);
        $post->update([
            'name' => $dataTemp['name']['name']
        ]);
        $post->permission()->sync($dataSync);

        return response()->json('success', Response::HTTP_OK);
    }
}
