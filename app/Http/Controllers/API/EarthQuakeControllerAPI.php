<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\EarthQuake;


class EarthQuakeControllerAPI extends Controller
{
    public function index()
    {
        $earthquake = EarthQuake::all();

        return response()->json(['earthquake'=>$earthquake],200);
    }

}
