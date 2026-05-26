@extends('layouts.app')

@section('title', 'MedPulse | Contact & Live Support Matrix')

@section('body-attributes', "x-data={ chatOpen: false }")

@section('content')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12">

        <!-- CONTACT METHODS BLOCK -->
        <section class="grid lg:grid-cols-3 gap-8">
            <!-- Left Info Panel Columns -->
            <div class="lg:col-span-1 space-y-6">
                <div>
                    <span
                        class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Support
                        Routing</span>
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 mt-3">Get in Touch</h1>
                    <p class="text-slate-500 text-sm mt-1 leading-relaxed">
                        Have programmatic intake questions, technical portal inquiries, or billing concerns? Reach out
                        to our specialized teams.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-xl"><i class="fa-solid fa-phone text-lg"></i>
                        </div>
                        <div>
                            <span
                                class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Institutional
                                Hotline</span>
                            <span class="text-sm font-bold text-slate-900 block mt-0.5">{{ $settings['hospital_phone'] ?? '+1 (800) 555-4200' }}</span>
                            <span class="text-[11px] text-emerald-600 block"><i
                                    class="fa-solid fa-circle text-[6px] mr-1 inline-block align-middle"></i> Operators
                                Live</span>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4">
                        <div class="p-3 bg-indigo-50 text-indigo-600 rounded-xl"><i
                                class="fa-solid fa-envelope-open-text text-lg"></i></div>
                        <div>
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block">Secure
                                Intake Email</span>
                            <span class="text-sm font-bold text-slate-900 block mt-0.5">{{ $settings['hospital_email'] ?? 'triage@medpulse.com' }}</span>
                            <span class="text-[11px] text-slate-400 block">Avg Response: Under 1 Hour</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Centralized High-Fidelity Intake Form -->
            <div class="lg:col-span-2 bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-4">
                <h3 class="text-xl font-bold text-slate-900">Secure Message Dispatch</h3>
                
                @if(session('success'))
                    <div class="bg-emerald-50 text-emerald-800 p-4 rounded-2xl border border-emerald-100 text-xs font-semibold">
                        <i class="fa-solid fa-circle-check mr-1.5 text-emerald-600"></i> {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-rose-50 text-rose-800 p-4 rounded-2xl border border-rose-100 text-xs font-semibold">
                        <i class="fa-solid fa-circle-exclamation mr-1.5 text-rose-600"></i> Please resolve the errors below:
                        <ul class="list-disc pl-4 mt-1.5 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="grid sm:grid-cols-2 gap-4 text-xs font-medium text-slate-600">
                    @csrf
                    <div class="space-y-1">
                        <label class="block font-semibold text-slate-500">FULL NAME</label>
                        <input type="text" name="name" placeholder="Alex Morgan" value="{{ old('name') }}" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 text-slate-800">
                    </div>
                    <div class="space-y-1">
                        <label class="block font-semibold text-slate-500">HEALTH ID PORTAL NUMBER</label>
                        <input type="text" name="health_id" placeholder="#MP-9842" value="{{ old('health_id') }}"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 text-slate-800">
                    </div>
                    <div class="sm:col-span-2 space-y-1">
                        <label class="block font-semibold text-slate-500">ROUTING ROUTE TARGET</label>
                        <select name="routing_target" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 text-slate-800">
                            <option value="General Support & Profile Corrections" {{ old('routing_target') === 'General Support & Profile Corrections' ? 'selected' : '' }}>General Support & Profile Corrections</option>
                            <option value="Clinical Telehealth Escalations" {{ old('routing_target') === 'Clinical Telehealth Escalations' ? 'selected' : '' }}>Clinical Telehealth Escalations</option>
                            <option value="Claims, Billing & Deductibles" {{ old('routing_target') === 'Claims, Billing & Deductibles' ? 'selected' : '' }}>Claims, Billing & Deductibles</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2 space-y-1">
                        <label class="block font-semibold text-slate-500">ENCRYPTED MESSAGE CONTENT</label>
                        <textarea name="message" rows="4" placeholder="Detail your exact system problem scenario here..." required
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 text-slate-800">{{ old('message') }}</textarea>
                    </div>
                    <div class="sm:col-span-2 pt-2">
                        <button type="submit"
                            class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 rounded-xl transition shadow-md">
                            Dispatch Encrypted Message Pack
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- SECURE SYSTEM FAQ ACCORDION SECTION -->
        <section class="bg-white rounded-3xl border border-slate-100 p-6 sm:p-8 shadow-sm space-y-6"
            x-data="{ activeFaq: null }">
            <div class="text-center max-w-xl mx-auto space-y-2">
                <h2 class="text-2xl font-bold text-slate-900">Support Matrices & Protocols</h2>
                <p class="text-slate-500 text-xs">Immediate context answers detailing security data pipelines and
                    telehealth handling logic.</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-3">
                <!-- FAQ Item 1 -->
                <div class="border border-slate-100 rounded-xl overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)"
                        class="w-full flex justify-between items-center p-4 bg-slate-50/50 hover:bg-slate-50 font-bold text-slate-900 text-xs sm:text-sm transition text-left">
                        <span>How are my real-time vitals and biometrics kept secure?</span>
                        <i :class="activeFaq === 1 ? 'fa-minus' : 'fa-plus'"
                            class="fa-solid text-slate-400 text-xs"></i>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse
                        class="p-4 bg-white text-xs text-slate-500 border-t border-slate-100 leading-relaxed">
                        All telemetry pipelines streaming data packets from hardware accessories operate inside
                        decoupled token architectures. Patient payloads utilize AES-256 state encryption blocks ensuring
                        zero clear-text visibility.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-slate-100 rounded-xl overflow-hidden">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)"
                        class="w-full flex justify-between items-center p-4 bg-slate-50/50 hover:bg-slate-50 font-bold text-slate-900 text-xs sm:text-sm transition text-left">
                        <span>What is the standard configuration turnaround for insurance claims processing?</span>
                        <i :class="activeFaq === 2 ? 'fa-minus' : 'fa-plus'"
                            class="fa-solid text-slate-400 text-xs"></i>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse
                        class="p-4 bg-white text-xs text-slate-500 border-t border-slate-100 leading-relaxed">
                        Standard adjudication loops resolve via electronic data interchange configurations within 48
                        hours. Co-pay statements automatically refresh on your dashboard interface immediately following
                        provider validation signatures.
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- LIVE CHAT WIDGET SYSTEM (TRIGGER OVERLAY) -->
    <!-- Fixed Launch Trigger Button Bubble -->
    <div class="fixed bottom-6 right-6 z-50">
        <button @click="chatOpen = !chatOpen"
            class="bg-blue-600 hover:bg-blue-700 text-white rounded-full p-4 shadow-xl shadow-blue-500/30 flex items-center justify-center transition-transform hover:scale-105 relative group">
            <!-- Ping indicator when closed -->
            <span x-show="!chatOpen"
                class="absolute top-0 right-0 block h-3 w-3 rounded-full bg-emerald-400 ring-2 ring-white animate-pulse"></span>
            <i :class="chatOpen ? 'fa-xmark text-xl px-0.5' : 'fa-comments text-xl'"></i>
        </button>
    </div>

    <!-- Active Chat Overlay Interface Window Container -->
    <div x-show="chatOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-10 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-10 scale-95"
        class="fixed bottom-24 right-6 w-80 sm:w-96 bg-white rounded-2xl border border-slate-100 shadow-2xl z-50 overflow-hidden flex flex-col h-[420px]"
        style="display: none;">
        <!-- Chat Banner Header Node -->
        <div class="bg-slate-900 p-4 text-white flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <img class="h-8 w-8 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1594824813573-246434e33963?auto=format&fit=crop&w=80&q=80"
                        alt="Triage Agent">
                    <span
                        class="absolute bottom-0 right-0 block h-2 w-2 rounded-full bg-emerald-400 ring-2 ring-slate-900"></span>
                </div>
                <div>
                    <h4 class="text-xs font-bold">Nurse Triage Assistant</h4>
                    <span class="text-[10px] text-slate-400 block leading-tight">MedPulse Encrypted Node #4</span>
                </div>
            </div>
            <span
                class="text-[9px] bg-white/10 text-slate-300 font-mono px-2 py-0.5 rounded uppercase tracking-wider">Secure
                SSL</span>
        </div>

        <!-- Chat History Stream Area Grid -->
        <div class="flex-1 p-4 bg-slate-50 overflow-y-auto space-y-3 text-[11px] leading-relaxed">
            <!-- System Notice Statement -->
            <div class="text-center text-[10px] text-slate-400 bg-slate-200/50 py-1 px-2 rounded-lg max-w-xs mx-auto">
                <i class="fa-solid fa-lock mr-1"></i> Continuous verification sequence initialized.
            </div>

            <!-- Inbound Agent Message Bubble -->
            <div class="flex gap-2 items-start max-w-[85%]">
                <div class="bg-white border border-slate-100 p-3 rounded-2xl rounded-tl-none text-slate-700 shadow-sm">
                    Hello Alex. I am tracking your pending claims verification matrix request. How can I help route your
                    medical profile requirements?
                </div>
            </div>

            <!-- Outbound Patient Message Bubble -->
            <div class="flex gap-2 items-start max-w-[85%] ml-auto justify-end">
                <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-tr-none shadow-sm">
                    My heart rate panel metrics update sync failed to map this morning. Can you manually synchronize my
                    monitoring streams?
                </div>
            </div>
        </div>

        <!-- Chat Input Form Footer Panel Container -->
        <div class="p-3 border-t border-slate-100 bg-white flex gap-2 items-center">
            <input type="text" placeholder="Type verified secure response..."
                class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-blue-500 text-slate-800">
            <button
                class="bg-blue-600 text-white h-8 w-8 rounded-xl flex items-center justify-center hover:bg-blue-700 transition">
                <i class="fa-solid fa-paper-plane text-xs"></i>
            </button>
        </div>
    </div>
@endsection
