@extends('layouts.app')

@section('content')

<div
    class="inline-flex items-center gap-2 px-4 py-1.5 mb-6 bg-white/80 backdrop-blur-sm rounded-full shadow-sm border border-slate-100">
    <span class="w-2 h-2 rounded-full bg-pink-400"></span>
    <span class="text-xs font-semibold text-slate-700 tracking-wide uppercase">À propos</span>
</div>

<!-- Titre principal -->
<h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#0f172a] leading-[1.15] mb-6">
    Conçu pour la clarté.<br class="hidden sm:inline">
    Pensé pour <span class="text-slate-600">aller plus vite.</span>
</h1>

<!-- Présentation -->
<p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-600 leading-relaxed mb-16">
    Nous créons des outils modernes qui éliminent les frictions du quotidien. Notre objectif est simple : rassembler vos
    idées, vos tâches et votre équipe au même endroit sans complexité inutile.
</p>

<!-- Grille des 3 piliers / valeurs -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left mb-16">

    <!-- Carte 1 -->
    <div class="p-6 bg-white/80 backdrop-blur-md rounded-2xl shadow-sm border border-slate-100">
        <div
            class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-100 text-[#0f172a] font-bold text-sm mb-4">
            01
        </div>
        <h2 class="text-lg font-bold text-[#0f172a] mb-2">Simplicité radicale</h2>
        <p class="text-sm text-slate-600 leading-relaxed">
            Chaque fonctionnalité est pensée pour être intuitive dès la première seconde, sans courbe d'apprentissage
            interminable.
        </p>
    </div>

    <!-- Carte 2 -->
    <div class="p-6 bg-white/80 backdrop-blur-md rounded-2xl shadow-sm border border-slate-100">
        <div
            class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-100 text-[#0f172a] font-bold text-sm mb-4">
            02
        </div>
        <h2 class="text-lg font-bold text-[#0f172a] mb-2">Vitesse d'exécution</h2>
        <p class="text-sm text-slate-600 leading-relaxed">
            Une architecture légère et réactive pour que vos projets avancent au rythme de vos idées, sans temps de
            chargement.
        </p>
    </div>

    <!-- Carte 3 -->
    <div class="p-6 bg-white/80 backdrop-blur-md rounded-2xl shadow-sm border border-slate-100">
        <div
            class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-100 text-[#0f172a] font-bold text-sm mb-4">
            03
        </div>
        <h2 class="text-lg font-bold text-[#0f172a] mb-2">Fiabilité totale</h2>
        <p class="text-sm text-slate-600 leading-relaxed">
            Vos données sont synchronisées en temps réel et protégées par des standards de sécurité exigeants.
        </p>
    </div>

</div>

<!-- Bandeau de chiffres clés -->
<div
    class="p-8 bg-white/70 backdrop-blur-md rounded-3xl shadow-sm border border-slate-100 grid grid-cols-1 sm:grid-cols-3 gap-8 mb-14">
    <div>
        <p class="text-3xl font-extrabold text-[#0f172a]">50k+</p>
        <p class="text-xs font-medium text-slate-600 mt-1">Équipes actives</p>
    </div>
    <div>
        <p class="text-3xl font-extrabold text-[#0f172a]">99.9%</p>
        <p class="text-xs font-medium text-slate-600 mt-1">Disponibilité garantie</p>
    </div>
    <div>
        <p class="text-3xl font-extrabold text-[#0f172a]">24/7</p>
        <p class="text-xs font-medium text-slate-600 mt-1">Support dédié</p>
    </div>
</div>

@endsection


{{-- <x-layout>

    <h1>My projects</h1>

</x-layout> --}}