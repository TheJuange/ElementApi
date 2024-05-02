<?php

namespace App\Http\Controllers;

use App\Models\elementos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class elementosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elementos = elementos::all();
        if($elementos->count()>0){
            return response()->json($elementos);
        }
        return response()->json(["Message"=>"There are no elements"]);   
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            "num_atomico"=>"required|integer",
            "simbolo"=>"string|required|min:1",
            "nombre"=>"required|string",
            "grupo"=>"required|integer",
            "periodo"=>"required|integer"
        ]);
        try{
            $elemento =elementos::create([
                "num_atomico"=>$request->num_atomico,
                "simbolo"=>$request->simbolo,
                "nombre"=>$request->nombre,
                "grupo"=>$request->grupo,
                "periodo"=>$request->periodo,
                "densidad"=>$request->densidad,
                "fusion"=>$request->fusion,
                "ebullicion"=>$request->ebullicion
            ]);
    
            return response()->json([
                "Message"=>"created new element",
                "Element"=>$elemento
            ],201);
        }
        catch(\Exception $e){
            return response()->json([
                'Message'=>'An error occurred while creating the new element'
            ],500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|min:1'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'Error details' => 'The ID must be a positive integer greater than or equal to 1.'
            ], 400); // Bad Request
        }
        
        try{
            $elemento = elementos::findOrFail($id);
            if($elemento->count() > 0){
                return response()->json($elemento,200);
            }
            return response()->json([
                "Message"=>"The element does not exist"
            ],404);
        }catch(\Exception $e){
            return response()->json([
                "Message"=>"An error has occurred.",
                "Error details"=>$e->getMessage()
            ],500);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "num_atomico"=>"required|integer",
            "simbolo"=>"string|required|min:1",
            "nombre"=>"required|string",
            "grupo"=>"required|integer",
            "periodo"=>"required|integer"
        ]);
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|min:1'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'Error details' => 'The ID must be a positive integer greater than or equal to 1.'
            ], 400); // Bad Request
        }

        try{
            $elemento = elementos::findOrFail($id);
            if($elemento->count() > 0){
                $elemento->update([
                    "num_atomico"=>$request->num_atomico,
                    "simbolo"=>$request->simbolo,
                    "nombre"=>$request->nombre,
                    "grupo"=>$request->grupo,
                    "periodo"=>$request->periodo,
                    "densidad"=>$request->densidad,
                    "fusion"=>$request->fusion,
                    "ebullicion"=>$request->ebullicion
                ]);
                return response()->json([
                    "Message"=>"Element updated successfully",
                    "Element"=>$elemento
                ],200);
            }
            return response()->json([
                "Message"=>"The element does not exist"
            ],404);
        }catch(\Exception $e){
            return response()->json([
                "Message"=>"An error has occurred.",
                "Error details"=>$e->getMessage()
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|min:1'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'Error details' => 'The ID must be a positive integer greater than or equal to 1.'
            ], 400); // Bad Request
        }

        try{
            $elemento = elementos::findOrFail($id);
            if($elemento->count()>0){
                $elemento->delete();
                return response()->json([
                    'Message'=>"element has been successfully removed",
                    "Element"=>$elemento->nombre
                ],200);
            }
                

        }catch(\Exception $e){
            return response()->json([
                "Message"=>"An error has occurred.",
                "Error details"=>$e->getMessage()
            ],500);
        }
    }
}
