<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContribuinteController extends Controller
{
    use ApiResponde;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contribuinte = Contribuinte::all();
        return $this->sucess($contribuinte);
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
            'user_id' => 'required|integer|exists:App\Models\User, id',
            'telefone' => 'required|max:255',
            'valor' => 'required|max:255',
        ]);
        if ($validated) {
            $contribuinte = new Contribuinte();
            $contribuinte->user_id = $request->get('user_id');
            $contribuinte->telefone = $request->get('telefone');
            $contribuinte->valor = $request->get('valor');
            $contribuinte->save();
            return $this->sucess($contribuinte);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
