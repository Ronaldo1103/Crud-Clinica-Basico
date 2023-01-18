<?php

namespace App\Http\Controllers;
use App\Models\medico;
use App\Models\cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista=cita::all();
       return view('cita.index',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medico=medico::orderBy('nombre')->get();
        return view('cita.create',compact('medico'));
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
            'apellidoma'=>'required',
            'apellidopa'=>'required',
            'medico'=>'required',
        ]);
        $lista=cita::create($request->all());
        return redirect()->route('cita.index',$lista);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita=cita::findOrfail($id);
        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($lista)
    {
        
        $lista=cita::find($lista);
        return view('cita.edit', compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$lista)
    {
       
        $lista=cita::find($lista);
        $lista->update($request->all());
        return redirect()->route('cita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lista=cita::find($id);
        $lista->delete();
        return redirect()->route('cita.index');
    }
}
