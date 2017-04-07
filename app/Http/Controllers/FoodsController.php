<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class FoodsController extends Controller
{
  public function index () {
   // GET /foods
   // lists all food log entries
   $foods = Food::all();
   return Response::json($foods);
 }
 public function create (Request $request)
 {
   // POST /foods
   // creates a new food log entry
   Food::create($request->all());
   return Response::json(['created' => true]);
 }
 public function show ($id)
 {
   // GET /foods/$id
   // lists a specific food log entry
   $food = Food::find($id);
   return Response::json($food);
 }
 public function update (Request $request, $id)
 {
   // PUT /foods/$id
   // updates a single food
   $food = Food::find($id);
   $food = $food->update($request->all());
   return Response::json(['Updated' => true]);
 }
 public function destroy ($id)
 {
   // DELETE /foods/$id
   // removes a single food log entry
   $food= Food::find($id);
   $food->delete();
   return Response::json(['deleted' => true]);
 }
}
