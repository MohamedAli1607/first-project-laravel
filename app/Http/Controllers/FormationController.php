<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Http\Requests\formationrequest;
use SoftDeletes;  
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //lister toutes les élements
    public function index()
    {
       $f=Formation::paginate(5);   // appel au model Formation
        return view('formation.index',['frm'=>$f]) ;   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //afficher la formulaire de  creation
    public function create()
    {
        return view ('formation.creation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //enregistrer les élement de   dans la base de donnéé
    public function store(Request $request)
    {
        $abc=new Formation(); /*instantiasion au model formation*/
        $abc->nom=$request->input('nomformation');   /*nom c'es nom de la base et nomformation c le nom dans la formulaire*/
         $abc->description=$request->input('descformation');
         $abc->save();
         return redirect('formation');
    }    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //
    public function show($id)
    {
        $a = Formation::find($id);
        return view('formation.show',['d'=>$a]) ; //

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //recupérer les informations selon id  (appeler les champs pour le modifier  )
    public function edit($id)
    {
        $a = Formation::find($id);
        return view('formation.edit',['d'=>$a]) ; //


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //modification (mettre à jour les champs)
    public function update(Request $request, $id)
    {
        $d = Formation::find($id);
        $d->nom=$request->input('nomformation');

         $d->description=$request->input('descformation');
         $d->save();
         return redirect('formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //supprimer les champs de la base de donnée
    public function destroy($id)
    {
        $ss=Formation::find($id);
        $ss->delete();
        return redirect('formation');
            }
}
