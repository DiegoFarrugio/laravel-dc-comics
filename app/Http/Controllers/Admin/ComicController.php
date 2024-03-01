<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        //$comics = Comic::all();
        //return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        //$comic = Comic::find($id);
        //return view('comics.show', compact('comic'));
    }
}
