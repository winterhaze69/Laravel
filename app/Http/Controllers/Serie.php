<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
 public function insertOne(Request $request)
 {

      $serie = new \App\Serie;
      $serie->title = $request->input('title');
      $serie->publication_year =$request->input('publication_year');
      $serie->save();
      $serie->actors()->attach($request->input('actors'));
      $serie->genres()->attach($request->input('genres'));
      return redirect('/list');
 }
public function deleteOne(Request $request)
{
  \App\Serie::destroy($request->input('id'));
  return redirect('/list');
}
public function updateOne(Request $request)
{
  //
  $serie = \App\Serie::find($request->input('id'));
  $serie->title = $request->input('title');
  $serie->publication_year =$request->input('publication_year');
  $serie->save();
  $serie->actors()->detach();
  $serie->genres()->detach();
  $serie->actors()->attach($request->input('actors'));
  $serie->genres()->attach($request->input('genres'));
  return redirect('/list');

}
public function insertactor(Request $request)
{
  $actor = new \App\Actor;
  $actor->first_name = $request->input('firstName');
  $actor->last_name =$request->input('lastName');
  $actor->save();
 return redirect('/actors');
}
public function deleteactor(Request $request)
{
  \App\Actor::destroy($request->input('id'));
  return redirect('/actors');
}
public function deletegenre(Request $request)
{
  \App\Genre::destroy($request->input('id'));
  return redirect('/genres');
}
public function insertgenre(Request $request)
{
  $genre = new \App\Genre;
  $genre->name = $request->input('name');

  $genre->save();
 return redirect('/genres');
}
}
