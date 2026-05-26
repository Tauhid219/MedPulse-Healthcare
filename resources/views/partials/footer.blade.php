<footer class="bg-slate-900 text-slate-400 text-xs mt-16 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="space-y-4">
            <div class="flex items-center gap-2 text-white">
                <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                    <i class="fa-solid fa-heart-pulse text-sm"></i>
                </div>
                <span class="text-base font-bold tracking-tight">MedPulse</span>
            </div>
            <p class="leading-relaxed">Next generation adaptive architecture simplifying digital medicine frameworks globally.</p>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-3 uppercase tracking-wider text-[11px]">System Architecture</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('home') }}#dashboard" class="hover:text-white transition">Patient API Portal</a></li>
                <li><a href="{{ route('home') }}#telehealth" class="hover:text-white transition">Encrypted Telehealth Engine</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition">Provider EHR Pipeline</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-3 uppercase tracking-wider text-[11px]">Regulatory Compliance</h4>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-white transition">HIPAA Privacy Matrix</a></li>
                <li><a href="#" class="hover:text-white transition">SOC2 Security Attestation</a></li>
                <li><a href="#" class="hover:text-white transition">GDPR Data Portability Rights</a></li>
            </ul>
        </div>
        <div class="space-y-3">
            <h4 class="text-white font-semibold uppercase tracking-wider text-[11px]">Security Infrastructure</h4>
            <div class="bg-slate-800 p-3 rounded-xl border border-slate-700 space-y-1.5">
                <span class="text-white font-bold block"><i class="fa-solid fa-shield-halved text-emerald-400 mr-1.5"></i> AES-256 Bit Encrypted</span>
                <p class="text-[11px]">All health records are automatically compartmentalized via token cryptography structures.</p>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 border-t border-slate-800 text-center text-slate-500">
        © {{ date('Y') }} MedPulse Inc. All digital distribution operations optimized securely.
    </div>
</footer>
