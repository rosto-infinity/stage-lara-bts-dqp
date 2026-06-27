<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use App\Http\Requests\Academic\StoreAcademicYearRequest;

use App\Http\Requests\Academic\UpdateAcademicYearRequest;
use App\Models\Academic\AcademicYear;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicYears = AcademicYear::orderByDesc('date_debut')->paginate(15);
        return view('academic.academic-years.academic-years-index', compact('academicYears'));
    }

    public function toggle(AcademicYear $academicYear): RedirectResponse
    {
        $academicYear->update(['est_active' => !$academicYear->est_active]);
        $status = $academicYear->est_active ? 'activée' : 'désactivée';

        return back()->with('success', "L'année académique {$academicYear->libelle} a été {$status}.");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('academic.academic-years.academic-years-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcademicYearRequest $request)
    {
        AcademicYear::create($request->validated());
        return to_route('academic.academic-years.index')
            ->with('success','Année Academique created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(AcademicYear $academicYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademicYear $academicYear)
    {
       $academicYear = AcademicYear::findOrFail($academicYear->id);
       return view('academic.academic-years.academic-years-edit', compact('academicYear'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcademicYearRequest $request, AcademicYear $academicYear)
    {
        $academicYear = AcademicYear::findOrFail($academicYear->id);

        $validatedData = $request->validated();
        //$validatedData['est_active'] = $request->has('est_active');

        $academicYear->update($validatedData);
        return to_route('academic.academic-years.index')
            ->with('success','Année Academique updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $academicYear =AcademicYear::findOrFail($id);
        $academicYear->delete();
        return to_route('academic.academic-years.index')
            ->with('succes','L\'année académique a été supprimée.');
    }
}
