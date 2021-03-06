<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StructureClaimant;
use App\StructureData;

class StructureController extends Controller
{
    public $successStatus = 201;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claimant = StructureClaimant::get();
       
        return response()->json(
            [
                'status' => 'successful',
                'data' => $claimant,
                'message' => 'saved successfully'
            ],
            $this-> successStatus
        );
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
        $claimant = StructureClaimant::create([
            'valuer_id' => $request->valuer_id,
            'claimant_id' => $request->claimant_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'other_name' => $request->other_name,
            'location' => $request->location,
            'community' => $request->community,
            'coordinates' => $request->coordinates,
            'image' => $request->image,
            'signature' => $request->c_signature,
        ]);   
        
        $claimant_id = $claimant->id;

        foreach($request->structures as $item){
            $data[] = ['name' => $item['name'], 'quantity' => $item['quantity'],'cost' => $item['cost'],'value' => $item['value'], 'structure_claimant_id' => $claimant_id];
        }

        $insert = StructureData::insert($data);

        return response()->json(
            [
                'status' => 'successful',
                'data' => $claimant,
                'message' => 'saved successfully'
            ],
            $this-> successStatus
        );
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
