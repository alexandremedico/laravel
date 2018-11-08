<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Actor as Actor;
use App\Genre as Genre;

class View extends Controller
{
    public function home()
    {
      return view('welcome');
    }
    public function series()
    {
      $series = Serie::all();
      // dd($series[0]->genres);
      return view('series', ['series' => $series]);
    }
    public function addSeries()
    {
      $actors = Actor::all();
      $genres = Genre::all();
      return view('addseries', [
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }

    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $actors = Actor::all();
      $genres = Genre::all();
      return view('update', [
        'serie'=> $serie,
        'actors' => $actors,
        'genres' => $genres,
      ]);
    }
}
