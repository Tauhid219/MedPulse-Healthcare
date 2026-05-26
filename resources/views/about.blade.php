@extends('layouts.app')

@section('title', 'MedPulse | Institutional Profile & Leadership')

@section('content')
    <header class="bg-gradient-to-b from-blue-50/50 to-transparent py-16 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <span
                class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Our
                Institutional Mission</span>
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl max-w-3xl mx-auto">
                Architecting the modern pipeline for decentralized clinical health.
            </h1>
            <p class="max-w-2xl mx-auto text-slate-500 text-base sm:text-lg">
                We bridge the critical gap between ongoing physiological data capturing, expert multi-disciplinary
                medical analysis, and end-to-end encrypted medical distribution systems.
            </p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">

        <section class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 text-center shadow-sm">
                <span class="text-3xl sm:text-4xl font-black text-blue-600 block mb-1">2.4M+</span>
                <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Completed Virtual Triage
                    Sessions</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 text-center shadow-sm">
                <span class="text-3xl sm:text-4xl font-black text-emerald-600 block mb-1">99.8%</span>
                <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">EHR Server Pipeline
                    Uptime</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 text-center shadow-sm">
                <span class="text-3xl sm:text-4xl font-black text-indigo-600 block mb-1">150+</span>
                <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Integrated Clinical
                    Labs</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 text-center shadow-sm">
                <span class="text-3xl sm:text-4xl font-black text-rose-600 block mb-1">45</span>
                <span class="text-xs font-medium text-slate-400 uppercase tracking-wider">Global Board
                    Certifications</span>
            </div>
        </section>

        <section class="space-y-8">
            <div class="text-center space-y-2">
                <h2 class="text-2xl font-bold text-slate-900">Our Evolution Trajectory</h2>
                <p class="text-slate-500 text-sm">How we evolved from a localized laboratory node to a global medical
                    matrix ecosystem.</p>
            </div>

            <div class="relative border-l-2 border-slate-200 ml-4 md:ml-32 space-y-8">
                <!-- Milestone 1 -->
                <div class="relative pl-6 md:pl-8">
                    <span
                        class="absolute -left-[11px] top-1.5 bg-blue-600 h-5 w-5 rounded-full border-4 border-white shadow-sm"></span>
                    <span class="absolute -left-24 top-1 hidden md:block text-sm font-bold text-slate-400">2020</span>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm max-w-2xl">
                        <h4 class="font-bold text-slate-900 text-sm">Inception & Core API Architecture</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Launched foundational, end-to-end
                            encrypted biometric transport protocols securely connecting research laboratories to
                            decentralized clinical EHR pipelines.</p>
                    </div>
                </div>

                <!-- Milestone 2 -->
                <div class="relative pl-6 md:pl-8">
                    <span
                        class="absolute -left-[11px] top-1.5 bg-blue-600 h-5 w-5 rounded-full border-4 border-white shadow-sm"></span>
                    <span class="absolute -left-24 top-1 hidden md:block text-sm font-bold text-slate-400">2023</span>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm max-w-2xl">
                        <h4 class="font-bold text-slate-900 text-sm">Telehealth Streaming Node Launch</h4>
                        <p class="text-xs text-slate-500 mt-1 leading-relaxed">Scaled immediate clinician-to-patient
                            encrypted WebRTC audiovisual infrastructure, effectively reducing baseline public clinic
                            triage wait cycles down below 120 seconds.</p>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="relative pl-6 md:pl-8">
                    <span
                        class="absolute -left-[11px] top-1.5 bg-emerald-500 h-5 w-5 rounded-full border-4 border-white shadow-sm"></span>
                    <span class="absolute -left-24 top-1 hidden md:block text-sm font-bold text-emerald-600">2026</span>
                    <div
                        class="bg-white p-5 rounded-2xl border border-emerald-100 bg-emerald-50/10 shadow-sm max-w-2xl">
                        <h4 class="font-bold text-slate-900 text-sm text-emerald-900">High-Density Genomic Integrations
                        </h4>
                        <p class="text-xs text-emerald-950 mt-1 leading-relaxed">Fully integrated preventative medicine
                            structures directly into macro client-facing dashboards, enabling users to monitor
                            predictive cellular metabolic tracking models live.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="space-y-6">
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-bold text-slate-900">Clinical Leadership Board</h2>
                <p class="text-slate-500 text-sm mt-1">Cross-functional experts leading advancements across digital
                    medicine and medical network cryptography.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($teamMembers as $member)
                    @php
                        $roleColor = 'text-blue-600';
                        if ($member->order_index === 2) {
                            $roleColor = 'text-rose-500';
                        } elseif ($member->order_index === 3) {
                            $roleColor = 'text-indigo-500';
                        }
                    @endphp
                    <div
                        class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-sm hover:border-blue-500/30 transition group">
                        @if($member->image_url)
                            <img class="h-56 w-full object-cover grayscale group-hover:grayscale-0 transition duration-300"
                                src="{{ $member->image_url }}"
                                alt="{{ $member->name }}">
                        @else
                            <div class="h-56 w-full bg-slate-100 text-slate-400 flex items-center justify-center text-4xl">
                                <i class="fa-solid fa-user-md"></i>
                            </div>
                        @endif
                        <div class="p-5 space-y-1">
                            <h4 class="font-bold text-slate-900">{{ $member->name }}</h4>
                            <span class="text-xs font-semibold {{ $roleColor }} block">{{ $member->role }}</span>
                            @if($member->department)
                                <small class="text-slate-400 block font-medium">Department: {{ $member->department }}</small>
                            @endif
                            <p class="text-[11px] text-slate-400 pt-1 leading-relaxed">{{ $member->bio }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-muted py-5">No team leadership profiles seeded.</div>
                @endforelse
            </div>
        </section>

        <!-- SECURITY & VALUE DECLARATION BANNER -->
        <section
            class="bg-slate-950 rounded-3xl p-6 sm:p-8 text-white text-center space-y-4 shadow-xl relative overflow-hidden">
            <div
                class="absolute inset-0 opacity-5 pointer-events-none bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:16px_16px]">
            </div>
            <h3 class="text-xl sm:text-2xl font-bold tracking-tight">Ready to integrate your clinical profiles securely?
            </h3>
            <p class="text-slate-400 text-xs sm:text-sm max-w-xl mx-auto">
                Join over two million registered accounts optimizing their baseline biological endurance maps utilizing
                our compliant medical pipelines.
            </p>
            <div class="pt-2">
                <a href="{{ route('home') }}"
                    class="inline-flex bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-6 py-3 rounded-xl transition shadow-lg shadow-blue-500/10">
                    Return to Diagnostic Hub
                </a>
            </div>
        </section>

    </main>
@endsection
