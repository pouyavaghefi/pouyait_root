<section id="diensten" class="py-32 bg-white relative overflow-hidden">
    <!-- Subtle Background Detail -->
    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-40"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-20">
            <h2 id="services-title" class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 font-outfit opacity-0 translate-y-4">
                {{ __('services.title') }}
            </h2>
            <p id="services-subtitle" class="max-w-2xl mx-auto text-lg text-slate-500 opacity-0 translate-y-4">
                {{ __('services.subtitle') }}
            </p>
            <div id="services-line" class="h-1.5 w-24 bg-blue-600 mx-auto mt-8 rounded-full opacity-0 scale-x-0"></div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            @foreach(__('services.items') as $key => $item)
                <div class="service-card group relative p-8 md:p-10 bg-slate-50 rounded-3xl border border-slate-100 hover:border-blue-100 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-100/50 opacity-0 translate-y-10">
                    <!-- Icon Wrapper -->
                    <div class="w-16 h-16 mb-8 rounded-2xl bg-white shadow-sm flex items-center justify-center group-hover:bg-blue-600 transition-colors duration-500">
                        @if($item['icon'] === 'code')
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        @elseif($item['icon'] === 'device-mobile')
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        @elseif($item['icon'] === 'sparkles')
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z"/></svg>
                        @else
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        @endif
                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4 font-outfit">{{ $item['title'] }}</h3>
                    <p class="text-slate-500 leading-relaxed mb-8">
                        {{ $item['desc'] }}
                    </p>
                    
                    <a href="#contact" class="inline-flex items-center text-blue-600 font-bold group/link">
                        {{ __('nav.contact') }}
                        <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Services Header Animation
        const servicesTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#diensten',
                start: 'top 70%',
            }
        });

        servicesTl.to('#services-title', { opacity: 1, y: 0, duration: 0.8 })
                  .to('#services-subtitle', { opacity: 1, y: 0, duration: 0.8 }, "-=0.6")
                  .to('#services-line', { opacity: 1, scaleX: 1, duration: 1, ease: 'expo.out' }, "-=0.4");

        // Service Cards Staggered Reveal
        gsap.to('.service-card', {
            scrollTrigger: {
                trigger: '.service-card',
                start: 'top 85%',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.2,
            ease: 'power4.out'
        });
    });
</script>
