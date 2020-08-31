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
        $json_data = $request->getBody()->getContents();
        $response = collect(json_decode($json_data));
        $data = $response['OUT_DATA'];

        return view('brand.view',compact('data'));
    }

    public function search(Request $request)
    {
        $client = new Client();
        $url = '172.16.4.32:8301/restv2/doBrandGreg/allfunction';
        if($request->CD_BRAND!='')
        {
          $brand = [
            "brand" => [
                "FUNCTION" => "search",
                "CD_BRAND" => $request->CD_BRAND,
                "DESC_BRAND" => ""
            ]
         ];
        }else{
          return redirect('/viewBrand')->with('info','Data Saved Succesfully');
        } 
        $header = ['headers' => ['Content-Type' => 'application/json'],'json'=>$brand];
        $request = $client->post($url,$header);
        $json_data = $request->getBody()->getContents();
        $response = collect(json_decode($json_data));
        $data = $response['OUT_DATA'];

        return view('brand.view',compact('data'));
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
                "FUNCTION" => "insert",
                "CD_BRAND" => $request->CD_BRAND,
                "DESC_BRAND" => $request->DESC_BRAND
            ]
        ];
        // $brand = json_encode($brand);

        $request = $client->post('172.16.4.32:8301/restv2/doBrandGreg/allfunction',['headers' => ['Content-Type' => 'application/json'],'json'=>$brand]);
        $json_data = $request->getBody()->getContents();

        return redirect('/viewBrand')->with('info','Data Saved Succesfully');
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
    public function update(Request $request, $id = "")
    {
        $client = new Client();
        $url = '172.16.4.32:8301/restv2/doBrandGreg/allfunction';
        $brand = [
            "brand" => [
                "FUNCTION" => "update",
                "CD_BRAND" => $id,
                "DESC_BRAND" => $request->input('DESC_BRAND')
            ]
        ];
        $header = ['headers' => ['Content-Type' => 'application/json'],'json'=>$brand];
        $request = $client->post($url,$header);
        $response = $request->getBody()->getContents();

        return ($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id="")
    {
        //
        $client = new Client();
        $url = '172.16.4.32:8301/restv2/doBrandGreg/allfunction';
        $brand = [
            "brand" => [
                "FUNCTION" => "delete",
                "CD_BRAND" => $id,
                "DESC_BRAND" => ""
            ]
        ];
        $header = ['headers' => ['Content-Type' => 'application/json'],'json'=>$brand];
        $request = $client->post($url,$header);
        $response = $request->getBody()->getContents();

        return ($response);
        
    }
}
