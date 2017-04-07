<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ExercisesController extends Controller
{
  public function index () {
   // list
   // GET /exercises
   $exercises = Exercise::all();
   return Response::json($exercises);
 }
 public function create (Request $request)
 {
   //POST /exercises
   //create a new exercise log
   Exercise::create($request->all());
   return Response::json(['created' => true]);
 }
 public function show ($id)
 {
   //Get /exercises/$id
   $exercise = Exercise::find($id);
   return Response::json($exercise);
 }
 public function update (Request $request, $id)
 {
   //PUT /exercises/$id
   //updates a single exercise
   $exercise = Exercise::find($id);
   $exercise = $exercise->update($request->all());
   return Response::json(['updated' => true]);
 }
 public function destroy ($id)
 {
   //Delete /exercises/$id
   //Remove a single exercise log entry
   $exercise= Exercise::find($id);
   $exercise->delete();
   return Response::json(['deleted' => true]);
 }
}
