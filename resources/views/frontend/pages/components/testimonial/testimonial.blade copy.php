<section class=" bg-brand-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-hidden">
        <header
            class="mx-auto max-w-2xl px-4 py-12 text-center font-sans reveal-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 bg-[#1068b2]/10 rounded-full mb-6 transition-all duration-700 delay-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-4 h-4 text-[#1068b2] transition-transform duration-500 group-hover:scale-110">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>
                <span class="text-sm font-semibold text-[#1068b2] uppercase">One-on-One Support</span>
            </div>

            <!-- Main Heading -->
            <h1
                class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 md:text-4xl lg:text-5xl uppercase transition-all duration-700 delay-200">
                Meet Our Expert Counsellors
            </h1>

            <!-- Subheading Description -->
            <p
                class="mx-auto mt-4 max-w-2xl text-base text-neutral-600 sm:text-lg transition-all duration-700 delay-300">
                Connect with certified, empathetic professionals dedicated to mapping your precise academic outcome.
            </p>
        </header>

        <!-- ========================================= -->
        <!-- IMAGE AREA -->
        <!-- ========================================= -->

        <div class="relative mx-auto -mt-28 h-[440px] w-full max-w-[1350px] sm:h-[500px] lg:h-[550px]">

            <!-- Vertical dotted lines -->
            <div class="pointer-events-none absolute inset-0 hidden lg:block">

                <div class="absolute left-[21.5%] top-[180px] h-[330px] border-l border-dashed border-slate-200"></div>

                <div class="absolute left-[37.5%] top-[180px] h-[330px] border-l border-dashed border-slate-200"></div>

                <div
                    class="absolute left-1/2 top-[180px] h-[350px] -translate-x-1/2 border-l border-dashed border-slate-200">
                </div>

                <div class="absolute left-[62.5%] top-[180px] h-[330px] border-l border-dashed border-slate-200"></div>

                <div class="absolute left-[78.5%] top-[180px] h-[330px] border-l border-dashed border-slate-200"></div>

            </div>


            <!-- ========================================= -->
            <!-- CAROUSEL -->
            <!-- ========================================= -->

            <div id="testimonialCarousel" class="absolute inset-0"></div>

        </div>


        <!-- ========================================= -->
        <!-- CONTENT -->
        <!-- ========================================= -->
        <div class="flex  items-center justify-center">
            <div class="absolute bottom-20 z-30 mx-auto  max-w-[650px] px-5 text-center sm:-mt-[35px] lg:-mt-[35px]">

                <div id="testimonialContent" class="mt-5 transition-all duration-300">

                    <h3 id="activeName" class="text-lg font-semibold text-slate-900">
                        Sarah Mitchell
                    </h3>

                    <p id="activeRole" class="mt-1 text-sm font-medium text-[#9B2064]">
                        Education Consultant
                    </p>

                    <p id="activeQuote" class="mt-2 text-sm leading-6 text-slate-500 line-clamp-1">
                        "The platform made it incredibly easy to connect
                        with the right education opportunities."
                    </p>

                </div>


                <!-- Button -->

                <a href="#"
                    class="mt-7 inline-flex items-center gap-3 rounded-full bg-black px-7 py-3.5 text-sm font-medium text-white transition duration-300 hover:-translate-y-0.5 hover:bg-slate-800">
                    Read Success Stories

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>

            </div>
        </div>
        <!-- Bottom spacing -->

        <div class="h-10 sm:h-14 lg:h-16"></div>
    </div>

</section>


<script>
    /*
    |--------------------------------------------------------------------------
    | TESTIMONIAL DATA
    |--------------------------------------------------------------------------
    */

    const testimonials = [{
            name: "Sarah Mitchell",
            role: "Education Consultant",
            quote: "The platform made it incredibly easy to connect with the right education opportunities.",
            image: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Daniel Cooper",
            role: "University Advisor",
            quote: "A simple and powerful experience that helped us connect with students from around the world.",
            image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Michael Anderson",
            role: "Business Consultant",
            quote: "The quality of the platform and the support team has made the entire process much easier.",
            image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "James Wilson",
            role: "Career Specialist",
            quote: "We have been able to reach the right students and provide better career guidance.",
            image: "https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Emily Johnson",
            role: "Education Expert",
            quote: "Everything feels intuitive and professional. Our students love the overall experience.",
            image: "https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "David Lee",
            role: "International Advisor",
            quote: "The platform gives us a much better way to support students throughout their journey.",
            image: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Sophia Brown",
            role: "Student Counsellor",
            quote: "It is refreshing to use a platform that genuinely focuses on the student's experience.",
            image: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Robert Taylor",
            role: "University Representative",
            quote: "The platform has helped us build meaningful connections with students globally.",
            image: "https://images.unsplash.com/photo-1504257432389-52343af06ae3?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Olivia Williams",
            role: "Student Advisor",
            quote: "The experience is smooth, simple and focused completely on student success.",
            image: "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "William Brown",
            role: "Education Partner",
            quote: "We have seen a significant improvement in the way we communicate with students.",
            image: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Emma Davis",
            role: "Career Counsellor",
            quote: "The platform provides everything we need to guide students with confidence.",
            image: "https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80"
        },

        {
            name: "Noah Wilson",
            role: "University Representative",
            quote: "A modern platform that makes international education much more accessible.",
            image: "https://images.unsplash.com/photo-1504257432389-52343af06ae3?auto=format&fit=crop&w=500&q=80"
        }
    ];


    /*
    |--------------------------------------------------------------------------
    | ELEMENTS
    |--------------------------------------------------------------------------
    */

    const carousel =
        document.getElementById("testimonialCarousel");

    const activeName =
        document.getElementById("activeName");

    const activeRole =
        document.getElementById("activeRole");

    const activeQuote =
        document.getElementById("activeQuote");

    const testimonialContent =
        document.getElementById("testimonialContent");


    let activeIndex = 0;

    let autoplay;


    /*
    |--------------------------------------------------------------------------
    | DESKTOP POSITIONS
    |
    | These positions intentionally match the screenshot.
    |--------------------------------------------------------------------------
    */

    const positions = [

        /*
        | LEFT SIDE
        */

        {
            left: "6%",
            top: "185px",
            size: "h-[158px] w-[128px]",
            rotate: "-rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "16.5%",
            top: "125px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-1",
            opacity: "opacity-100"
        },

        {
            left: "16.5%",
            top: "295px",
            size: "h-[158px] w-[128px]",
            rotate: "-rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "27%",
            top: "195px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "37.5%",
            top: "130px",
            size: "h-[158px] w-[128px]",
            rotate: "-rotate-1",
            opacity: "opacity-100"
        },

        /*
        | CENTER
        */

        {
            left: "50%",
            top: "165px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-0",
            opacity: "opacity-100"
        },

        /*
        | RIGHT SIDE
        */

        {
            left: "62.5%",
            top: "130px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-1",
            opacity: "opacity-100"
        },

        {
            left: "73%",
            top: "195px",
            size: "h-[158px] w-[128px]",
            rotate: "-rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "83.5%",
            top: "125px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-1",
            opacity: "opacity-100"
        },

        {
            left: "83.5%",
            top: "295px",
            size: "h-[158px] w-[128px]",
            rotate: "-rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "94%",
            top: "185px",
            size: "h-[158px] w-[128px]",
            rotate: "rotate-1",
            opacity: "opacity-90"
        },

        {
            left: "50%",
            top: "0px",
            size: "h-[100px] w-[110px]",
            rotate: "rotate-0",
            opacity: "opacity-0"
        }

    ];


    /*
    |--------------------------------------------------------------------------
    | GET POSITION
    |--------------------------------------------------------------------------
    */

    function getPosition(index) {

        let diff =
            index - activeIndex;

        const total =
            testimonials.length;

        if (diff > total / 2) {
            diff -= total;
        }

        if (diff < -total / 2) {
            diff += total;
        }

        return diff;
    }


    /*
    |--------------------------------------------------------------------------
    | RENDER
    |--------------------------------------------------------------------------
    */

    function renderCarousel() {

        carousel.innerHTML = "";

        /*
        | Mobile: only show 3 images
        */

        const isMobile =
            window.innerWidth < 768;


        testimonials.forEach((item, index) => {

            const diff =
                getPosition(index);


            /*
            | On mobile
            */

            if (
                isMobile &&
                diff !== -1 &&
                diff !== 0 &&
                diff !== 1
            ) {
                return;
            }


            let slotIndex;


            /*
            | Desktop
            */

            if (diff === 0) {

                slotIndex = 5;

            } else if (diff === -1) {

                slotIndex = 4;

            } else if (diff === -2) {

                slotIndex = 3;

            } else if (diff === -3) {

                slotIndex = 2;

            } else if (diff === -4) {

                slotIndex = 1;

            } else if (diff === -5) {

                slotIndex = 0;

            } else if (diff === 1) {

                slotIndex = 6;

            } else if (diff === 2) {

                slotIndex = 7;

            } else if (diff === 3) {

                slotIndex = 8;

            } else if (diff === 4) {

                slotIndex = 9;

            } else if (diff === 5) {

                slotIndex = 10;

            } else {

                return;

            }


            const position =
                positions[slotIndex];


            const button =
                document.createElement("button");


            button.type = "button";


            /*
            | Desktop positioning
            */

            button.style.left =
                position.left;

            button.style.top =
                position.top;


            button.innerHTML = `
                <img
                    src="${item.image}"
                    alt="${item.name}"
                    class="h-full w-full object-cover"
                />
            `;


            /*
            | Base classes
            */

            button.className = `
                absolute
                -translate-x-1/2
                overflow-hidden
                rounded-[14px]
                border
                border-slate-200
                bg-white
                shadow-[0_8px_20px_rgba(0,0,0,0.08)]
                transition-all
                duration-700
                ease-[cubic-bezier(0.22,1,0.36,1)]
                focus:outline-none
                focus-visible:ring-2
                focus-visible:ring-[#9B2064]
                ${position.size}
                ${position.rotate}
                ${position.opacity}
            `;


            /*
            |--------------------------------------------------------------------------
            | ACTIVE CENTER
            |--------------------------------------------------------------------------
            */

            if (diff === 0) {

                button.classList.add(
                    "z-30",
                    "scale-[1.08]",
                    "border-white",
                    "shadow-[0_18px_40px_rgba(0,0,0,0.18)]",
                    "ring-2",
                    "ring-[#9B2064]/20"
                );

            } else {

                button.classList.add("z-10");

            }


            /*
            |--------------------------------------------------------------------------
            | MOBILE POSITION
            |--------------------------------------------------------------------------
            */

            if (isMobile) {

                button.classList.remove(
                    "h-[158px]",
                    "w-[128px]"
                );


                button.classList.add(
                    "h-[135px]",
                    "w-[105px]",
                    "!top-[35px]"
                );


                if (diff === 0) {

                    button.style.left = "50%";

                    button.classList.add(
                        "!top-[20px]",
                        "scale-110"
                    );

                }

                if (diff === -1) {

                    button.style.left = "18%";

                }

                if (diff === 1) {

                    button.style.left = "82%";

                }

            }


            /*
            |--------------------------------------------------------------------------
            | CLICK
            |--------------------------------------------------------------------------
            */

            button.addEventListener(
                "click",
                () => {

                    activeIndex = index;

                    updateContent();

                    renderCarousel();

                    restartAutoplay();

                }
            );


            carousel.appendChild(button);

        });

    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE CONTENT
    |--------------------------------------------------------------------------
    */

    function updateContent() {

        const item =
            testimonials[activeIndex];


        testimonialContent.classList.add(
            "translate-y-2",
            "opacity-0"
        );


        setTimeout(() => {

            activeName.textContent =
                item.name;

            activeRole.textContent =
                item.role;

            activeQuote.textContent =
                `"${item.quote}"`;


            testimonialContent.classList.remove(
                "translate-y-2",
                "opacity-0"
            );

        }, 180);

    }


    /*
    |--------------------------------------------------------------------------
    | NEXT
    |--------------------------------------------------------------------------
    */

    function nextSlide() {

        activeIndex =
            (activeIndex + 1) %
            testimonials.length;

        updateContent();

        renderCarousel();

    }


    /*
    |--------------------------------------------------------------------------
    | AUTOPLAY
    |--------------------------------------------------------------------------
    */

    function startAutoplay() {

        autoplay =
            setInterval(
                nextSlide,
                3500
            );

    }


    function restartAutoplay() {

        clearInterval(autoplay);

        startAutoplay();

    }


    /*
    |--------------------------------------------------------------------------
    | RESIZE
    |--------------------------------------------------------------------------
    */

    let resizeTimer;

    window.addEventListener(
        "resize",
        () => {

            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(
                () => {
                    renderCarousel();
                },
                150
            );

        }
    );

    updateContent();

    renderCarousel();

    startAutoplay();
</script>
