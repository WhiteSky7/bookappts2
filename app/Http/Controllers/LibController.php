<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lib;
use App\Http\Resources\Lib as LibResource;
use App\Http\Resources\LibCollection;

class LibController extends Controller
{
    public function index()
    {

       $lib = Lib::all();
        
        return $lib->books()->where('lib_id')->get();;
    }
    public function show($id)
    {
        $lib = Lib::find($id);

        return $lib->books()->where('lib_id',$id)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $lib = Lib::create($request->all());

        return (new LibResource($lib));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:255',
            ]);

            $lib = Lib::find($id);
            $lib->name = $request->get('name');
            $lib->save();

        return (new LibResource($lib))
        ->response()
        ->setStatusCode(202);


    }
    public function delete($id)
    {
        $lib = Lib::findOrFail($id);
        $lib->delete();

        return response()->json(null, 204);
    }

}
