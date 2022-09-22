<?php

namespace App\Http\Controllers;

use App\Models\bodega;

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodegasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega = bodega::all();
        if(!$bodega){
            echo("not stores found");
        }else{
        return $bodega;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodega= new bodega();
        $bodega->name = $request->name;
        $bodega->id_responsable = $request->responsable;
        $bodega->estado = $request->estado;
        $bodega->save();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $bodega = bodega::findOrFail($id);
        if(!$bodega){
            echo("store not found");
        }else{
            $bodega->name = $request->name;
            $bodega->id_responsable = $request->responsable;
            $bodega->estado = $request->estado;
            $bodega->save();
        }
        return $bodega;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cantidad=DB::select(('SELECT cantidad FROM `inventarios` as i
        INNER JOIN bodegas as b
        on i.id_bodega=b.id
        WHERE b.id="+$id+"'));
        $bodega = bodega::findOrFail($id);
        if(!$bodega){
            echo("store not found");
        }elseif($cantidad==0){
            return [MailController::class, 'sendEmail'];
            $bodega->delete();
        }else{
            echo("cantidad mayor a 0 no se puede borrar");
        }
    }
}
