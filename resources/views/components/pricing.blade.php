<section id="pricing" class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-50 -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-50 rounded-full blur-3xl opacity-50 translate-y-1/2 -translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-base font-bold text-blue-600 uppercase tracking-widest mb-4 opacity-0 pricing-reveal">Pricing</h2>
            <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 font-outfit opacity-0 pricing-reveal">
                {{ __('pricing.title') }}
            </h3>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto opacity-0 pricing-reveal">
                {{ __('pricing.subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            <!-- Tier 1 -->
            <div class="pricing-card group p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-100/50 flex flex-col opacity-0 translate-y-12">
                <div class="mb-8">
                    <h4 class="text-xl font-bold text-slate-900 mb-2">{{ __('pricing.tier1_name') }}</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ __('pricing.tier1_desc') }}</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-baseline space-x-1">
                        <span class="text-lg font-bold text-slate-400">€</span>
                        <span class="text-5xl font-black text-slate-900 tracking-tight">{{ __('pricing.tier1_price') }}</span>
                    </div>
                    <span class="text-sm font-medium text-slate-400 uppercase tracking-wider">{{ __('pricing.tier1_period') }}</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    @foreach(__('pricing.tier1_features') as $feature)
                    <li class="flex items-center space-x-3 text-slate-600">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-[15px]">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="#contact" class="w-full py-4 px-6 text-center bg-white border border-slate-200 text-slate-900 font-bold rounded-2xl group-hover:bg-slate-900 group-hover:text-white group-hover:border-slate-900 transition-all duration-300">
                    {{ __('pricing.cta_button') }}
                </a>
            </div>

            <!-- Tier 2 (Highlighted) -->
            <div class="pricing-card relative group p-8 rounded-[2.5rem] bg-slate-900 text-white border border-slate-800 transition-all duration-500 hover:scale-[1.02] shadow-2xl shadow-blue-900/20 flex flex-col opacity-0 translate-y-12">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 py-1.5 bg-blue-600 text-white text-[11px] font-bold uppercase tracking-widest rounded-full shadow-xl">
                    Populair
                </div>
                
                <div class="mb-8">
                    <h4 class="text-xl font-bold mb-2">{{ __('pricing.tier2_name') }}</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">{{ __('pricing.tier2_desc') }}</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-baseline space-x-1">
                        <span class="text-lg font-bold text-blue-400">€</span>
                        <span class="text-5xl font-black tracking-tight">{{ __('pricing.tier2_price') }}</span>
                    </div>
                    <span class="text-sm font-medium text-slate-500 uppercase tracking-wider">{{ __('pricing.tier2_period') }}</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    @foreach(__('pricing.tier2_features') as $feature)
                    <li class="flex items-center space-x-3">
                        <div class="w-5 h-5 rounded-full bg-blue-500/20 flex items-center justify-center">
                            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="text-[15px] text-slate-300">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="#contact" class="w-full py-4 px-6 text-center bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-500 hover:scale-105 transition-all duration-300 shadow-lg shadow-blue-600/30">
                    {{ __('pricing.cta_button') }}
                </a>
            </div>

            <!-- Tier 3 -->
            <div class="pricing-card group p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 hover:border-indigo-200 transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-100/50 flex flex-col opacity-0 translate-y-12">
                <div class="mb-8">
                    <h4 class="text-xl font-bold text-slate-900 mb-2">{{ __('pricing.tier3_name') }}</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ __('pricing.tier3_desc') }}</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-baseline space-x-1">
                        <span class="text-5xl font-black text-slate-900 tracking-tight">{{ __('pricing.tier3_price') }}</span>
                    </div>
                    <span class="text-sm font-medium text-slate-400 uppercase tracking-wider">{{ __('pricing.tier3_period') }}</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    @foreach(__('pricing.tier3_features') as $feature)
                    <li class="flex items-center space-x-3 text-slate-600">
                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-[15px]">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="#contact" class="w-full py-4 px-6 text-center bg-white border border-slate-200 text-slate-900 font-bold rounded-2xl group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-600 transition-all duration-300">
                    {{ __('pricing.cta_button') }}
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to('.pricing-reveal', {
            scrollTrigger: {
                trigger: '#pricing',
                start: 'top 80%',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.2,
            ease: 'power3.out'
        });

        gsap.to('.pricing-card', {
            scrollTrigger: {
                trigger: '#pricing',
                start: 'top 70%',
            },
            opacity: 1,
            y: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: 'expo.out'
        });
    });
</script>
