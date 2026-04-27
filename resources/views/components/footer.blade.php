<footer class="bg-slate-900 text-white pt-20 pb-10 overflow-hidden relative">
    <!-- Final CTA Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
        <div id="final-cta" class="relative group p-10 md:p-20 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-[3rem] overflow-hidden text-center opacity-0 translate-y-10">
            <!-- Decorative Glow -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-black mb-6 font-outfit tracking-tight">
                    {{ __('footer.cta_title') }}
                </h2>
                <p class="text-blue-100 text-lg mb-10 max-w-xl mx-auto">
                    {{ __('footer.cta_subtitle') }}
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#contact" class="px-8 py-4 bg-white text-blue-600 font-bold rounded-2xl hover:scale-105 transition-all duration-300 shadow-xl">
                        {{ __('footer.cta_button') }}
                    </a>
                    <a href="https://wa.me/yourlink" class="flex items-center space-x-2 text-white font-bold px-6 py-3 border border-white/20 rounded-2xl hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-2.135 0-4.159 1.251-5.184 3.067-.549.972-.88 2.083-.88 3.26 0 1.944.927 3.51 2.376 4.706l-.504 1.839 1.908-.501c1.042.508 2.304.798 3.51.798 3.565 0 6.452-2.887 6.452-6.452 0-3.566-2.887-6.452-6.452-6.452z"/></svg>
                        <span>WhatsApp Quick Contact</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-white/5 pt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Branding -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center font-bold text-white">P</div>
                    <span class="text-xl font-bold font-outfit uppercase tracking-wider">Pouya<span class="text-blue-500">IT</span></span>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed">
                    {{ __('footer.about_desc') }}
                </p>
                <!-- Socials -->
                <div class="flex space-x-4 pt-4">
                    <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-lg font-bold mb-6 font-outfit">{{ __('footer.services') }}</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Maatwerk Software</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">App Development</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">AI & Automation</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition-colors">Consultancy</a></li>
                </ul>
            </div>

            <!-- Office -->
            <div>
                <h4 class="text-lg font-bold mb-6 font-outfit">{{ __('footer.office') }}</h4>
                <p class="text-slate-400 text-sm leading-relaxed">
                    {{ __('footer.address') }}<br>
                    Noord-Holland, NL
                </p>
                <p class="text-blue-500 font-bold mt-4">+31 (0) 20 123 4567</p>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="text-lg font-bold mb-6 font-outfit">{{ __('footer.contact') }}</h4>
                <a href="mailto:info@pouyait.com" class="text-slate-400 hover:text-blue-500 transition-colors text-sm">info@pouyait.com</a>
                <div class="mt-8">
                    <span class="inline-block px-4 py-2 bg-white/5 rounded-full text-xs text-blue-400 font-bold">KVK: 12345678</span>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 space-y-4 md:space-y-0">
            <p>&copy; {{ date('Y') }} Pouya IT. {{ __('footer.rights') }}</p>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-white transition-colors">{{ __('footer.privacy') }}</a>
                <a href="#" class="hover:text-white transition-colors">{{ __('footer.terms') }}</a>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to('#final-cta', {
            scrollTrigger: {
                trigger: '#final-cta',
                start: 'top 85%',
            },
            opacity: 1,
            y: 0,
            duration: 1.5,
            ease: 'expo.out'
        });
    });
</script>
