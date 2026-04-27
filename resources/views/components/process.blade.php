<section id="werkwijze" class="py-32 bg-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-32">
            <h2 id="process-title" class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 font-outfit opacity-0 translate-y-4">
                {{ __('process.title') }}
            </h2>
            <p id="process-subtitle" class="max-w-2xl mx-auto text-lg text-slate-500 opacity-0 translate-y-4">
                {{ __('process.subtitle') }}
            </p>
        </div>

        <!-- Vertical Timeline Journey -->
        <div class="relative max-w-4xl mx-auto">
            <!-- Central Line Background -->
            <div class="absolute left-6 md:left-1/2 top-0 bottom-0 w-px bg-slate-100 -translate-x-1/2"></div>
            <!-- Progress Line (Animated) -->
            <div id="progress-line" class="absolute left-6 md:left-1/2 top-0 w-1 bg-blue-600 -translate-x-1/2 origin-top scale-y-0 h-full shadow-[0_0_15px_rgba(37,99,235,0.4)]"></div>

            <!-- Steps -->
            <div class="space-y-32">
                @foreach(__('process.steps') as $key => $step)
                    <div class="process-step relative flex flex-col md:flex-row items-center gap-12 group">
                        <!-- Number Circle -->
                        <div class="absolute left-6 md:left-1/2 -translate-x-1/2 z-20 transition-transform duration-500 group-hover:scale-110">
                            <div class="step-circle w-12 h-12 rounded-full border-4 border-white bg-slate-100 flex items-center justify-center shadow-lg transition-all duration-500">
                                <span class="step-number text-sm font-black text-slate-400 font-outfit">{{ $step['number'] }}</span>
                            </div>
                        </div>

                        <!-- Content Left/Right Alternating -->
                        <div class="w-full md:w-1/2 pl-20 md:pl-0 {{ $loop->iteration % 2 == 0 ? 'md:order-last md:text-left' : 'md:text-right md:pr-20' }}">
                            <div class="step-content opacity-0 translate-y-8">
                                <h3 class="text-2xl font-black text-slate-900 mb-4 font-outfit tracking-tight">{{ $step['title'] }}</h3>
                                <p class="text-slate-500 leading-relaxed">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                        
                        <!-- Empty Spacer for the other side on desktop -->
                        <div class="hidden md:block w-1/2"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Headers reveal
        gsap.to(['#process-title', '#process-subtitle'], {
            scrollTrigger: {
                trigger: '#process-title',
                start: 'top 85%',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.2
        });

        // Progress line animation
        gsap.to('#progress-line', {
            scrollTrigger: {
                trigger: '#werkwijze',
                start: 'top 40%',
                end: 'bottom 60%',
                scrub: true,
            },
            scaleY: 1,
            ease: 'none'
        });

        // Individual steps activation
        gsap.utils.toArray('.process-step').forEach((step, i) => {
            const content = step.querySelector('.step-content');
            const circle = step.querySelector('.step-circle');
            const number = step.querySelector('.step-number');

            const stepTl = gsap.timeline({
                scrollTrigger: {
                    trigger: step,
                    start: 'top 60%',
                    toggleActions: 'play none none reverse'
                }
            });

            stepTl.to(content, { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' })
                  .to(circle, { backgroundColor: '#2563eb', borderColor: '#dbeafe', duration: 0.4 }, "-=0.6")
                  .to(number, { color: '#ffffff', duration: 0.4 }, "-=0.4");
        });
    });
</script>
