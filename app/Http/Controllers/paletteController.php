<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Palette;
use App\Models\Colors;
use RealRashid\SweetAlert\Facades\Alert;
class paletteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!is_null($request->name)){
            $name = $request->name;
            $users = \App\Models\User::where('name','like','%'.$name.'%')->get();
            $ids = [];
            $palettes = [];
            foreach($users as $user){
                array_push($ids, $user->id);
            }
            foreach($ids as $id){
                $palettesForId = Palette::with('colors')->where('user_id', $id)->get();
                foreach($palettesForId as $pal){
                    array_push($palettes, $pal);
                }
            }
            return view('paletteView', compact('palettes'));
        }
        else{
            $palettes = Palette::with('colors')->get();
            return view('paletteView', compact('palettes'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $palette = new Palette;
        $palette->user_id = \Auth::user()->id;

        $palette->save();
        $palette->colors()->attach($request->colors);
        Alert::success('Palette Saved', 'The palette has been saved to your profile');
        return redirect()->back();
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
