<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn()=> view('home'));
Route::get('/dashboard', fn()=> view('dashboard'));


Route::prefix('academic')->name('academic.')->group(function () {

    //Années Académiques
    Route::get('academic-years',
        fn()=> view('academic.academic-years.academic-years-index'))
    ->name('academic-years-index');

    Route::get('academic-years/create',
        fn()=> view('academic.academic-years.academic-years-create'))
        ->name('academic-years.academic-years-create');

    Route::get('academic-years/{id}/edit',
        fn()=> view('academic.academic-years.academic-years-edit'))
        ->name('academic-years.academic-years-edit');


    Route::get('programs',
        fn()=> view('academic.programs.programs-index'))
        ->name('academic-years-index');

    Route::get('programs/create',
        fn()=> view('academic.programs.programs-create'))
        ->name('programs.programs-create');

    Route::get('programs/{id}/edit',
        fn()=> view('academic.programs.programs-edit'))
        ->name('programs.programs-edit');


    // Spécialités
    Route::get('specialties',        fn() => view('academic.specialties.specialties-index'))->name('specialties.index');
    Route::get('specialties/create', fn() => view('academic.specialties.specialties-create'))->name('specialties.create');
    Route::get('specialties/{id}/edit', fn($id) => view('academic.specialties.specialties-edit'))->name('specialties.edit');

    // Niveaux
    Route::get('levels',        fn() => view('academic.levels.levels-index'))->name('levels.index');
    Route::get('levels/create', fn() => view('academic.levels.levels-create'))->name('levels.create');
    Route::get('levels/{id}/edit', fn($id) => view('academic.levels.levels-edit'))->name('levels.edit');

    // Semestres
    Route::get('semesters',        fn() => view('academic.semesters.semesters-index'))->name('semesters.index');
    Route::get('semesters/create', fn() => view('academic.semesters.semesters-create'))->name('semesters.create');
    Route::get('semesters/{id}/edit', fn($id) => view('academic.semesters.semesters-edit'))->name('semesters.edit');

    // Unités d'Enseignement
    Route::get('course-units',        fn() => view('academic.course-units.course-units-index'))->name('course-units.index');
    Route::get('course-units/create', fn() => view('academic.course-units.course-units-create'))->name('course-units.create');
    Route::get('course-units/{id}/edit', fn($id) => view('academic.course-units.course-units-edit'))->name('course-units.edit');
});
