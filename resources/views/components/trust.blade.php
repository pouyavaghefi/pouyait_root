<section id="trust" class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Partner Logo Cloud -->
        <div class="text-center mb-16">
            <p class="text-sm font-bold text-slate-400 uppercase tracking-[0.3em] mb-10">{{ __('trust.partners_title') }}</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-60">
                <div class="h-8 md:h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" class="h-full" alt="AWS">
                </div>
                <div class="h-8 md:h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" class="h-full" alt="Laravel">
                </div>
                <div class="h-8 md:h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_Cloud_Logo.svg" class="h-full" alt="Google Cloud">
                </div>
                <div class="h-8 md:h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" class="h-full" alt="React">
                </div>
                <div class="h-8 md:h-10 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" class="h-full" alt="Tailwind">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mt-32">
            <!-- Left: Text Content -->
            <div class="trust-reveal opacity-0 -translate-x-8">
                <h2 class="text-base font-bold text-blue-600 uppercase tracking-widest mb-4">Reviews</h2>
                <h3 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 font-outfit tracking-tight">
                    {{ __('trust.title') }}
                </h3>
                <p class="text-slate-600 text-lg leading-relaxed mb-8">
                    {{ __('trust.subtitle') }}
                </p>
                <div class="flex items-center space-x-6">
                    <div class="flex -space-x-3">
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-blue-100 flex items-center justify-center font-bold text-blue-600">J</div>
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-indigo-100 flex items-center justify-center font-bold text-indigo-600">L</div>
                        <div class="w-12 h-12 rounded-full border-4 border-white bg-slate-100 flex items-center justify-center font-bold text-slate-600">M</div>
                    </div>
                    <div>
                        <div class="flex text-yellow-400 mb-1">
                            @for($i=0; $i<5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-sm font-bold text-slate-900">4.9/5 Average Rating</p>
                    </div>
                </div>
            </div>

            <!-- Right: Testimonial Slider -->
            <div class="trust-reveal opacity-0 translate-x-8">
                <div class="relative bg-white p-10 md:p-16 rounded-[3rem] shadow-2xl shadow-slate-200 border border-slate-50">
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center shadow-xl shadow-blue-200">
                        <svg class="w-8 h-8 text-white fill-current" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C15.4647 8 15.017 8.44772 15.017 9V12C15.017 12.5523 14.5693 13 14.017 13H12.017V21H14.017ZM6.017 21L6.017 18C6.017 16.8954 6.91243 16 8.017 16H11.017C11.5693 16 12.017 15.5523 12.017 15V9C12.017 8.44772 11.5693 8 11.017 8H8.017C7.46472 8 7.017 8.44772 7.017 9V12C7.017 12.5523 6.5693 13 6.017 13H4.017V21H6.017Z"/></svg>
                    </div>

                    <div class="testimonial-slider overflow-hidden">
                        <div class="testimonial-track flex transition-transform duration-700 ease-out">
                            @foreach(__('trust.testimonials') as $testimonial)
                            <div class="flex-shrink-0 w-full">
                                <p class="text-xl md:text-2xl font-medium text-slate-800 leading-relaxed mb-8 italic">
                                    "{{ $testimonial['quote'] }}"
                                </p>
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center font-bold text-slate-400">
                                        {{ substr($testimonial['name'], 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900">{{ $testimonial['name'] }}</p>
                                        <p class="text-sm text-slate-500">{{ $testimonial['role'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex space-x-3 mt-10">
                        <button id="prev-test" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button id="next-test" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.querySelector('.testimonial-track');
        const slides = document.querySelectorAll('.testimonial-track > div');
        const nextBtn = document.getElementById('next-test');
        const prevBtn = document.getElementById('prev-test');
        let index = 0;

        if(track && nextBtn && prevBtn) {
            function updateSlider() {
                track.style.transform = `translateX(-${index * 100}%)`;
            }

            nextBtn.addEventListener('click', () => {
                index = (index + 1) % slides.length;
                updateSlider();
            });

            prevBtn.addEventListener('click', () => {
                index = (index - 1 + slides.length) % slides.length;
                updateSlider();
            });
        }

        gsap.to('.trust-reveal', {
            scrollTrigger: {
                trigger: '#trust',
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
