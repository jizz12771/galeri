<?php

namespace App\Http\Controllers;

use App\Models\Fotografer;
use Illuminate\Http\Request;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotografer = Fotografer::all();
    return view('fotografer.index', compact('fotografer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fotografer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nama_fotografer' => 'required']);
        Fotografer::create($request->all());
        return redirect()->route('fotografer.index');
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
         $fotografer = Fotografer::findOrFail($id);
        return view('fotografer.create', compact('fotografer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fotografer = Fotografer::findOrFail($id);
        $fotografer->update($request->all());
        return redirect()->route('fotografer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fotografer::destroy($id);
        return redirect()->route('fotografer.index');
    }
}
