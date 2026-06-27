@extends('layouts.app')

@section('title', 'Modifier')

@section('content')

    <x-page-header title="Modifier l'Année Académique" subtitle="{{ $academicYear->libelle }}" />

    <div class="max-w-xl bg-white border border-gray-200 rounded-md p-6">
        <form action="{{ route('academic.academic-years.update', $academicYear->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PATCH')
            <x-form.input
                name="libelle"
                label="Libellé"
                value="{{ old('libelle',$academicYear->libelle) }}"
                />

            <div class="grid grid-cols-2 gap-4">
                <x-form.input
                    name="date_debut"
                    label="Date de début"
                    type="date"
                    value="{{ old('date_debut', $academicYear->date_debut->format('Y-m-d')) }}"
                    />

                <x-form.input
                    name="date_fin"
                    label="Date de fin"
                    type="date"
                    value="{{ old('date_fin', $academicYear->date_fin->format('Y-m-d')) }}"
                    />
            </div>

            <div class="flex items-center gap-3">
                <input type="checkbox" id="est_active" name="est_active"
                       {{ old('est_active', $academicYear->est_active) ? 'checked' : '' }}
                       class="w-4 h-4 rounded border-gray-300 text-red-600 focus:ring-red-500">
                <label for="est_active" class="text-sm text-gray-700">
                    Année active
                </label>
            </div>

            <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
                <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 transition-colors">
                    Mettre à jour
                </button>
                <a href="/academic/academic-years"
                   class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                    Annuler
                </a>
            </div>
        </form>
    </div>

@endsection
