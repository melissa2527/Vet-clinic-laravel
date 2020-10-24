<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() 
    {
        $clients = Client::orderBy('surname', 'asc')->get();
        return view('clients/index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients/show', compact('client'));
    }

    public function create()
    {
        return view('clients/create');
    }

    public function store(Request $request)
    {
        $request = request();

        $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required'
        ]);

        $client = new Client;

        $client->first_name = $request->input('first_name');
        $client->surname = $request->input('surname');
        $client->address = $request->input('address');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');

        $client->save();
        return redirect(action('ClientController@index'));
        
    }
}
