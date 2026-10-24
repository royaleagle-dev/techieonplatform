<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Techie-On-Platform | Building Digital Solutions | Training Future Workforce.</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'brand-dark': '#0B2E1F',
            'brand-darker': '#071F15',
            'brand-lime': '#C8F060',
            'brand-yellow': '#D4F06A',
            'brand-green': '#1A4D35',
            'brand-purple': '#E8D5F5',
            'brand-purple-dark': '#6B3FA0',
            'sponsor-purple': '#2D1B4E',
          },
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
        },
      },
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .nav-pill { background: rgba(255,255,255,0.12); }
    .hero-img-frame {
      border: 2px solid rgba(200, 240, 96, 0.35);
      border-radius: 1rem;
    }

    /* ===== Services horizontal scroll – mobile friendly ===== */
.service-img {
  height: 200px;                 /* mobile */
  width: auto;
  border-radius: 0.75rem;
  box-shadow: 0 4px 12px rgba(0,0,0,0.12);
  object-fit: cover;
  flex-shrink: 0;
  user-select: none;
  -webkit-user-drag: none;
}

@media (min-width: 640px) {
  .service-img {
    height: 260px;
  }
}

@media (min-width: 1024px) {
  .service-img {
    height: 300px;
  }
}

.services-scroll-wrapper {
  -webkit-overflow-scrolling: touch;   /* smooth iOS momentum */
  scrollbar-width: thin;
  scrollbar-color: rgba(11, 46, 31, 0.35) transparent;
  touch-action: pan-x;
}

.services-scroll-wrapper::-webkit-scrollbar {
  height: 5px;
}
.services-scroll-wrapper::-webkit-scrollbar-track {
  background: transparent;
}
.services-scroll-wrapper::-webkit-scrollbar-thumb {
  background-color: rgba(11, 46, 31, 0.3);
  border-radius: 9999px;
}

.services-scroll-track {
  width: max-content;
  will-change: transform;
  animation: scroll-left 45s linear infinite;
}

/* Much slower on mobile */
@media (max-width: 767px) {
  .services-scroll-track {
    animation-duration: 70s;
  }
}

@keyframes scroll-left {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Pause when user interacts */
.services-scroll-wrapper.is-paused .services-scroll-track,
.services-scroll-wrapper:hover .services-scroll-track {
  animation-play-state: paused;
}

/* Respect reduced-motion preference */
@media (prefers-reduced-motion: reduce) {
  .services-scroll-track {
    animation: none;
  }
}
  </style>
</head>
<body class="bg-white text-gray-900 antialiased">

  <!-- ========== NAVBAR ========== -->
  <header class="fixed top-0 left-0 right-0 z-50 bg-brand-dark text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 md:h-20">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center gap-2">
          <img src="/assets/images/logo.png" class="w-[80px]">
          <!-- <div class="w-9 h-9 rounded-full bg-brand-lime/20 flex items-center justify-center border border-brand-lime/40">
            <svg class="w-5 h-5 text-brand-lime" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <span class="font-semibold text-lg tracking-tight hidden sm:inline">techieon</span> -->
        </a>

        <!-- Center Nav -->
        <!-- <nav class="hidden md:flex items-center">
          <div class="nav-pill rounded-full px-1.5 py-1.5 flex items-center gap-1">
            <a href="#home" class="px-4 py-1.5 rounded-full bg-white text-brand-dark text-sm font-medium">Home</a>
            <a href="#courses" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">Courses</a>
            <a href="#solutions" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">Solutions</a>
            <a href="#about" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">About</a>
          </div>
        </nav> -->

        <!-- Right actions -->
        <div class="flex items-center gap-10">
          <nav class="hidden md:flex items-center">
          <div class="nav-pill rounded-full px-1.5 py-1.5 flex items-center gap-1">
            <a href="{{ route('index') }}" class="px-4 py-1.5 rounded-full bg-white text-brand-dark text-sm font-medium">Home</a>
            <a href="{{ route('courses') }}" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">Courses</a>
            <a href="{{ route('solutions') }}" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">Solutions</a>
            <a href="{{ route('about') }}" class="px-4 py-1.5 rounded-full text-white/90 hover:text-white text-sm font-medium">About</a>
          </div>
        </nav>

          <a href="{{ route('user-login') }}" class="text-sm font-medium text-white/90 hover:text-white hidden sm:inline">Sign in</a>
          
          <a href="{{ route('apply') }}" class="bg-brand-lime text-brand-dark text-sm font-semibold px-4 py-2 rounded-lg hover:bg-brand-yellow transition">
            Apply For Scholarship
          </a>
          
          <!-- Mobile menu button -->
          <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-white/10" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-white/10 px-4 pb-4">
      <div class="flex flex-col gap-1 pt-3">
        <a href="{{ route('index') }}" class="px-3 py-2 rounded-lg bg-white/10 text-sm font-medium">Home</a>
        <a href="{{ route('courses') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-white/90">Courses</a>
        <a href="{{ route('solutions') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-white/90">Solutions</a>
        <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-white/90">About</a>
        <a href="{{ route('user-login') }}" class="px-3 py-2 rounded-lg text-sm font-medium text-white/90">Sign in</a>
      </div>
    </div>
  </header>

   @yield('content')

   <!-- ========== WHATSAPP COMMUNITY ========== -->
  <section class="bg-brand-dark py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-[#1A4D35] rounded-2xl px-5 py-4 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-[#25D366] flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
          </div>
          <span class="font-semibold text-white text-sm sm:text-base">Join Our WhatsApp Community</span>
        </div>
        <a href="#" class="bg-brand-lime text-brand-dark font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-yellow transition text-sm whitespace-nowrap">
          Join Now
        </a>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <footer class="bg-brand-darker text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pb-10 border-b border-white/10">
        <!-- Brand -->
        <div>
          <a href="{{ route('index') }}" class="flex items-center gap-2">
          <img src="/assets/images/logo.png" class="w-[80px]">
          <!-- <div class="w-9 h-9 rounded-full bg-brand-lime/20 flex items-center justify-center border border-brand-lime/40">
            <svg class="w-5 h-5 text-brand-lime" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <span class="font-semibold text-lg tracking-tight hidden sm:inline">techieon</span> -->
        </a>
          <p class="text-sm text-white/60 leading-relaxed max-w-xs">
            To empower 500 million individuals and businesses with the digital skills, innovative solutions, and opportunities needed to thrive in the digital age.
          </p>
          <div class="flex gap-3 mt-5">
            <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition" aria-label="Facebook">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition" aria-label="Instagram">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition" aria-label="LinkedIn">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition" aria-label="YouTube">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </div>
        </div>

        <!-- Service links -->
        <div>
          <h4 class="font-semibold text-sm uppercase tracking-wider text-white/50 mb-4">Service</h4>
          <ul class="space-y-2.5 text-sm">
            <li><a href="#home" class="text-white/80 hover:text-white transition">Home</a></li>
            <li><a href="#courses" class="text-white/80 hover:text-white transition">Courses</a></li>
            <li><a href="#solutions" class="text-white/80 hover:text-white transition">Solutions</a></li>
            <li><a href="#about" class="text-white/80 hover:text-white transition">About</a></li>
            <li><a href="{{ route('user-login') }}" class="text-white/80 hover:text-white transition">Sign in</a></li>
            <li><a href="#scholarship" class="text-white/80 hover:text-white transition">Apply For Scholarship</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div>
          <h4 class="font-semibold text-sm uppercase tracking-wider text-white/50 mb-4">Contact Us</h4>
          <ul class="space-y-2.5 text-sm text-white/80">
            <li>
              <a href="mailto:info@techieonplatform.com" class="hover:text-white transition">info@techieonplatform.com</a>
            </li>
            <li>
              <a href="tel:+2348104428395" class="hover:text-white transition">08104428395</a>
            </li>
            <li>No 5, Bonojo Eleruku Ijebu ode</li>
          </ul>
        </div>
      </div>

      <div class="pt-6 text-center text-xs text-white/40">
        All Rights Reserved © 2026
      </div>
    </div>
  </footer>

  <!-- Minimal JS -->
  <script>
    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn?.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Program filter buttons
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.program-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Update active state
        filterBtns.forEach(b => {
          b.classList.remove('bg-brand-dark', 'text-white');
          b.classList.add('bg-white', 'border', 'border-gray-200', 'text-gray-700');
        });
        btn.classList.remove('bg-white', 'border', 'border-gray-200', 'text-gray-700');
        btn.classList.add('bg-brand-dark', 'text-white');

        const filter = btn.dataset.filter;
        cards.forEach(card => {
          if (filter === 'all' || card.dataset.category === filter) {
            card.style.display = '';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>
  @yield('javascript')
</body>
</html>
