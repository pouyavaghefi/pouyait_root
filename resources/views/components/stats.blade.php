<section class="py-24 bg-slate-900 overflow-hidden relative">
    <!-- Abstract Glow -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="mb-20 text-center">
            <h2 id="stats-title" class="text-3xl md:text-4xl font-bold text-white mb-4 font-outfit opacity-0 translate-y-4">
                {{ __('stats.title') }}
            </h2>
            <p id="stats-subtitle" class="text-slate-400 max-w-xl mx-auto opacity-0 translate-y-4">
                {{ __('stats.subtitle') }}
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">
            @foreach(__('stats.items') as $key => $item)
                <div class="stat-item text-center group">
                    <div class="mb-4 inline-flex items-center justify-center">
                        <span class="stat-number text-4xl md:text-6xl font-black text-white font-outfit" 
                              data-target="{{ $item['value'] }}">0</span>
                        <span class="text-2xl md:text-4xl font-bold text-blue-500 ml-1">{{ $item['suffix'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-200 mb-2">{{ $item['label'] }}</h3>
                    <p class="text-sm text-slate-400 group-hover:text-slate-300 transition-colors">
                        {{ $item['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Headers reveal
        gsap.to(['#stats-title', '#stats-subtitle'], {
            scrollTrigger: {
                trigger: '#stats-title',
                start: 'top 85%',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.2
        });

        // Numbers count up animation
        const statNumbers = document.querySelectorAll('.stat-number');
        
        statNumbers.forEach(num => {
            const target = parseFloat(num.getAttribute('data-target'));
            const isDecimal = target % 1 !== 0;

            gsap.to(num, {
                scrollTrigger: {
                    trigger: num,
                    start: 'top 90%',
                },
                innerText: target,
                duration: 2,
                snap: { innerText: isDecimal ? 0.1 : 1 },
                ease: 'power2.out',
                onUpdate: function() {
                    if (isDecimal) {
                        num.innerText = parseFloat(num.innerText).toFixed(1);
                    } else {
                        num.innerText = Math.floor(num.innerText);
                    }
                }
            });
        });
    });
</script>
