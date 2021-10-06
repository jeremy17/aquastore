<?php

namespace App\Http\Controllers\API;

use App\Models\Aquarium;
use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [ //inputs are not empty or null
            'species' => 'required',
            'color' => 'required',
            'number_of_fins' => 'required',
            'aquarium_id' => 'required',
        ]);

        $fish = new Fish();
        $fish->species = $request->input('species'); //retrieving user inputs
        $fish->color = $request->input('color');  //retrieving user inputs
        $fish->number_of_fins = $request->input('number_of_fins');  //retrieving user inputs
        $fish->aquarium_id = $request->input('aquarium_id');  //retrieving user inputs
        $aquarium = Aquarium::findorFail($fish->aquarium_id);
        if ($aquarium->checkCompatible($fish)) {
            $fish->save(); //storing values as an object
        } else {
            return response()->json([], 500);
        }
        return response()->json($fish, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [ //inputs are not empty or null
            'species' => 'required',
            'color' => 'required',
            'number_of_fins' => 'required',
            'aquarium_id' => 'required',
        ]);

        $fish = Fish::findorFail($id);
        $fish->species = $request->input('species'); //retrieving user inputs
        $fish->color = $request->input('color');  //retrieving user inputs
        $fish->number_of_fins = $request->input('number_of_fins');  //retrieving user inputs
        $fish->aquarium_id = $request->input('aquarium_id');  //retrieving user inputs
        $fish->save(); //storing values as an object
        return response()->json($fish, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
