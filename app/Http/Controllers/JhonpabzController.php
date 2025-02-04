<?php

namespace App\Http\Controllers;

use App\Models\Jhonpabz;
use Illuminate\Http\Request;


class JhonpabzController extends Controller
{
    public function index()
    {
        // route --> /jhonpabz/
        $jhonpabz = Jhonpabz::orderBy('created_at', 'desc')->get();

        return view('jhonpabz.index', ["jhonpabz" =>  $jhonpabz]);
    }

    public function show($id)
    {
        // route --> /jhonpabz/{id}

    }

    public function create($id)
    {
        // route --> /jhonpabz/create
        // render a create view (with web form) to users
    }

    public function store($id)
    {
        // route --> /jhonpabz/ (POST)
        // handle POST request to store a new ninja record in table
    }
}
