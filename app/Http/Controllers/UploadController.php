<?php

namespace App\Http\Controllers;

use App\UploadedFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Storage::put(
        //     'filelolol.julian', $request->file('filelolol')
        // );
        if (!$request->user()->isAdmin() && $request->user()->id != $request->input('user_id')) {
            return 'fuck u u aint hacking this lol';
        }

        $uploaded = $request->file('filelolol');
        $userID = $request->input('user_id');

        $filename = $uploaded->getClientOriginalName();

        $tableEntry = new UploadedFiles();

        $tableEntry->user_id = $userID;
        $tableEntry->filename = $uploaded->getClientOriginalName();
        $tableEntry->save();

        Storage::disk('local')->putFileAs(
            $userID,
            $uploaded,
            $filename
        );

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
