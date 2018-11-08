<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
Use App\Actor as Actor;
Use App\Genre as Genre;

class View extends Controller
{
  public function addSeries()
  {
    $actors = Actor::all();
    $genres = Genre::all();
    return view('addseries', [
        "actors" => $actors,
        "genres" => $genres,
    ]);
  }
  public function serieList()
  {
    //Get all series from series table via Serie model
    $series = Serie::all();
    return view('serieList', ['series' => $series]);
  }
  public function home()
  {
    return view('welcome');

  }
  public function contact($name = 'toto')
  {
  return view('contact', [
    "name" => $name,
    "data" => [
      "poulet",
      "carotte",
      "patate",
      "morceaux d'animaux mort",
    ],
    'showAside' => true,
  ]);
  }
  public function updateForm(Request $request)
    {
        $serie = \App\Serie::find($request->input('id'));
        $actors = Actor::all();
        $genres = Genre::all();
        return view('update',[
            'serie'=>$serie,
            'actors'=>$actors,
            'genres'=>$genres,
        ]);
    }
    public function addactor()
    {
      return view('addactor');
    }
    public function addgenre()
    {
      return view('addgenre');
    }
    public function addActors(Request $request)
    {
          $actors = Actor::all();
         return view('addActors', ['actors'=>$actors]);
}
    public function genres(Request $request)
{
      $genres = Genre::all();
     return view('addGenres', ['genres'=>$genres]);
}
}
