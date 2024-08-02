<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $departement = Departement::all();
        return view('departement/depart', ['departement' => $departement]);
    }
    public function tambah()
    {
        return view('departement/tambah');
    }
    public function proses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        Departement::create([
            'name' => $validated['name'],
        ]);

        return redirect('/departement');
    }
    public function edit($id)
    {
        $departement = Departement::find($id);
        return view('/departement/edit', ['departement' => $departement]);
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $depart = Departement::find($id);
        $depart->name = $validated['name'];
        $depart->save();
        return redirect('/departement');
    }

    public function hapus($id)
    {
        $depart = Departement::find($id);
        $depart->delete();
        return redirect('/departement');
    }
}
