<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CropClaimant;
use App\CropData;

class CropClaimantController extends Controller
{
    public $successStatus = 201;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claimant = CropClaimant::get();   
       
        return response()->json(
            [
                'status' => 'successful',
                'data' => $claimant,
                'message' => 'saved successfully'
            ],
            $this-> successStatus
        );
    }


    public function all()
    {
        $claimant = CropClaimant::get();   
        $data = CropData::get();
       
        return response()->json(
            [
                'status' => 'successful',
                'claimant' => $claimant,
                'data' => $data,
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
        $claimant = CropClaimant::create([
            'valuer_id' => $request->valuer_id,
            'claimant_id' => $request->claimant_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'other_name' => $request->other_name,
            'location' => $request->location,
            'community' => $request->community,
            'coordinates' => $request->coordinates,
            'date' => $request->date,
            'image' => $request->image,
            'signature' => $request->c_signature,
        ]);   
        
        $claimant_id = $claimant->id;

        foreach($request->crops as $item){
            $data[] = ['type' => $item['type']['value'], 'name' => $item['name']['value'], 'maturity' => $item['maturity']['value'],'unit' => $item['unit'], 'price' => $item['price'], 'value' => $item['value'], 'crop_claimant_id' => $claimant_id];
        }

        $insert = CropData::insert($data);

        return response()->json(
            [
                'status' => 'successful',
                'data' => $claimant,
                'message' => 'saved successfully'
            ],
            $this-> successStatus
        );
    }

    public function insertall(Request $request)
    {
        
        foreach($request->claimants as $item){
            $data[] = ['id' => $item['id'], 'attorney_signature' => $item['attorney_signature'], 
            'claimant_id' => $item['claimant_id'], 'community' => $item['community'],'coordinates' => $item['coordinates'], 
            'finger_print' => $item['finger_print'], 'first_name' => $item['first_name'], 'last_name' => $item['last_name'],
            'location' => $item['location'], 'other_name' => $item['other_name'], 'valuer_id' => $item['valuer_id'],
            'signature' => $item['signature'], 'image' => $item['image']
        ];
        };

        CropClaimant::truncate();
        $insert = CropClaimant::insert($data);

        $data1 = [];
        foreach($request->data as $item){
            $data1  += ['id' => $item['id'], 'type' => $item['type'], 'name' => $item['name'], 'maturity' => $item['maturity'],'unit' => $item['unit'], 'price' => $item['price'], 'value' => $item['value'], 'crop_claimant_id' => $item['crop_claimant_id']];
        };
        CropData::truncate();
        $insert = CropData::insert($data1);

        // return response()->json(
        //     [
        //         'status' => 'successful',
        //         'data' => $claimant,
        //         'message' => 'saved successfully'
        //     ],
        //     $this-> successStatus
        // );
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
