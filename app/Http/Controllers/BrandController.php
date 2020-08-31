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
        $client = new Client();
        $url = '172.16.4.32:8301/restv2/doBrandGreg/allfunction';
        $brand = [
            "brand" => [
                "FUNCTION" => "get",
                "CD_BRAND" => "",
                "DESC_BRAND" => ""
            ]
        ];
        $header = ['headers' => ['Content-Type' => 'application/json'],'json'=>$brand];
        $request = $client->post($url,$header);
        $response = $request->getBody()->getContents();

        return ($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brand.create');
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
        $client = new \GuzzleHttp\Client();
        $brand = [
            "brand" => [
                "FUNCTION" => $request->FUNCTION,
                "CD_BRAND" => $request->CD_BRAND,
                "DESC_BRAND" => $request->DESC_BRAND
            ]
        ];
        // $brand = json_encode($brand);

        $request = $client->post('172.16.4.32:8301/restv2/doBrandGreg/allfunction',['headers' => ['Content-Type' => 'application/json'],'json'=>$brand]);
        $response = $request->getBody()->getContents();

        dd($response);
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
    public function update(Request $request, Brand $brand)
    {
        //
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
