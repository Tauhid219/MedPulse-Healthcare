@extends('layouts.app')

@section('title', 'MedPulse | Medical Clinical Services')

@section('body-attributes', "x-data={ currentFilter: 'all' }")

@section('content')
    <header class="bg-gradient-to-b from-blue-50/50 to-transparent py-12 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span
                class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Clinical
                Specialties</span>
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">
                Advanced Care, Focused on You.
            </h1>
            <p class="max-w-xl mx-auto text-slate-500 text-base sm:text-lg">
                Explore our full digital medical taxonomy. Filter across highly technical medical departments to match
                your therapeutic tracking needs.
            </p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-12">

        <section class="flex flex-wrap gap-2 pb-4 border-b border-slate-200 overflow-x-auto">
            <button @click="currentFilter = 'all'"
                :class="currentFilter === 'all' ? 'bg-slate-900 text-white shadow-sm' : 'bg-white text-slate-600 hover:bg-slate-100'"
                class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 transition whitespace-nowrap">
                All Specialities
            </button>
            <button @click="currentFilter = 'diagnostics'"
                :class="currentFilter === 'diagnostics' ? 'bg-slate-900 text-white shadow-sm' : 'bg-white text-slate-600 hover:bg-slate-100'"
                class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 transition whitespace-nowrap">
                <i class="fa-solid fa-microscope text-blue-500 mr-1.5"></i> Diagnostics & Lab
            </button>
            <button @click="currentFilter = 'cardiovascular'"
                :class="currentFilter === 'cardiovascular' ? 'bg-slate-900 text-white shadow-sm' : 'bg-white text-slate-600 hover:bg-slate-100'"
                class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 transition whitespace-nowrap">
                <i class="fa-solid fa-heart-pulse text-rose-500 mr-1.5"></i> Cardiovascular Care
            </button>
            <button @click="currentFilter = 'neurology'"
                :class="currentFilter === 'neurology' ? 'bg-slate-900 text-white shadow-sm' : 'bg-white text-slate-600 hover:bg-slate-100'"
                class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 transition whitespace-nowrap">
                <i class="fa-solid fa-brain text-indigo-500 mr-1.5"></i> Neurology Sciences
            </button>
            <button @click="currentFilter = 'wellness'"
                :class="currentFilter === 'wellness' ? 'bg-slate-900 text-white shadow-sm' : 'bg-white text-slate-600 hover:bg-slate-100'"
                class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200 transition whitespace-nowrap">
                <i class="fa-solid fa-seedling text-emerald-500 mr-1.5"></i> Preventive & Wellness
            </button>
        </section>

        <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($services as $service)
                @php
                    $bgColor = 'bg-blue-50 text-blue-600';
                    if ($service->category === 'cardiovascular') {
                        $bgColor = 'bg-rose-50 text-rose-600';
                    } elseif ($service->category === 'neurology') {
                        $bgColor = 'bg-indigo-50 text-indigo-600';
                    } elseif ($service->category === 'wellness') {
                        $bgColor = 'bg-emerald-50 text-emerald-600';
                    }
                @endphp
                <div x-show="currentFilter === 'all' || currentFilter === '{{ $service->category }}'"
                    class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md hover:border-blue-500/30 transition flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="h-10 w-10 {{ $bgColor }} rounded-xl flex items-center justify-center text-lg">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">{{ $service->title }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $service->description }}</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-medium">
                        <span class="text-slate-400">{{ $service->duration ?? 'N/A' }}</span>
                        <a href="{{ route('home') }}#book" class="text-blue-600 hover:underline">Schedule <i
                                class="fa-solid fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-muted py-5">No services available.</div>
            @endforelse
        </section>

        <section
            class="bg-slate-950 rounded-3xl p-6 sm:p-8 text-white border border-slate-800 shadow-xl grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-3">
                <span class="text-xs font-semibold uppercase tracking-wider text-blue-400"><i
                        class="fa-solid fa-calculator mr-1"></i> Diagnostic Estimation Tool</span>
                <h2 class="text-2xl font-bold tracking-tight">Calculate Out-Of-Pocket Expenses</h2>
                <p class="text-slate-400 text-xs leading-relaxed">
                    Select desired custom biometric components below to receive immediate, transparent cost estimates
                    mapped alongside network insurance co-pay standards.
                </p>
            </div>

            @php
                $genomicPrice = $services->first(function($s) { return stripos($s->title, 'Genomic') !== false; })->price_estimate ?? 350;
                $cardiacPrice = $services->first(function($s) { return stripos($s->title, 'Echocardiography') !== false; })->price_estimate ?? 220;
                $lipidPrice = $services->first(function($s) { return stripos($s->title, 'Lipid') !== false; })->price_estimate ?? 85;
            @endphp
            <div class="lg:col-span-2 bg-white/5 rounded-2xl p-6 border border-white/10"
                x-data="{ genomic: false, cardiac: false, lipid: false, calculateTotal() { return (this.genomic ? {{ (int)$genomicPrice }} : 0) + (this.cardiac ? {{ (int)$cardiacPrice }} : 0) + (this.lipid ? {{ (int)$lipidPrice }} : 0) } }">
                <div class="space-y-4">
                    <div class="grid sm:grid-cols-3 gap-3">
                        <div @click="genomic = !genomic"
                            :class="genomic ? 'border-blue-500 bg-blue-500/10' : 'border-white/10 hover:border-white/20'"
                            class="border p-3 rounded-xl cursor-pointer transition select-none">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-xs font-medium text-slate-300">Genomic Sequencing</span>
                                <input type="checkbox" x-model="genomic"
                                    class="rounded text-blue-600 focus:ring-0 bg-transparent border-white/20">
                            </div>
                            <span class="text-sm font-bold text-white">${{ (int)$genomicPrice }}</span>
                        </div>

                        <div @click="cardiac = !cardiac"
                            :class="cardiac ? 'border-blue-500 bg-blue-500/10' : 'border-white/10 hover:border-white/20'"
                            class="border p-3 rounded-xl cursor-pointer transition select-none">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-xs font-medium text-slate-300">Echocardiography</span>
                                <input type="checkbox" x-model="cardiac"
                                    class="rounded text-blue-600 focus:ring-0 bg-transparent border-white/20">
                            </div>
                            <span class="text-sm font-bold text-white">${{ (int)$cardiacPrice }}</span>
                        </div>

                        <div @click="lipid = !lipid"
                            :class="lipid ? 'border-blue-500 bg-blue-500/10' : 'border-white/10 hover:border-white/20'"
                            class="border p-3 rounded-xl cursor-pointer transition select-none">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-xs font-medium text-slate-300">Lipid Fractionation</span>
                                <input type="checkbox" x-model="lipid"
                                    class="rounded text-blue-600 focus:ring-0 bg-transparent border-white/20">
                            </div>
                            <span class="text-sm font-bold text-white">${{ (int)$lipidPrice }}</span>
                        </div>
                    </div>

                    <div
                        class="pt-4 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div class="text-center sm:text-left">
                            <span class="text-[10px] uppercase text-slate-400 tracking-wider block">Estimated Total
                                Co-Pay Amount</span>
                            <span class="text-3xl font-black text-emerald-400">$<span
                                    x-text="calculateTotal()"></span>.00</span>
                        </div>
                        <button
                            class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs px-6 py-3 rounded-xl transition shadow-lg shadow-blue-500/10">
                            Pre-Authorize Claims Filing
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
