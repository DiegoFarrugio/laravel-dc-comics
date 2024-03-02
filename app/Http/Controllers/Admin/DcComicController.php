<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\DcComic;

class DcComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dcComics = DcComic::all();
        //$dcComics = [];

        return view('dcComics.index', compact('dcComics')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dcComics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $dcComicsData = $request->all();

        $dcComic = new DcComic();
        $dcComic->title = $dcComicsData['title'];
        $dcComic->description = $dcComicsData['description'];
        $dcComic->thumb = $dcComicsData['thumb'];
        $dcComic->price = $dcComicsData['price'];
        $dcComic->series = $dcComicsData['series'];
        $dcComic->sale_date = $dcComicsData['sale_date'];
        $dcComic->type = $dcComicsData['type'];

        //salvo
        $dcComic->save();

        return redirect()->route('dcComics.show',['dcComic' => $dcComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $dcComic)
    {
        return view('dcComics.show', compact('dcComic')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DcComic $dcComic)
    {
        return view('dcComics.edit', compact('dcComic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $dcComic)
    {
        $dcComicsData = $request->all();

        $dcComic->title = $dcComicsData['title'];
        $dcComic->description = $dcComicsData['description'];
        $dcComic->thumb = $dcComicsData['thumb'];
        $dcComic->price = $dcComicsData['price'];
        $dcComic->series = $dcComicsData['series'];
        $dcComic->sale_date = $dcComicsData['sale_date'];
        $dcComic->type = $dcComicsData['type'];

        //salvo
        $dcComic->save();

        return redirect()->route('dcComics.show',['dcComic' => $dcComic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComic $dcComic)
    {
        $dcComic->delete();

        return redirect()->route('dcComics.index');
    }
}
