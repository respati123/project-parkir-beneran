<?php

namespace App\Http\Controllers\Api\v1;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class MenusController extends Controller
{
    public function index(){

        $menu = Menu::paginate(15);

        return response()->json([
            'menu' => $menu
        ], Response::HTTP_ACCEPTED);
    }

    public function store(Request $request){


        $name       = $request->input('name');
        $parent     = $request->input('parent');

        Menu::create([
            'name' => $name,
            'parent_id' => $parent,
            'created_by' => 'respati',
            'created_at' => '2018-08-01',
            'modifier_by' => 'respati',
            'modifier_at' => '2018-08-01',
        ]);

        return response()->json([
            'success'
        ], Response::HTTP_OK);
    }

    public function show($id){

       $menu = Menu::findOrFail($id)->get();
       $parent_id = $menu[0]['parent_id'];

       if($parent_id == -1){
           $getDataParent = array( array('id' => -1, 'name' => '-'));
       } else {
          $getDataParent = Menu::findOrFail($parent_id)->get();
       }

       return response()->json([
          $menu[0],
           $getDataParent[0]
       ], Response::HTTP_ACCEPTED);
    }
}
