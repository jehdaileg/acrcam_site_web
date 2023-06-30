<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = TeamMember::latest()->paginate(15);

        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      //  dd('test');

    //  dd($request->all());

      //$datas_to_save = $request->all();

       // dd('store_member');

        $datas = $request->validate([
            'identifiant_agent' => 'required',
            'nom_complet' => 'required',
            'adresse_de_residence' => 'required',
            'telephone' => 'required',
            'poste' => 'required',
            'nombre_de_mois_contrat' => 'required',
            'typeagent' => 'required',

        ]);

       // dd($datas);

        $file_name = $request->file('photo')->getClientOriginalName();

        $path = $request->file('photo')->storeAs('images_staffs', $file_name, 'public');

        $datas['photo'] = '/storage/'.$path;

       // dd($datas);

        TeamMember::create($datas);

        return redirect()->route('members.index')->with('success', 'Staff crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $member)
    {
        //

        return view('admin.members.show', compact('member'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $member)
    {
        //
        return view('admin.members.edit', compact('member'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $member)
    {
        //
        $datas = $request->validate([
            'identifiant_agent' => 'required',
            'nom_complet' => 'required',
            'adresse_de_residence' => 'required',
            'telephone' => 'required',
            'poste' => 'required',
            'nombre_de_mois_contrat' => 'required',
            'typeagent' => 'required',

        ]);

        $file_name = $request->file('photo')->getClientOriginalName();

        $path = $request->file('photo')->storeAs('images_staffs', $file_name, 'public');

        $datas['photo'] = '/storage/'.$path;

       // dd($datas);

        $member->update($datas);

        return redirect()->route('members.index')->with('success', 'Staff edité avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $member)
    {
        //
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Staff Supprimé avec succès !');
    }
}
