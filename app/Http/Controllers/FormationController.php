<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Formation;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use App\Exports\FormationExport;
use App\Exports\FormationExportPdf;
use Maatwebsite\Excel\Facades\Excel;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return View("formations.index", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations = Formation::all();
        return view("formations.create", compact("formations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required",
            "filiere" => "required",
            "prix" => "required",
            "titre" => "required",
            "description" => "required",
            "image_formateur" => "required",
            "nom_formateur" => "required",
            "followers" => "required",
            "favoris" => "required",
        ]);
        Formation::create([
            "image" => $this->storeImageFormation($request),
            "filiere" => $request->filiere,
            "prix" => $request->prix,
            "titre" => $request->titre,
            "description" => $request->description,
            "image_formateur" => $this->storeImageFormateur($request),
            "nom_formateur" => $request->nom_formateur,
            "followers" => $request->followers,
            "favoris" => $request->favoris
        ]);
        return redirect("/")->with("message", "La formation a été ajoutée");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formation = Formation::findOrFail($id);
        return view("/formations.show", compact("formation"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formation = Formation::findOrFail($id);
        return view("formations.edit", compact("formation"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "image" => "required",
            "filiere" => "required",
            "prix" => "required",
            "titre" => "required",
            "description" => "required",
            "image_formateur" => "required",
            "nom_formateur" => "required",
            "followers" => "required",
            "favoris" => "required",
        ]);
        $formation = Formation::findOrFail($id);
        $formation->update([
            "image" => $this->storeImageFormation($request),
            "filiere" => $request->filiere,
            "prix" => $request->prix,
            "titre" => $request->titre,
            "description" => $request->description,
            "image_formateur" => $this->storeImageFormateur($request),
            "nom_formateur" => $request->nom_formateur,
            "followers" => $request->followers,
            "favoris" => $request->favoris
        ]);
        return redirect(route("formations.index"))->with("message", "La formation a été modifiée");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Formation::destroy($id);
        return redirect(route("formations.index"))->with("message", "La formation a été supprimée");
    }
    private function storeImageFormation($request)
    {
        $newImageName = uniqid() . "." . $request->titre . "." . $request->image->extension();
        return $request->image->move(public_path("images/formations") . $newImageName);
    }
    private function storeImageFormateur($request)
    {
        $newImageName = uniqid() . "." . $request->titre . "." . $request->image->extension();
        return $request->image->move(public_path("images/formations") . $newImageName);
    }
    public function exportExcel()
    {
        return Excel::download(new FormationExport, 'formations.xlsx');
    }
    public function exportPDF()
    {
        $formations = Formation::all();
        $pdf = Pdf::loadView('formations.formationsPdf', compact('formations'));

        return $pdf->save(public_path('my_stored_file.pdf'))->stream('formations.pdf');
    }
}
