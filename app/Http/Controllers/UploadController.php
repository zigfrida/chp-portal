<?php

namespace App\Http\Controllers;

use App\UploadedFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

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
            abort(403);
        }

        $uploaded = $request->file('filelolol');
        $userID = $request->input('user_id');
        $fileClassType = $request->input('file_type');
        $graphType = $request->get('selection');
        $filename = $uploaded->getClientOriginalName();

        $tableEntry = new UploadedFiles();

        $tableEntry->user_id = $userID;
        $tableEntry->filename = $uploaded->getClientOriginalName();
        $tableEntry->file_type = $fileClassType;
        $tableEntry->save();

        if ($fileClassType == 'A') {
            Storage::disk('local')->putFileAs(
                'A',
                $uploaded,
                $filename
            );

            return redirect('/admin');
        } elseif ($fileClassType == 'B') {
            Storage::disk('local')->putFileAs(
                'B',
                $uploaded,
                $filename
            );

            return redirect('/admin');
        } elseif ($fileClassType == 'AB') {
            Storage::disk('local')->putFileAs(
                'AB',
                $uploaded,
                $filename
            );

            return redirect('/admin');
        } elseif($fileClassType == 'Graph'&& $graphType == 'A'){
            
            $destinationPath = 'upload/Graph/A';
            $files = File::files($destinationPath);
            if ($files !== false) {
                foreach($files as $file){
                    unlink($file);
                }
            }
            $originalFile = "ClassAGraph." . $uploaded->getClientOriginalExtension();
            //$originalFile = $uploaded->getClientOriginalName();
            $uploaded->move($destinationPath, $originalFile);

            return redirect('/admin');
        } elseif($fileClassType == 'Graph'&& $graphType == 'B'){
            $destinationPath = 'upload/Graph/B';
            $files = File::files($destinationPath);
            if ($files !== false) {
                foreach($files as $file){
                    unlink($file);
                }
            }
            $originalFile = "ClassBGraph." . $uploaded->getClientOriginalExtension();
            //$originalFile = $uploaded->getClientOriginalName();
            $uploaded->move($destinationPath, $originalFile);
            return redirect('/admin');
        }
        Storage::disk('local')->putFileAs(
            $userID,
            $uploaded,
            $filename
        );

        return redirect('/'.$userID.'/'.'portfolio');
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
