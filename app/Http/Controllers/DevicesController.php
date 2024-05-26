<?php

namespace App\Http\Controllers;

use App\Models\TbDevices;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    // Display a listing of the resource.
    public function index() { return TbDevices::all(); }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $tbDevices = new TbDevices;
        $tbDevices->TbDevices_name = $request->TbDevices_name;
        $tbDevices->location_id = $request->location_id;
        $tbDevices->TbDevices_type_id = $request->TbDevices_type_id;
        $tbDevices->save();
        return response()->json(["message" => "Devices created successfully"], 201); 
         }

    //Display the specified resource
    public function show(string $id) { return TbDevices::find($id); }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        if (TbDevices::where('id', $id)->exists()) {
            $TbDevices = TbDevices::find($id);
            $TbDevices->devices_name = is_null($request->TbDevices_name) ? $TbDevices->TbDevices_name : $request->TbDevices_name;
            $TbDevices->location_id = is_null($request->location_id) ? $TbDevices->location_id : $request->location_id;
            $TbDevices->TbDevices_type_id = is_null($request->TbDevices_type_id) ? $TbDevices->TbDevices_type_id : $request->TbDevices_type_id;
            $TbDevices->save();
            return response()->json(["message" => "TbDevices updated successfully"], 201);
        } else { return response()->json(["message" => "TbDevices not found"], 404); } }

    //Remove the specified resource from storage.
    public function destroy(string $id)
    {
        if (TbDevices::where('id', $id)->exists()) {
            $TbDevices = TbDevices::find($id);
            $TbDevices->delete();
            return response()->json(["message" => "TbDevices deleted successfully"], 201); }
        else { return response()->json(["message" => "TbDevices not found"], 404); }
    }
}