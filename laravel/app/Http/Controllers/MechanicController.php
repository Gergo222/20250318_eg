<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function apiGet(){
        $mechanics = Mechanic::query()
            ->with(["services"])
            ->get();
        return response()->json($mechanics);
    }

    public function apiCreate(Request $request){
        $mechanic = Mechanic::create($request->all());

        return response()->json($mechanic, 201);
    }

    public function apiUpdate(Mechanic $mechanic, Request $request){
        $mechanic->update($request->all());
        $mechanic->save();

        return response()->json($mechanic);
    }

    public function apiDelete(Mechanic $mechanic){
        $mechanic->delete();

        return response()->json("", 204);
    }

    public function list(){
        $mechanics = Mechanic::query()
            ->with(["services"])
            ->get();
        
        return view("mechanics.list", ["mechanics" => $mechanics]);
    }

    public function createForm(){
        return view("mechanics.create");
    }

    public function updateForm(Mechanic $mechanic){
        return view("mechanics.update", ["mechanic" => $mechanic]);
    }

    public function create(Request $request){
        $mechanic = Mechanic::create(
            $request->except("_token")
        );

        return redirect()->route("mechanics.list");
    }

    public function update(Mechanic $mechanic, Request $request){
        $mechanic->update($request->except("_token"));
        $mechanic->save();

        return redirect()->route("mechanics.list");
    }

    public function delete(Mechanic $mechanic){
        $mechanic->delete();

        return redirect()->route("mechanics.list");
    }
}
