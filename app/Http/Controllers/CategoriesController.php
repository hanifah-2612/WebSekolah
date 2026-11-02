<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacategories = Categories::all();
        return view('categories.index',compact('datacategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorie_name' => 'required|string|max:100|unique:categories',
            'description' => 'required|string',
        ]);

        Categories::create([
            'categorie_name' => $request->categorie_name,
            'description' => $request->description
        ]);

        return redirect()->route('categories.index');
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
        $dataeditcategorie = categories::find($id);
        return view('categories.edit', compact('dataeditcategorie'));
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
    $request->validate([
        'categorie_name' => 'required|string|max:100|unique:categories,categorie_name,' . $id . ',categorie_id',
        'description' => 'required|string',
    ]);

    $updatedata = Categories::findOrFail($id);

    $updatedata->update([
        'categorie_name' => $request->categorie_name,
        'description' => $request->description,
    ]);

    return redirect()->route('categories.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::where('categorie_id', $id)->delete();
        return redirect()->route('categories.index');
    }
}
