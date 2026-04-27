<section id="hero-section" class="relative min-h-[90vh] flex items-center justify-center pt-24 overflow-hidden bg-slate-50">
    <!-- Abstract Background shapes for 'Premium' feel -->
    <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[500px] h-[500px] bg-blue-100/50 rounded-full blur-3xl opacity-60 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/4 -translate-x-1/4 w-[600px] h-[600px] bg-indigo-100/50 rounded-full blur-3xl opacity-60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <div id="hero-badge" class="inline-flex items-center space-x-2 px-4 py-2 mb-8 bg-white/70 backdrop-blur-md border border-white rounded-full shadow-sm opacity-0 -translate-y-4">
            <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-ping"></span>
            <span class="text-sm font-semibold tracking-wide text-blue-700 uppercase">{{ __('hero.badge') }}</span>
        </div>

        <!-- Main Heading Wrapper to avoid trigger jitter -->
        <div id="hero-title-wrapper" class="mb-8">
            <h1 id="hero-title" class="text-5xl md:text-8xl font-black text-slate-900 leading-[1.1] tracking-tighter opacity-0 scale-95 uppercase font-outfit">
                {{ __('hero.title') }} <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-500">
                    {{ __('hero.title_accent') }}
                </span>
            </h1>
        </div>

        <!-- Description -->
        <div id="hero-desc-wrapper">
            <p id="hero-desc" class="max-w-2xl mx-auto text-lg md:text-xl text-slate-600 mb-12 leading-relaxed opacity-0">
                {{ __('hero.description') }}
            </p>
        </div>

        <!-- CTA Buttons -->
        <div id="hero-ctas" class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6 opacity-0 translate-y-8">
            <a href="#diensten" class="w-full sm:w-auto px-10 py-5 bg-slate-900 text-white font-bold rounded-2xl hover:bg-blue-600 hover:scale-105 transition-all duration-300 shadow-2xl shadow-slate-200">
                {{ __('hero.cta_primary') }}
            </a>
            <a href="#consult" class="w-full sm:w-auto px-10 py-5 bg-white text-slate-900 border border-slate-200 font-bold rounded-2xl hover:bg-slate-50 transition-all duration-300">
                {{ __('hero.cta_secondary') }}
            </a>
        </div>

        <!-- Visual Anchor (Scroll hint) -->
        <div id="hero-scroll" class="mt-20 opacity-0 group">
            <div class="flex flex-col items-center">
                <span class="text-[11px] uppercase font-bold tracking-[0.2em] text-slate-400 mb-3 group-hover:text-blue-600 transition-colors">{{ __('hero.scroll_hint') }}</span>
                <div class="w-px h-12 bg-gradient-to-b from-slate-200 to-transparent"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // 1. Entrance Animation
        const entranceTl = gsap.timeline({
            defaults: { ease: 'power4.out', duration: 1.2 }
        });

        entranceTl.to('#hero-badge', { opacity: 1, y: 0, delay: 0.2 })
                  .to('#hero-title', { opacity: 1, scale: 1 }, "-=1")
                  .to('#hero-desc', { opacity: 1, y: 0 }, "-=0.8")
                  .to('#hero-ctas', { opacity: 1, y: 0 }, "-=0.8")
                  .to('#hero-scroll', { opacity: 1 }, "-=0.5");

        // 2. Scroll Animation (Parallax & Fade)
        // Using a timeline with a ScrollTrigger is more robust for resetting states
        const scrollTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#hero-section',
                start: 'top top',
                end: 'bottom 20%',
                scrub: 1, // Add slight delay for smoothness
                invalidateOnRefresh: true,
                onEnterBack: () => {
                    // Force visibility when scrolling back to top
                    gsap.to(['#hero-title', '#hero-desc'], { opacity: 1, y: 0, duration: 0.5 });
                }
            }
        });

        scrollTl.to('#hero-title', { 
            y: 100, 
            opacity: 0, 
            ease: 'none',
            immediateRender: false 
        }, 0);

        scrollTl.to('#hero-desc', { 
            y: 50, 
            opacity: 0, 
            ease: 'none',
            immediateRender: false 
        }, 0);
    });
</script>
