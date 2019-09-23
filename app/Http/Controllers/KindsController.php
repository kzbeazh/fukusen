<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;    // 追加

class KindsController extends Controller
{

    public function choto()
    {
        $works = Work::where('worksCategory', "ちょくちょく回収型")->orderBy('created_at', 'desc')->paginate(); 
 
        return view('kinds.kindsChoto', [
            'works' => $works,
        ]);
    }
    
    public function saigo()
    {
        $works = Work::where('worksCategory', "最後にドカン型")->orderBy('created_at', 'desc')->paginate(); 
 
        return view('kinds.kindsSaigo', [
            'works' => $works,
        ]);
    }
    
    public function imifu()
    {
        $works = Work::where('worksCategory', "意味不明型")->orderBy('created_at', 'desc')->paginate(); 
 
        return view('kinds.kindsImifu', [
            'works' => $works,
        ]);
    }
 
///////////////////////////////////////////////////////

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
