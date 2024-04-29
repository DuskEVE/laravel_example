<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Basic::all());
        return view('basic.index', ['datas'=>Basic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $formDatas = $request->validate([
            'name'=>['required', 'unique:basics'],
            'amount'=>'required'
        ]);
        $formDatas['NO'] = 101;
        $datas = new Basic($formDatas);
        $datas->save();

        return redirect('/basic');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('basic.index', ['data'=>Basic::find($id), 'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('basic.edit', ['data'=>Basic::find($id), 'id'=>$id]);
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
