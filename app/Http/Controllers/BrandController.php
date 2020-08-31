<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('172.16.4.32:8301/restv2/doBrandGreg/allfunction', [
        "brand" => [
            "FUNCTION" =>"get",
            "CD_BRAND" =>"",
            "DESC_BRAND" =>"" 
        ]
        ]);
        $data = $result->getBody();
        $data = json_decode($data);
        dd($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $CD_BRAND)
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('172.16.4.32:8301/restv2/doBrandGreg/allfunction', [
        "brand" => [
            "FUNCTION" =>"update",
            "CD_BRAND" =>$CD_BRAND,
            "DESC_BRAND" =>$request->input('DESC_BRAND') 
        ]
        ]);
        $data = $result->getBody();
        $data = json_decode($data);
        dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
