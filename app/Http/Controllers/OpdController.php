<?php

namespace App\Http\Controllers;

use App\Models\SPM;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/opd";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray =json_decode($content, true);
        $data = $contentArray['data'];
        return view('opd.index', ['data' => $data]);
        // dd($data);

        // $respons = Http::withHeaders([
        //     'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJTSVBEX0FVVEhfU0VSVklDRSIsInN1YiI6IjMyMi4zNDIiLCJleHAiOjE3MTA0NDg0NjAsImlhdCI6MTcxMDIzMjQ2MCwidGFodW4iOjIwMjQsImlkX3VzZXIiOjMyMiwiaWRfZGFlcmFoIjozNDIsImtvZGVfcHJvdmluc2kiOiI3MiIsImlkX3NrcGQiOjAsImlkX3JvbGUiOjksImlkX3BlZ2F3YWkiOjMyMiwic3ViX2RvbWFpbl9kYWVyYWgiOiJwYWx1In0.451Rc6UBAXSifqu7PFt7TWwP0RSpttsp26Y9e0ZjQFM'
        // ])->get('https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=LS&status=diterima');
        // $jsonData = $respons->json();
        // dd($jsonData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
