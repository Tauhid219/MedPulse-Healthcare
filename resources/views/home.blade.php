@extends('layouts.app')

@section('title', 'MedPulse | Advanced Healthcare Platform')

@section('content')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-12">

        <section class="grid lg:grid-cols-3 gap-8 items-center">
            <div class="lg:col-span-2 space-y-6">
                <span
                    class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                    <span class="w-1.5 h-1.5 inline-block bg-emerald-500 rounded-full animate-pulse"></span>
                    All systems operational • 420 Doctors Online
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    Your health ecosystem,<br><span class="text-blue-600">digitized and simplified.</span>
                </h1>
                <p class="text-lg text-slate-500 max-w-xl">
                    Access real-time health analytics, book virtual consultations instantly, and securely manage your
                    medical history all from one centralized hub.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#book"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl shadow-lg shadow-blue-500/20 transition flex items-center gap-2">
                        <i class="fa-solid fa-calendar-check"></i> Book Appointment
                    </a>
                    <a href="#telehealth"
                        class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 font-medium px-6 py-3 rounded-xl transition flex items-center gap-2">
                        <i class="fa-solid fa-video"></i> Start Virtual Consultation
                    </a>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-3xl p-6 text-white shadow-xl relative overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-blue-500/10 rounded-full blur-2xl"></div>
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <p class="text-xs text-slate-400 uppercase tracking-wider">Active Health Plan</p>
                        <h3 class="text-xl font-bold mt-0.5">Premium Family Care</h3>
                    </div>
                    <span
                        class="bg-blue-500/20 text-blue-400 text-xs px-2.5 py-1 rounded-lg border border-blue-500/30 font-medium">ID:
                        #MP-9842</span>
                </div>

                <div class="space-y-4">
                    <div class="bg-white/5 rounded-2xl p-4 border border-white/10">
                        <div class="flex justify-between text-xs text-slate-400 mb-1">
                            <span>Deductible Progress</span>
                            <span>$1,200 / $3,000</span>
                        </div>
                        <div class="w-full bg-slate-700 h-2 rounded-full overflow-hidden">
                            <div class="bg-blue-500 h-full rounded-full" style="width: 40%"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-white/5 p-3 rounded-xl border border-white/5 text-center">
                            <span class="text-xs text-slate-400 block">Next Refill</span>
                            <span class="text-sm font-semibold text-emerald-400 mt-1 block">In 3 Days</span>
                        </div>
                        <div class="bg-white/5 p-3 rounded-xl border border-white/5 text-center">
                            <span class="text-xs text-slate-400 block">Pending Claims</span>
                            <span class="text-sm font-semibold text-amber-400 mt-1 block">1 Active</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="dashboard" class="space-y-4">
            <h2 class="text-2xl font-bold text-slate-900">Your Real-time Vitals</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                    <div class="p-4 bg-rose-50 text-rose-500 rounded-xl">
                        <i class="fa-solid fa-heartbeat text-2xl animate-pulse"></i>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 font-medium block">Heart Rate</span>
                        <span class="text-2xl font-bold text-slate-900">72 <span
                                class="text-xs font-normal text-slate-500">bpm</span></span>
                        <span class="text-xs text-emerald-600 block mt-0.5"><i class="fa-solid fa-arrow-trend-down"></i>
                            Normal</span>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                    <div class="p-4 bg-blue-50 text-blue-500 rounded-xl">
                        <i class="fa-solid fa-gauge-high text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 font-medium block">Blood Pressure</span>
                        <span class="text-2xl font-bold text-slate-900">120/80 <span
                                class="text-xs font-normal text-slate-500">mmHg</span></span>
                        <span class="text-xs text-emerald-600 block mt-0.5"><i class="fa-solid fa-check"></i>
                            Optimal</span>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                    <div class="p-4 bg-amber-50 text-amber-500 rounded-xl">
                        <i class="fa-solid fa-droplet text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 font-medium block">Glucose Level</span>
                        <span class="text-2xl font-bold text-slate-900">95 <span
                                class="text-xs font-normal text-slate-500">mg/dL</span></span>
                        <span class="text-xs text-amber-600 block mt-0.5"><i
                                class="fa-solid fa-triangle-exclamation"></i> Pre-meal</span>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                    <div class="p-4 bg-indigo-50 text-indigo-500 rounded-xl">
                        <i class="fa-solid fa-moon text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 font-medium block">Sleep Analysis</span>
                        <span class="text-2xl font-bold text-slate-900">7.4 <span
                                class="text-xs font-normal text-slate-500">hrs</span></span>
                        <span class="text-xs text-emerald-600 block mt-0.5"><i class="fa-solid fa-arrow-trend-up"></i>
                            +12% vs last week</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="space-y-6" x-data="{ activeTab: 'general' }">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Specialized Medical Services</h2>
                    <p class="text-slate-500 text-sm mt-1">World-class clinical solutions powered by advanced
                        technology.</p>
                </div>
                <div class="flex bg-slate-200/60 p-1 rounded-xl self-start overflow-x-auto max-w-full">
                    <button @click="activeTab = 'general'"
                        :class="activeTab === 'general' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 text-xs font-semibold rounded-lg whitespace-nowrap transition">Primary
                        Care</button>
                    <button @click="activeTab = 'cardio'"
                        :class="activeTab === 'cardio' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 text-xs font-semibold rounded-lg whitespace-nowrap transition">Cardiology</button>
                    <button @click="activeTab = 'neuro'"
                        :class="activeTab === 'neuro' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="px-4 py-2 text-xs font-semibold rounded-lg whitespace-nowrap transition">Neurology</button>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-sm">
                <div x-show="activeTab === 'general'" class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4">
                        <div
                            class="h-12 w-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-xl font-bold">
                            01</div>
                        <h3 class="text-xl font-bold text-slate-900">Comprehensive Primary Care</h3>
                        <p class="text-slate-500 leading-relaxed text-sm">Your primary defense line for long-term health
                            tracking. From routine physical examinations to personalized preventative medicine plans
                            designed for your genetic profile.</p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li><i class="fa-solid fa-circle-check text-emerald-500 mr-2"></i> Annual physical &
                                biometric screenings</li>
                            <li><i class="fa-solid fa-circle-check text-emerald-500 mr-2"></i> Chronic disease
                                self-management systems</li>
                            <li><i class="fa-solid fa-circle-check text-emerald-500 mr-2"></i> Immunization & predictive
                                vaccine schedules</li>
                        </ul>
                    </div>
                    <img class="rounded-2xl h-64 w-full object-cover shadow-md"
                        src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80"
                        alt="Primary Care">
                </div>

                <div x-show="activeTab === 'cardio'" class="grid md:grid-cols-2 gap-8 items-center"
                    style="display: none;">
                    <div class="space-y-4">
                        <div
                            class="h-12 w-12 bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center text-xl font-bold">
                            02</div>
                        <h3 class="text-xl font-bold text-slate-900">Advanced Cardiovascular Analytics</h3>
                        <p class="text-slate-500 leading-relaxed text-sm">Utilizing continuous automated monitoring
                            streams and targeted non-invasive precision diagnostics to evaluate advanced myocardial
                            functionalities.</p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li><i class="fa-solid fa-circle-check text-rose-500 mr-2"></i> Remote Holter monitoring
                                interpretation</li>
                            <li><i class="fa-solid fa-circle-check text-rose-500 mr-2"></i> Echocardiography &
                                multi-phase stress testing</li>
                            <li><i class="fa-solid fa-circle-check text-rose-500 mr-2"></i> Cardiovascular vulnerability
                                maps</li>
                        </ul>
                    </div>
                    <img class="rounded-2xl h-64 w-full object-cover shadow-md"
                        src="http://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                        alt="Cardiology">
                </div>

                <div x-show="activeTab === 'neuro'" class="grid md:grid-cols-2 gap-8 items-center"
                    style="display: none;">
                    <div class="space-y-4">
                        <div
                            class="h-12 w-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center text-xl font-bold">
                            03</div>
                        <h3 class="text-xl font-bold text-slate-900">Cognitive & Neural Sciences</h3>
                        <p class="text-slate-500 leading-relaxed text-sm">Deciphering complex neurological pathways with
                            neuro-imaging integrations, treating systemic neuropathies, and optimizing cognitive
                            endurance matrixes.</p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li><i class="fa-solid fa-circle-check text-indigo-500 mr-2"></i> Complex migraine profiling
                                systems</li>
                            <li><i class="fa-solid fa-circle-check text-indigo-500 mr-2"></i> Neuro-muscular mapping &
                                electromyography</li>
                            <li><i class="fa-solid fa-circle-check text-indigo-500 mr-2"></i> Cognitive decline
                                mitigation training</li>
                        </ul>
                    </div>
                    <img class="rounded-2xl h-64 w-full object-cover shadow-md"
                        src="https://images.unsplash.com/photo-1559757175-5700dde675bc?auto=format&fit=crop&w=600&q=80"
                        alt="Neurology">
                </div>
            </div>
        </section>

        <section id="doctors" class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-slate-900">Available Specialists</h2>
                    <span class="text-xs text-blue-600 font-semibold cursor-pointer hover:underline">View Filter
                        Matrix</span>
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                    <div
                        class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:border-blue-500 transition-all cursor-pointer group">
                        <div class="flex gap-4 items-start">
                            <img class="h-14 w-14 rounded-xl object-cover"
                                src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=150&q=80"
                                alt="Doctor">
                            <div>
                                <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Dr. Marcus
                                    Vance</h4>
                                <span class="text-xs text-slate-400 font-medium block mb-1">Cardiologist • 12 Yrs
                                    Exp</span>
                                <div class="flex items-center gap-1 text-amber-500 text-xs">
                                    <i class="fa-solid fa-star"></i> <span
                                        class="font-semibold text-slate-700">4.9</span> <span
                                        class="text-slate-400">(140 reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                            <span class="text-slate-500"><i class="fa-solid fa-clock text-blue-500 mr-1"></i> Next:
                                Today 4:15 PM</span>
                            <span class="font-bold text-slate-900">$120/hr</span>
                        </div>
                    </div>

                    <div
                        class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:border-blue-500 transition-all cursor-pointer group">
                        <div class="flex gap-4 items-start">
                            <img class="h-14 w-14 rounded-xl object-cover"
                                src="https://images.unsplash.com/photo-1594824813573-246434e33963?auto=format&fit=crop&w=150&q=80"
                                alt="Doctor">
                            <div>
                                <h4 class="font-bold text-slate-900 group-hover:text-blue-600 transition">Dr. Sarah
                                    Jenkins</h4>
                                <span class="text-xs text-slate-400 font-medium block mb-1">Neurologist • 9 Yrs
                                    Exp</span>
                                <div class="flex items-center gap-1 text-amber-500 text-xs">
                                    <i class="fa-solid fa-star"></i> <span
                                        class="font-semibold text-slate-700">4.8</span> <span class="text-slate-400">(98
                                        reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                            <span class="text-slate-500"><i class="fa-solid fa-clock text-blue-500 mr-1"></i> Next:
                                Tomorrow 9:00 AM</span>
                            <span class="font-bold text-slate-900">$140/hr</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="book" class="bg-white p-6 rounded-3xl border border-slate-100 shadow-md space-y-4">
                <h3 class="text-xl font-bold text-slate-900">Instant Scheduler</h3>
                <form class="space-y-3 text-sm">
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 mb-1">SELECT SPECIALTY</label>
                        <select
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 font-medium text-slate-700">
                            <option>Cardiology (Heart Care)</option>
                            <option>Neurology (Brain & Spine)</option>
                            <option>General Family Medicine</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 mb-1">CONSULTATION MODE</label>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="border border-blue-500 bg-blue-50/50 rounded-xl p-2 flex items-center gap-2 cursor-pointer text-xs font-medium">
                                <input type="radio" name="mode" checked class="text-blue-600 focus:ring-0">
                                <span><i class="fa-solid fa-video text-blue-500 mr-1"></i> Telehealth</span>
                            </label>
                            <label class="border border-slate-200 rounded-xl p-2 flex items-center gap-2 cursor-pointer text-xs font-medium">
                                <input type="radio" name="mode" class="text-blue-600 focus:ring-0">
                                <span><i class="fa-solid fa-building text-slate-400 mr-1"></i> In-Clinic</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 mb-1">PREFERRED DATE</label>
                        <input type="date" value="2026-05-27" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2.5 focus:outline-none focus:border-blue-500 font-medium text-slate-700">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition shadow-md shadow-blue-500/10 mt-2">
                        Confirm Allocation Match
                    </button>
                </form>
            </div>
        </section>

        <section id="telehealth" class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-8 text-white relative overflow-hidden shadow-lg">
            <div class="absolute right-0 top-0 opacity-10 transform translate-x-10 -translate-y-10 pointer-events-none">
                <i class="fa-solid fa-network-wired text-[240px]"></i>
            </div>
            <div class="max-w-xl space-y-4">
                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full uppercase tracking-wider font-semibold">Next Generation Telehealth</span>
                <h2 class="text-3xl font-extrabold tracking-tight">Connect with a certified medical clinician in under 120 seconds.</h2>
                <p class="text-blue-100 text-sm leading-relaxed">
                    Skip public waiting rooms entirely. Our encrypted medical communication pipeline allows securely streaming biometric diagnostic inputs, rapid prescription updates, and instant secure referrals.
                </p>
                <div class="flex gap-4 pt-2">
                    <button class="bg-white text-blue-600 font-bold px-5 py-2.5 rounded-xl hover:bg-blue-50 transition text-sm">
                        Launch Telehealth Room
                    </button>
                    <button class="text-white hover:text-blue-200 font-semibold text-sm flex items-center gap-1.5">
                        <i class="fa-solid fa-play-circle text-lg"></i> See How It Works
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-3xl border border-slate-100 p-8 shadow-sm space-y-6">
            <div class="text-center max-w-lg mx-auto space-y-2">
                <h2 class="text-2xl font-bold text-slate-900">Endorsed by Clinical Networks</h2>
                <p class="text-slate-500 text-sm">Patient privacy architectures combined with institutional excellence benchmarks.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6 pt-2">
                <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="flex items-center text-amber-400 gap-0.5 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs italic leading-relaxed">"The instantaneous secure syncing between my Apple health monitor stream data feed and Dr. Vance's custom specialist portal changed how my cardiovascular updates are triaged completely."</p>
                    <div class="mt-4 flex items-center gap-3">
                        <div class="h-8 w-8 bg-slate-300 rounded-full font-bold text-xs flex items-center justify-center text-slate-600">EH</div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 block">Evelyn Hawthorne</span>
                            <span class="text-[10px] text-slate-400 block">Verified Patient • Chronic Care Track</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="flex items-center text-amber-400 gap-0.5 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs italic leading-relaxed">"Getting diagnostic reports sent automatically over end-to-end encrypted tunnels cuts administrative tasks by hours. The UX layout is brilliant."</p>
                    <div class="mt-4 flex items-center gap-3">
                        <div class="h-8 w-8 bg-slate-300 rounded-full font-bold text-xs flex items-center justify-center text-slate-600">MK</div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 block">Marcus Kaelen</span>
                            <span class="text-[10px] text-slate-400 block">Verified Patient • Corporate Plan</span>
                        </div>
                    </div>
                </div>

                <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="flex items-center text-amber-400 gap-0.5 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-slate-600 text-xs italic leading-relaxed">"Virtual neurology visits allow constant observation profiles without the pain of high-density travel options. Incredible healthcare deployment."</p>
                    <div class="mt-4 flex items-center gap-3">
                        <div class="h-8 w-8 bg-slate-300 rounded-full font-bold text-xs flex items-center justify-center text-slate-600">DR</div>
                        <div>
                            <span class="text-xs font-bold text-slate-900 block">Diana Rossen</span>
                            <span class="text-[10px] text-slate-400 block">Verified Patient • Neurology Focus</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
