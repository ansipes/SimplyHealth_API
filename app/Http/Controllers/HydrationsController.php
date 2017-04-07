<?php

namespace App\Http\Controllers;

use App\Hydration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class HydrationsController extends Controller
{
  public function index () {
   // GET /hydrations
   // lists all hydration log entries
   $hydrations = Hydration::all();
   return Response::json($hydrations);
 }
 public function create (Request $request)
 {
   // POST /hydrations
   // creates a new hydration log entry
   Hydration::create($request->all());
   return Response::json(['created' => true]);
 }
 public function show ($id)
 {
   // GET /hydrations/$id
   // lists a specific hydration log entry
   $hydration = Hydration::find($id);
   return Response::json($hydration);
 }
 public function update (Request $request, $id)
 {
   // PUT /hydrations/$id
   // updates a single hydration
   $hydration = Hydration::find($id);
   $hydration = $hydration->update($request->all());
   return Response::json(['Updated' => true]);
 }
 public function destroy ($id)
 {
   // DELETE /hydrations/$id
   // removes a single hydration log entry
   $hydration= Hydration::find($id);
   $hydration->delete();
   return Response::json(['deleted' => true]);
 }
}
