<section id="cases" class="relative bg-slate-900 overflow-hidden h-screen">
    <!-- Slider Container -->
    <div id="case-slider" class="relative h-full w-full">
        @foreach(__('cases.items') as $key => $case)
            <div class="case-slide absolute inset-0 w-full h-full opacity-0 invisible" data-key="{{ $key }}">
                <!-- Background Image with Overlay -->
                <div class="absolute inset-0 z-0">
                    <img src="/images/{{ $key }}.png" alt="{{ $case['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/80 to-transparent"></div>
                </div>

                <!-- Content Container -->
                <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                    <div class="max-w-2xl space-y-8">
                        <!-- Tag & Result Badge -->
                        <div class="slide-reveal flex items-center space-x-4">
                            <span class="px-4 py-1.5 bg-blue-600 text-white text-[11px] font-bold uppercase tracking-widest rounded-full">
                                {{ $case['tag'] }}
                            </span>
                            <span class="text-blue-400 font-bold text-sm tracking-widest uppercase">
                                {{ $case['result'] }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="slide-reveal text-5xl md:text-7xl font-black text-white font-outfit leading-none tracking-tighter">
                            {{ $case['title'] }}
                        </h2>

                        <!-- Description -->
                        <p class="slide-reveal text-xl text-slate-300 leading-relaxed max-w-xl">
                            {{ $case['desc'] }}
                        </p>

                        <!-- CTA -->
                        <div class="slide-reveal pt-6">
                            <a href="#contact" class="inline-flex items-center space-x-6 group">
                                <span class="text-white font-black text-xl border-b-2 border-blue-600 pb-1 group-hover:text-blue-400 group-hover:border-blue-400 transition-all">
                                    {{ __('cases.view_case') }}
                                </span>
                                <div class="w-16 h-16 rounded-full border border-white/20 flex items-center justify-center group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-500">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Custom Navigation Controls -->
    <div class="absolute bottom-12 right-12 z-20 flex items-center space-x-6">
        <!-- Progress Indicator -->
        <div class="flex items-center space-x-4 text-white/50 font-outfit text-sm font-bold">
            <span id="current-index">01</span>
            <div class="w-20 h-px bg-white/20 relative">
                <div id="progress-bar" class="absolute top-0 left-0 h-full bg-blue-600 w-0 transition-all duration-500"></div>
            </div>
            <span>0{{ count(__('cases.items')) }}</span>
        </div>

        <!-- Buttons -->
        <div class="flex space-x-2">
            <button id="prev-case" class="w-14 h-14 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white hover:text-slate-900 transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="next-case" class="w-14 h-14 rounded-full border border-white/10 flex items-center justify-center text-white hover:bg-white hover:text-slate-900 transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.case-slide');
        const nextBtn = document.getElementById('next-case');
        const prevBtn = document.getElementById('prev-case');
        const currentIndexEl = document.getElementById('current-index');
        const progressBar = document.getElementById('progress-bar');
        
        let currentIndex = 0;
        let isAnimating = false;

        function updateSlide(index, direction = 'next') {
            if (isAnimating) return;
            isAnimating = true;

            const currentSlide = slides[currentIndex];
            const nextSlide = slides[index];
            const reveals = nextSlide.querySelectorAll('.slide-reveal');

            // 1. Progress & Index update
            currentIndexEl.innerText = `0${index + 1}`;
            progressBar.style.width = `${((index + 1) / slides.length) * 100}%`;

            // 2. Animate out current slide
            gsap.to(currentSlide, {
                opacity: 0,
                autoAlpha: 0,
                duration: 0.8,
                ease: 'power2.inOut'
            });

            // 3. Animate in next slide
            gsap.set(nextSlide, { autoAlpha: 1 });
            gsap.fromTo(nextSlide, 
                { opacity: 0 }, 
                { 
                    opacity: 1, 
                    duration: 1, 
                    ease: 'power2.inOut',
                    onComplete: () => { isAnimating = false; }
                }
            );

            // 4. Staggered reveal for content
            gsap.fromTo(reveals, 
                { y: 30, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 1, stagger: 0.1, ease: 'power4.out', delay: 0.3 }
            );

            currentIndex = index;
        }

        // Initialize first slide
        gsap.set(slides[0], { autoAlpha: 1, opacity: 1 });
        gsap.set(slides[0].querySelectorAll('.slide-reveal'), { opacity: 1, y: 0 });
        progressBar.style.width = `${(1 / slides.length) * 100}%`;

        // Button Click Events
        nextBtn.addEventListener('click', () => {
            const nextIndex = (currentIndex + 1) % slides.length;
            updateSlide(nextIndex, 'next');
        });

        prevBtn.addEventListener('click', () => {
            const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide(prevIndex, 'prev');
        });

        // Optional: Mouse Wheel scroll snapping (only within section)
        let lastScrollTime = 0;
        document.getElementById('cases').addEventListener('wheel', (e) => {
            const now = Date.now();
            if (now - lastScrollTime < 1500) return; // Throttle wheel events
            
            if (e.deltaY > 50) {
                const nextIndex = (currentIndex + 1) % slides.length;
                if (currentIndex !== slides.length - 1) { // Stop at end to let user scroll down to next section
                    e.preventDefault();
                    updateSlide(nextIndex, 'next');
                    lastScrollTime = now;
                }
            } else if (e.deltaY < -50) {
                const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                if (currentIndex !== 0) { // Stop at start to let user scroll up
                    e.preventDefault();
                    updateSlide(prevIndex, 'prev');
                    lastScrollTime = now;
                }
            }
        }, { passive: false });
    });
</script>
