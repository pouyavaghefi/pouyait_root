<header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 transition-all duration-500" id="header-inner">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="group flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-blue-200">
                        <span class="text-white font-bold text-xl font-outfit">P</span>
                    </div>
                    <span id="logo-text" class="text-2xl font-bold font-outfit tracking-tight text-slate-800 group-hover:text-blue-600 transition-colors">Pouya<span class="text-blue-600">IT</span></span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#diensten" class="nav-link text-[15px] font-medium text-slate-600 hover:text-blue-600 transition-colors">{{ __('nav.services') }}</a>
                <a href="#cases" class="nav-link text-[15px] font-medium text-slate-600 hover:text-blue-600 transition-colors">{{ __('nav.cases') }}</a>
                <a href="#werkwijze" class="nav-link text-[15px] font-medium text-slate-600 hover:text-blue-600 transition-colors">{{ __('nav.process') }}</a>
                <a href="#contact" class="nav-link text-[15px] font-medium text-slate-600 hover:text-blue-600 transition-colors">{{ __('nav.contact') }}</a>
            </nav>

            <!-- CTA & Language Toggle -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Language Toggle -->
                <div class="flex items-center bg-slate-100 p-1 rounded-full text-[11px] font-bold tracking-wider">
                    <a href="{{ route('lang.switch', 'nl') }}" 
                       class="{{ app()->getLocale() == 'nl' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-500 hover:text-slate-800' }} px-3 py-1.5 rounded-full transition-all duration-200 uppercase">
                        NL
                    </a>
                    <a href="{{ route('lang.switch', 'en') }}" 
                       class="{{ app()->getLocale() == 'en' ? 'bg-white text-blue-600 shadow-sm' : 'text-slate-500 hover:text-slate-800' }} px-3 py-1.5 rounded-full transition-all duration-200 uppercase">
                        EN
                    </a>
                </div>

                <a href="#advies" class="inline-flex items-center px-6 py-3 border border-transparent text-[15px] font-semibold rounded-full text-white bg-slate-900 hover:bg-blue-600 hover:scale-105 transform transition-all duration-300 shadow-sm">
                    {{ __('nav.advies') }}
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" type="button" class="text-slate-600 hover:text-slate-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-xl border-b border-slate-200 shadow-xl overflow-hidden transition-all duration-300 ease-in-out">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="#diensten" class="block px-3 py-4 text-base font-semibold text-slate-700 hover:text-blue-600 border-b border-slate-50 transition-colors">{{ __('nav.services') }}</a>
            <a href="#cases" class="block px-3 py-4 text-base font-semibold text-slate-700 hover:text-blue-600 border-b border-slate-50 transition-colors">{{ __('nav.cases') }}</a>
            <a href="#werkwijze" class="block px-3 py-4 text-base font-semibold text-slate-700 hover:text-blue-600 border-b border-slate-50 transition-colors">{{ __('nav.process') }}</a>
            <a href="#contact" class="block px-3 py-4 text-base font-semibold text-slate-700 hover:text-blue-600 transition-colors">{{ __('nav.contact') }}</a>
            
            <!-- Mobile Language Toggle -->
            <div class="flex items-center space-x-4 px-3 py-6 mt-4 border-t border-slate-100">
                <a href="{{ route('lang.switch', 'nl') }}" class="{{ app()->getLocale() == 'nl' ? 'text-blue-600 font-bold' : 'text-slate-500' }} text-sm uppercase">NL</a>
                <span class="text-slate-300">|</span>
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'text-blue-600 font-bold' : 'text-slate-500' }} text-sm uppercase">EN</a>
            </div>
        </div>
    </div>
</header>

<script>
    const header = document.getElementById('main-header');
    const headerInner = document.getElementById('header-inner');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    // Header Scroll Logic
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-slate-200/50', 'py-1');
            header.classList.remove('bg-transparent', 'py-4');
            headerInner.classList.replace('h-20', 'h-16');
        } else {
            header.classList.add('bg-transparent', 'py-4');
            header.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-slate-200/50', 'py-1');
            headerInner.classList.replace('h-16', 'h-20');
        }
    });

    // Mobile Menu Toggle Logic with GSAP
    let menuVisible = false;
    mobileMenuButton.addEventListener('click', () => {
        menuVisible = !menuVisible;
        if (menuVisible) {
            mobileMenu.classList.remove('hidden');
            gsap.fromTo(mobileMenu, 
                { height: 0, opacity: 0 }, 
                { height: 'auto', opacity: 1, duration: 0.5, ease: 'power4.out' }
            );
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            gsap.to(mobileMenu, { 
                height: 0, opacity: 0, duration: 0.3, ease: 'power4.in',
                onComplete: () => mobileMenu.classList.add('hidden')
            });
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });

    // Close menu on link click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            menuVisible = false;
            gsap.to(mobileMenu, { 
                height: 0, opacity: 0, duration: 0.3, 
                onComplete: () => mobileMenu.classList.add('hidden')
            });
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
</script>
