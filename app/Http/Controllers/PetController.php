<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Client;
use Session;

class PetController extends Controller
{
    public function index(Request $request) 
    {
        // $pets = Pet::where([
        //     ['name', '!=', Null],
        //     [function($query) use ($request) {
        //         if (($term = $request->term)) {
        //             $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
        //         }
        //     }]
        //     ])
        
           $pets = Pet::orderBy('id', 'desc')
            ->paginate(10);
        
        return view('pets.index', compact('pets'));
        // $pets = Pet::orderBy('name', 'asc')->where('id', '<', 21)->get();
        // return view('pets/index', compact('pets'));
    }

    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        $clients = Client::all();

        $client = Client::find($pet->client_id);

        return view('pets/show', compact('pet','clients', 'client'));
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('/pets');
    }
    
        public function create()
    {
        
        return view('pets/create');
        
    }

    public function store(Request $request)
    {
        $request = request();
        
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            // 'age' => 'required'
        ]);

        $pet = new Pet;

        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        // $pet->age = $request->input('age');
        // $pet->weight = $request->input('weight');
        // $pet->client_id = $request->input('owner_id');
        // $pet->photo = $request->input('photo');
        
        $pet->save();

        session()->flash('success_message', 'The pet was successfully saved!');
        return redirect(action('PetController@edit', $pet->id));
    }

    public function edit($id) {

        $pet = Pet::findOrFail($id);

        return view('pets/edit', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'name' => 'required'
        ], [
            'name.required' => 'Please fill in the name'
        ]
    );

        $pet = Pet::findOrFail($id);

        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->client_id = $request->input('owner_id');
        $pet->photo = $request->input('photo');
        
        $pet->save();
        return redirect(action('PetController@edit', $id));
    }
}
