 <!-- FOOTER -->
  <footer class="bg-slate-900 text-slate-400 pt-8 md:pt-16 pb-8 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-12">
        <div class="col-span-2">
          <div class="flex items-center space-x-2 mb-4 -mt-5">
            <div class="w-40 p-1.5">
                    <a href="/">
                        <img src="{{ asset('logo.png') }}" alt="logo" class="w-auto h-auto">
                    </a>
                </div>
          </div>
          <p class="text-[15px] text-slate-400 max-w-sm leading-relaxed mb-6">
            Connecting international students with premier educational institutions across Australia.
          </p>
          <div class="flex space-x-3">
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition"><i class="fa-brands fa-facebook-f text-base"></i></a>
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition"><i class="fa-brands fa-twitter text-base"></i></a>
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition"><i class="fa-brands fa-instagram text-base"></i></a>
            <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center text-slate-400 hover:bg-brand-600 hover:text-white transition"><i class="fa-brands fa-linkedin-in text-base"></i></a>
          </div>
        </div>

        <div>
          <h4 class="text-white text-base font-bold uppercase tracking-wider mb-4">About us</h4>
          <ul class="space-y-2 text-[15px]">
            <li><a href="{{ route('about') }}" class="hover:text-brand-400 transition">About HBD Services</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Book Your Appointment</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">IELTS/PTE Registration</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Claims</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Referral Program</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white text-base font-bold uppercase tracking-wider mb-4">Quick Links</h4>
          <ul class="space-y-2 text-[15px]">
            <li><a href="{{ route('courses') }}" class="hover:text-brand-400 transition">Courses</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Scholarships</a></li>
            <li><a href="{{ route('providers') }}" class="hover:text-brand-400 transition">Universities</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Counsellors</a></li>
            <li><a href="{{ route('events')}}" class="hover:text-brand-400 transition">Events</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white text-base font-bold uppercase tracking-wider mb-4">Resources</h4>
          <ul class="space-y-2 text-[15px]">
            <li><a href="#" class="hover:text-brand-400 transition">Australian Visa Guide</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">PR Pathway Courses</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Cost of Living Calculator</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Student Accommodation</a></li>
            <li><a href="#" class="hover:text-brand-400 transition">Careers</a></li>

          </ul>
        </div>
      </div>

      <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-[15px] text-slate-500 gap-4">
        <p class="text-center text-sm md:text-sm">© 2024 HBD Services. All rights reserved. Registered CRICOS Advisory Partner.</p>
        <div class="flex space-x-6 text-sm">
          <a href="#" class="hover:text-slate-300">Privacy Policy</a>
          <a href="#" class="hover:text-slate-300">Terms of Service</a>
          <a href="#" class="hover:text-slate-300">Contact Us</a>
        </div>
      </div>
    </div>
  </footer>

      <script>
        (function() {
            const html = document.documentElement;
            html.classList.add('scroll-smooth');

            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) return;

            document.addEventListener('DOMContentLoaded', function() {
                const revealEls = document.querySelectorAll('.reveal-on-scroll');
                if (!revealEls.length) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0', 'translate-y-10',
                                'translate-x-10', '-translate-x-10', 'scale-95');
                            entry.target.classList.add('opacity-100', 'translate-y-0',
                                'translate-x-0', 'scale-100');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: '0px 0px -60px 0px'
                });

                revealEls.forEach((el) => observer.observe(el));
            });

            window.addEventListener('pageshow', function(event) {
                if (event.persisted) {
                    document.querySelectorAll('.reveal-on-scroll').forEach((el) => {
                        const rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight * 0.9) {
                            el.classList.remove('opacity-0', 'translate-y-10', 'translate-x-10',
                                '-translate-x-10', 'scale-95');
                            el.classList.add('opacity-100', 'translate-y-0', 'translate-x-0',
                                'scale-100');
                        }
                    });
                }
            });
        })();
    </script>
