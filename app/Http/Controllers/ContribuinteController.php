<?php

namespace App\Http\Controllers;

use App\Models\Contribuinte;
use App\Models\User;
use Illuminate\Http\Request;

class ContribuinteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contribuintes = Contribuinte::all();
        return view("adm/contribuinte", compact('contribuintes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("adm/contribuinte/create", compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'telefone' => 'required|max:255',
            'valor' => 'required|max:255',
        ]);
        if ($validated) {
            $contribuinte = new Contribuinte();
            $contribuinte->user_id = $request->get('user_id');
            $contribuinte->telefone = $request->get('telefone');
            $contribuinte->valor = $request->get('valor');
            $contribuinte->save();
            return redirect("contribuinte");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contribuinte  $contribuinte
     * @return \Illuminate\Http\Response
     */
    public function show(Contribuinte $contribuinte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contribuinte  $contribuinte
     * @return \Illuminate\Http\Response
     */
    public function edit(Contribuinte $contribuinte)
    {
        $users = User::all();
        return view("adm/contribuinte/edit", compact('users', 'contribuinte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contribuinte  $contribuinte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contribuinte $contribuinte)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'telefone' => 'required|max:255',
            'valor' => 'required|max:255',
        ]);
        if ($validated) {
            $contribuinte->user_id = $request->get('user_id');
            $contribuinte->telefone = $request->get('telefone');
            $contribuinte->valor = $request->get('valor');
            $contribuinte->save();
            return redirect("contribuinte");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contribuinte  $contribuinte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contribuinte $contribuinte)
    {
        $contribuinte->delete();
        return redirect("contribuinte");
    }
}
