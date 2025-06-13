
<?php
namespace App\Http\Controllers;

use App\Models\Citoyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CitoyenController extends Controller
{
    public function index()
    {
        $citoyens = Citoyen::all();
        return view('admin.citoyens.index', compact('citoyens'));
    }

    public function create()
    {
        return view('admin.citoyens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:255',
            'email' => 'required|email|unique:citoyens,email',
            'password' => 'required|min:6',
        ]);

        Citoyen::create([
            'Nom' => $request->Nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('citoyens.index')->with('success', 'Citoyen créé avec succès');
    }

    public function edit(Citoyen $citoyen)
    {
        return view('admin.citoyens.edit', compact('citoyen'));
    }

    public function update(Request $request, Citoyen $citoyen)
    {
        $request->validate([
            'Nom' => 'required|string|max:255',
            'email' => 'required|email|unique:citoyens,email,' . $citoyen->id,
        ]);

        $citoyen->update([
            'Nom' => $request->Nom,
            'email' => $request->email,
        ]);

        return redirect()->route('citoyens.index')->with('success', 'Citoyen modifié avec succès');
    }

    public function destroy(Citoyen $citoyen)
    {
        $citoyen->delete();
        return redirect()->route('citoyens.index')->with('success', 'Citoyen supprimé');
    }
}
