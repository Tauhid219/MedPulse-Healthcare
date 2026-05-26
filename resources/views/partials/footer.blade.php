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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 border-t border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-slate-500">
        <div>
            © {{ date('Y') }} MedPulse Inc. All digital distribution operations optimized securely.
        </div>
        <div class="flex flex-wrap items-center gap-2 bg-slate-800 px-3.5 py-1.5 rounded-full border border-slate-700 text-slate-300 justify-center">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <i class="fa-regular fa-calendar text-xs text-slate-400"></i>
            <span class="font-mono text-xs" id="footer-live-date">Loading date...</span>
            <span class="text-slate-600 px-0.5">|</span>
            <i class="fa-regular fa-clock text-xs text-slate-400"></i>
            <span class="font-mono text-xs" id="footer-live-clock">Loading time...</span>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateElement = document.getElementById('footer-live-date');
        const clockElement = document.getElementById('footer-live-clock');
        
        if (clockElement && dateElement) {
            function updateClock() {
                const now = new Date();
                
                // Format Date: e.g. Wed, May 27, 2026
                const dateString = now.toLocaleDateString(undefined, {
                    weekday: 'short',
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });
                
                // Format Time: e.g. 11:55:37 PM
                const timeString = now.toLocaleTimeString(undefined, {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                });
                
                dateElement.textContent = dateString;
                clockElement.textContent = timeString;
            }
            updateClock();
            setInterval(updateClock, 1000);
        }
    });
</script>
