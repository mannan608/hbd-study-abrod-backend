<style>
    /* =========================================================
       HERO SLIDER
    ========================================================== */

    .hero-slider {
        position: absolute;
        inset: 0;
    }

    .hero-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        z-index: 0;

        transition:
            opacity 1.4s cubic-bezier(0.4, 0, 0.2, 1);

        will-change: opacity;
    }

    .hero-slide.active {
        opacity: 1;
        z-index: 1;
    }

    .hero-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;

        transform: scale(1.08);

        transition:
            transform 8s cubic-bezier(0.22, 1, 0.36, 1);

        will-change: transform;
    }

    .hero-slide.active img {
        transform: scale(1);
    }


    /* =========================================================
       CONTENT ANIMATION
    ========================================================== */

    .hero-content-item {
        opacity: 0;
        transform: translateY(25px);

        transition:
            opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
            transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .hero-content-loaded .hero-content-item {
        opacity: 1;
        transform: translateY(0);
    }

    .hero-content-loaded .hero-delay-100 {
        transition-delay: 100ms;
    }

    .hero-content-loaded .hero-delay-200 {
        transition-delay: 200ms;
    }

    .hero-content-loaded .hero-delay-300 {
        transition-delay: 300ms;
    }


    /* =========================================================
       SLIDER DOT
    ========================================================== */

    .hero-slider-dot {
        width: 7px;
        height: 7px;

        border-radius: 9999px;

        background: rgba(255, 255, 255, 0.45);

        transition:
            width 300ms ease,
            background-color 300ms ease,
            transform 300ms ease;
    }

    .hero-slider-dot.active {
        width: 24px;
        background: rgba(255, 255, 255, 0.95);
    }

    .hero-slider-dot:hover {
        transform: scale(1.15);
        background: rgba(255, 255, 255, 0.95);
    }


    /* =========================================================
       REDUCED MOTION
    ========================================================== */

    @media (prefers-reduced-motion: reduce) {

        .hero-slide,
        .hero-slide img,
        .hero-content-item,
        .hero-slider-dot {
            transition: none !important;
        }

        .hero-slide img {
            transform: scale(1);
        }

        .hero-content-item {
            opacity: 1;
            transform: none;
        }
    }
</style>


<section
    class="relative isolate flex min-h-[84vh] w-full items-center justify-center overflow-hidden">


    <!-- =====================================================
         BACKGROUND IMAGE SLIDER
    ====================================================== -->

    <div
        id="heroSlider1"
        class="hero-slider">


        <!-- Slide 1 -->
        <div class="hero-slide active">

            <img
                src="{{ asset('frontend-img/hero/hero-campus.jpg') }}"
                alt="International students walking through an Australian university campus"
                width="1920"
                height="1080"
                fetchpriority="high"
                class="size-full object-cover">

        </div>


        <!-- Slide 2 -->
        <div class="hero-slide">

            <img
                src="{{ asset('frontend-img/hero/hero-1.jpg') }}"
                alt="Australian university campus"
                width="1920"
                height="1080"
                class="size-full object-cover">

        </div>


        <!-- Slide 3 -->
        <div class="hero-slide">

            <img
                src="{{ asset('frontend-img/hero/hero-2.jpg') }}"
                alt="Students studying at an Australian university"
                width="1920"
                height="1080"
                class="size-full object-cover">

        </div>


        <!-- Slide 4 -->
        <div class="hero-slide">

            <img
                src="{{ asset('frontend-img/hero/hero-3.jpg') }}"
                alt="Australian city and university"
                width="1920"
                height="1080"
                class="size-full object-cover">

        </div>


        <!-- Slide 5 -->
        <div class="hero-slide">

            <img
                src="{{ asset('frontend-img/hero/hero-4.jpg') }}"
                alt="International students in Australia"
                width="1920"
                height="1080"
                class="size-full object-cover">

        </div>

    </div>


    <!-- =====================================================
         YOUR EXISTING SURFACE OVERLAY
    ====================================================== -->

    <div
        class="absolute inset-0 z-[2] surface-hero">
    </div>


    <!-- =====================================================
         EXTRA OVERLAY
         Keeps text readable while preserving the image
    ====================================================== -->

    <div
        class="absolute inset-0 z-[3] bg-black/10">
    </div>


    <!-- =====================================================
         BOTTOM GRADIENT
    ====================================================== -->

    <div
        class="absolute inset-x-0 bottom-0 z-[4] h-1/2 bg-gradient-to-t from-black/30 via-transparent to-transparent">
    </div>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <div
        id="heroContent1"
        class="relative z-10 mx-auto max-w-7xl px-5 py-24 text-center text-white sm:py-32 lg:px-8">


        <!-- =================================================
             BADGE
        ================================================== -->

        <div
            class="hero-content-item inline-flex items-center gap-2 rounded-full border border-purple-200/50 bg-brand-500/10 px-5 py-2.5 backdrop-blur-sm">


            <!-- Sparkle -->
            <div class="relative">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="h-4 w-4 animate-pulse text-white">

                    <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />

                    <path d="M20 3v4" />

                    <path d="M22 5h-4" />

                    <path d="M4 17v2" />

                    <path d="M5 18H3" />

                </svg>


                <div
                    class="absolute inset-0 h-4 w-4 animate-pulse bg-brand-500 blur-md">
                </div>

            </div>


            <span
                class="text-sm font-semibold uppercase tracking-wide text-white">

                Global Education Platform

            </span>

        </div>


        <!-- =================================================
             HEADING
        ================================================== -->

        <h1
            class="hero-content-item hero-delay-100 mt-7 text-4xl font-bold uppercase leading-tight tracking-tight sm:text-6xl lg:text-7xl">

            Your Future in

            <br>

            Australia Starts Here.

        </h1>


        <!-- =================================================
             DESCRIPTION
        ================================================== -->

        <p
            class="hero-content-item hero-delay-200 mx-auto mt-5 max-w-2xl text-base leading-relaxed text-white/85 sm:text-lg">

            Compare tuition, English scores, intakes and scholarships
            across 620+ institutions — then talk to a verified
            counsellor for free.

        </p>


        <!-- =================================================
             SEARCH BOX
        ================================================== -->

        <div
            class="hero-content-item hero-delay-300 mx-auto mt-9 flex max-w-2xl flex-col gap-2 rounded-2xl bg-white p-2 shadow-lift transition-all duration-500 ease-out hover:scale-[1.01] hover:shadow-xl focus-within:ring-2 focus-within:ring-brand-300 focus-within:shadow-xl sm:flex-row">


            <!-- Search input -->
            <div
                class="relative flex-1">


                <!-- Search icon -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="absolute left-3 top-1/2 size-6 -translate-y-1/2 text-neutral-500">

                    <path d="m21 21-4.34-4.34"></path>

                    <circle
                        cx="11"
                        cy="11"
                        r="8">
                    </circle>

                </svg>


                <input
                    type="text"
                    placeholder="Search courses, e.g. Master of IT in Melbourne"
                    class="h-12 w-full rounded-md border-0 bg-transparent px-3 py-1 pl-12 text-base text-neutral-800 shadow-none outline-none placeholder:text-neutral-400 focus:ring-0">

            </div>


            <!-- =================================================
                 AI ASSIST BUTTON
            ================================================== -->

            <button
                type="button"
                class="group inline-flex h-12 cursor-pointer items-center justify-center gap-2 whitespace-nowrap rounded-md bg-brand-500/20 px-6 text-base font-bold text-brand-500 shadow transition-all duration-500 ease-out hover:scale-105 hover:bg-brand-500 hover:text-white hover:shadow-lg active:scale-95">


                <!-- AI Icon -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    class="transition-transform duration-500 ease-out group-hover:rotate-12">


                    <path
                        d="M13.3338 1.33407V4.00063M14.6672 2.66735H12.0004M7.34461 1.87701C7.37318 1.72408 7.45434 1.58596 7.57403 1.48657C7.69372 1.38717 7.84441 1.33276 8 1.33276C8.15559 1.33276 8.30628 1.38717 8.42597 1.48657C8.54566 1.58596 8.62682 1.72408 8.65539 1.87701L9.35611 5.58219C9.40588 5.84561 9.53391 6.08792 9.72349 6.27748C9.91308 6.46704 10.1554 6.59506 10.4189 6.64482L14.1245 7.34546C14.2774 7.37402 14.4156 7.45517 14.515 7.57485C14.6144 7.69452 14.6688 7.84519 14.6688 8.00076C14.6688 8.15633 14.6144 8.307 14.515 8.42668C14.4156 8.54636 14.2774 8.62751 14.1245 8.65607L10.4189 9.35671C10.1554 9.40647 9.91308 9.53449 9.72349 9.72405C9.53391 9.91361 9.40588 10.1559 9.35611 10.4193L8.65539 14.1245C8.62682 14.2774 8.54566 14.4156 8.42597 14.515C8.30628 14.6144 8.15559 14.6688 8 14.6688C7.84441 14.6688 7.69372 14.6144 7.57403 14.515C7.45434 14.4156 7.37318 14.2774 7.34461 14.1245L6.64389 10.4193C6.59412 10.1559 6.46692 9.91361 6.27651 9.72405C6.08692 9.53449 5.84459 9.40647 5.58114 9.35671L1.87551 8.65607C1.72256 8.62751 1.58443 8.54636 1.48502 8.42668C1.38561 8.307 1.3312 8.15633 1.3312 8.00076C1.3312 7.84519 1.38561 7.69452 1.48502 7.57485C1.58443 7.45517 1.72256 7.37402 1.87551 7.34546L5.58114 6.64482C5.84459 6.59506 6.08692 6.46704 6.27651 6.27748C6.46692 6.08792 6.59412 5.84561 6.64389 5.58219L7.34461 1.87701Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round" />

                </svg>


                <span>
                    AI Assist
                </span>

            </button>

        </div>

    </div>


    <!-- =====================================================
         SLIDER INDICATORS
    ====================================================== -->

    <div
        id="heroSliderDots1"
        class="absolute bottom-7 left-1/2 z-20 flex -translate-x-1/2 items-center gap-2">


        <button
            type="button"
            data-slide="0"
            aria-label="Show slide 1"
            class="hero-slider-dot active">
        </button>


        <button
            type="button"
            data-slide="1"
            aria-label="Show slide 2"
            class="hero-slider-dot">
        </button>


        <button
            type="button"
            data-slide="2"
            aria-label="Show slide 3"
            class="hero-slider-dot">
        </button>


        <button
            type="button"
            data-slide="3"
            aria-label="Show slide 4"
            class="hero-slider-dot">
        </button>


        <button
            type="button"
            data-slide="4"
            aria-label="Show slide 5"
            class="hero-slider-dot">
        </button>

    </div>

</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const slider = document.getElementById('heroSlider1');
        const dotsContainer = document.getElementById('heroSliderDots1');
        const content = document.getElementById('heroContent1');

        if (!slider) {
            return;
        }

        const slides = slider.querySelectorAll('.hero-slide');
        const dots = dotsContainer
            ? dotsContainer.querySelectorAll('.hero-slider-dot')
            : [];

        let currentSlide = 0;
        let sliderInterval = null;

        const intervalTime = 5500;


        /* =====================================================
           CONTENT LOAD ANIMATION
        ====================================================== */

        setTimeout(function () {

            if (content) {
                content.classList.add('hero-content-loaded');
            }

        }, 100);


        /* =====================================================
           SHOW SLIDE
        ====================================================== */

        function showSlide(index) {

            if (!slides.length) {
                return;
            }


            slides.forEach(function (slide, i) {

                slide.classList.toggle(
                    'active',
                    i === index
                );

            });


            dots.forEach(function (dot, i) {

                dot.classList.toggle(
                    'active',
                    i === index
                );

            });


            currentSlide = index;

        }


        /* =====================================================
           NEXT SLIDE
        ====================================================== */

        function nextSlide() {

            const nextSlideIndex =
                (currentSlide + 1) % slides.length;

            showSlide(nextSlideIndex);

        }


        /* =====================================================
           START AUTOPLAY
        ====================================================== */

        function startSlider() {

            stopSlider();

            sliderInterval = setInterval(
                nextSlide,
                intervalTime
            );

        }


        /* =====================================================
           STOP AUTOPLAY
        ====================================================== */

        function stopSlider() {

            if (sliderInterval) {

                clearInterval(sliderInterval);

                sliderInterval = null;

            }

        }


        /* =====================================================
           DOT CLICK
        ====================================================== */

        dots.forEach(function (dot) {

            dot.addEventListener('click', function () {

                const index =
                    parseInt(
                        this.getAttribute('data-slide'),
                        10
                    );

                if (!isNaN(index)) {

                    showSlide(index);

                    startSlider();

                }

            });

        });


        /* =====================================================
           PAUSE WHEN HOVERING
        ====================================================== */

        slider.addEventListener(
            'mouseenter',
            stopSlider
        );

        slider.addEventListener(
            'mouseleave',
            startSlider
        );


        /* =====================================================
           INITIALIZE
        ====================================================== */

        showSlide(0);

        startSlider();

    });
</script>