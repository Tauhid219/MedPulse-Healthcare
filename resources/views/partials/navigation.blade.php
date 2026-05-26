<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <div class="bg-blue-600 text-white p-2 rounded-xl shadow-md shadow-blue-200">
                        <i class="fa-solid fa-heart-pulse text-xl"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-slate-900">Med<span
                            class="text-blue-600">Pulse</span></span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" 
                   class="{{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600 py-5' : 'text-slate-600 hover:text-blue-600 transition' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" 
                   class="{{ request()->routeIs('services') ? 'text-blue-600 border-b-2 border-blue-600 py-5' : 'text-slate-600 hover:text-blue-600 transition' }}">
                    Services
                </a>
                <a href="{{ route('about') }}" 
                   class="{{ request()->routeIs('about') ? 'text-blue-600 border-b-2 border-blue-600 py-5' : 'text-slate-600 hover:text-blue-600 transition' }}">
                    About Us
                </a>
                <a href="{{ route('contact') }}" 
                   class="{{ request()->routeIs('contact') ? 'text-blue-600 border-b-2 border-blue-600 py-5' : 'text-slate-600 hover:text-blue-600 transition' }}">
                    Contact
                </a>
            </div>

            <div class="flex items-center gap-4">
                <button
                    class="hidden sm:inline-flex text-sm font-semibold text-blue-600 hover:text-blue-700 bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-xl transition">
                    Emergency SOS
                </button>
            </div>
        </div>
    </div>
</nav>
