@extends('layouts.app')

@section('title', 'Tableau de bord')
@section('content')

  <x-page-header
  title='Tableau de bord'
  subtitle="Vue d'ensemble de la structure académique." />
   {{-- Stats globales --}}
    <div class="grid grid-cols-3 gap-4 mb-8">
        <x-stat-card label="Années académiques" value="3" color="gray">

        </x-stat-card>

        <x-stat-card label="Filières actives" value="3" color="gray">

        </x-stat-card>

        <x-stat-card label="Unités d'Enseignement" value="52" color="red">

        </x-stat-card>
    </div>

    <form>

        <x-form.input
        name="nom"
        id="nom"
        label="NOM"
        placeholder="Waffo lele"
        />
        <x-form.input
        name="date"
        id="rang"
        type="range"
        label="Date"
        placeholder=""
        />
    </form>

    <x-badge>
        Active
    </x-badge>


@endsection
