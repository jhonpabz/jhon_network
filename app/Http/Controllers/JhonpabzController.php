<?php

namespace App\Http\Controllers;

use App\Models\Jhonpabz;
use App\Models\Network;
use Illuminate\Http\Request;


class JhonpabzController extends Controller
{
    public function index()
    {
        // route --> /jhonpabz/
        $jhonpabz = Jhonpabz::with('network')->orderBy('created_at', 'desc')->paginate(10);

        return view('jhonpabz.index', ["jhonpabz" =>  $jhonpabz]);
    }

    public function show(Jhonpabz $jhonpabz)
    {
        // $jhonpabz = Jhonpabz::with('network')->findOrFail($id);
        $jhonpabz->load("network");
        return view('jhonpabz.show', ["jhonpabz" => $jhonpabz]);
    }

    // public function settings(Jhonpabz $jhonpabz)
    // {
    //     // $jhonpabz = Jhonpabz::with('network')->findOrFail($id);
    //     $jhonpabz->load("network");
    //     return view('jhonpabz.settings', ["jhonpabz" => $jhonpabz]);
    // }

    public function create()
    {
        $network = Network::all();
        return view('jhonpabz.create', ['network' => $network]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'network_id' => 'required|exists:networks,id',
        ]);

        Jhonpabz::create($validated);

        return redirect()->route('jhonpabz.index')->with('success', 'Jhonpabz Network Created !');
    }

    public function destroy(Jhonpabz $jhonpabz)
    {
        // $jhonpabz = Jhonpabz::findOrFail($id);
        $jhonpabz->delete();

        return redirect()->route('jhonpabz.index')->with('success', 'Jhonpabz Network Deleted !');;
    }
}
