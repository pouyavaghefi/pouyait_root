<section id="contact" class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="contact-reveal opacity-0 -translate-x-8">
                <h2 class="text-base font-bold text-blue-600 uppercase tracking-widest mb-4">Contact</h2>
                <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 font-outfit tracking-tight">
                    {{ __('contact.title') }}
                </h3>
                <p class="text-slate-600 text-lg leading-relaxed mb-8">
                    {{ __('contact.subtitle') }}
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="text-slate-700 font-medium">info@pouyait.com</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <span class="text-slate-700 font-medium">Amsterdam, Netherlands</span>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="contact-reveal opacity-0 translate-x-8">
                <form action="#" class="bg-slate-50 p-8 md:p-12 rounded-[2.5rem] border border-slate-100 shadow-2xl shadow-slate-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">{{ __('contact.name') }}</label>
                            <input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">{{ __('contact.email') }}</label>
                            <input type="email" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">{{ __('contact.company') }}</label>
                        <input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all">
                    </div>
                    <div class="mb-8">
                        <label class="block text-sm font-bold text-slate-700 mb-2">{{ __('contact.message') }}</label>
                        <textarea rows="4" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all"></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-blue-600 transition-all duration-300 shadow-xl shadow-slate-200">
                        {{ __('contact.submit') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to('.contact-reveal', {
            scrollTrigger: {
                trigger: '#contact',
                start: 'top 80%',
            },
            opacity: 1,
            x: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: 'expo.out'
        });
    });
</script>
