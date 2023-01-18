<?php

namespace App\Http\Controllers;

use App\Models\medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medi=medico::all();
        return view('lista.index',compact('medi'));
            
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['nombre'=>'required',
            'apellido'=>'required',
            'area'=>'required',
            'turno'=>'required',
        ]);
        $medi=medico::create($request->all());
        return redirect()->route('lista.index',$medi);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medi=medico::findOrfail($id);
        return view('lista.show', compact('medi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit( $medi)
    {
        $medi=medico::find($medi);
        return view('lista.edit', compact('medi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $medi)
    {
         $medi=medico::find($medi);
        $medi->update($request->all());
        return redirect()->route('lista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medi=medico::find($id);
        $medi->delete();
        return redirect()->route('lista.index');
    }
}
