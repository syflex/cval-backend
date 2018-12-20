<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\CropClaimant;
use App\CropData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claimant = CropClaimant::get();
        return view('home', compact('claimant'));
    }

    public function generatePDF()
    {

        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('myPDF', $data);


        return $pdf->download('hdtuto.pdf');

    }

    public function PDF($id)
    {
        $claimant = CropClaimant::where('id', $id)->first();

        $data = CropData::where('crop_claimant_id', $claimant->id)->get();

        return view('pdf', compact('claimant','data'));

        

        // $pdf = PDF::loadView('PDF', compact('claimant','data'));


        // return $pdf->download('NNPC.pdf');

    }
}
