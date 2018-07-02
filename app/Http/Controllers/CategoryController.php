<?php

namespace Furbook\Http\Controllers;

use Furbook\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = ['categories'=>[]];
        $categories = Category::all();
        foreach ($categories as $category){
           array_push(
               $response['categories'],
               array(
                'id'=>(int)$category->id,
                'name'=>$category->name
            )
           );
        }
        return response($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name'=>'required|string|max:255'
        ],
        [
            'required' => 'Cột :attribute là bắt buộc.',
            'string' => 'Cột :attribute la ki tu.',
            'max' => 'Cột :attribute độ dài phải nhỏ hơn :max.',
        ]);
        if ($validator->fails()) {
            return response([
                'error'=>$validator->errors()
            ], 400);
        }
        $category = Category::create($request->all());
        $response = array(
            $category = array(
                'id'=>(int) $category->id,
                'name'=> $category->name
            )
        );
        return response ($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $response = array(
            $category = array(
                'id'=>(int) $category->id,
                'name'=> $category->name
            )
        );
        return response($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'=>'required|string',
        ]);
        if($validator->fails()){
            return Response::json(['errors'=>$validator->errors()],400);
        }
        $category->update($request->all());
        $response['categories'][]=[
            'id'=>(int)$category->id,
            'name'=>$category->name
        ];
        return response($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if(!$category->delete()){
            return Response::json(null,500);
        }
        return Response::json(null,204);
    }
}
