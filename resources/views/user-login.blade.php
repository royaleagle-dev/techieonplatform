@extends('layouts.app')

@section('content')
<div class="min-h-screen grid lg:grid-cols-2">

    
    <div class="relative bg-brand-dark text-white flex flex-col justify-between overflow-hidden min-h-[280px] lg:min-h-screen order-2 lg:order-1">
      <div class="absolute inset-0">
        <img
          src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1000&h=1200&fit=crop"
          alt="Students collaborating"
          class="w-full h-full object-cover opacity-30"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/80 via-brand-dark/70 to-brand-dark"></div>
      </div>

      <div class="relative z-10 flex flex-col justify-between h-full p-8 sm:p-10 lg:p-12">
        <div class="pt-2 lg:pt-8 max-w-md">
          <h1 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold leading-[1.15] tracking-tight">
            Welcome to our<br />
            Tech scholarship<br />
            Programme.
          </h1>
          <p class="mt-4 text-white/80 text-sm sm:text-base leading-relaxed">
            Where we're shaping the future you desire.
          </p>
          <p class="mt-6 text-white/70 text-sm leading-relaxed max-w-xs">
            From zero knowledge to internationally competitive Tech Talent.
          </p>
        </div>

        <!-- Photo cluster (desktop emphasis) -->
        <div class="mt-8 lg:mt-0 relative hidden sm:block">
          <div class="relative w-full max-w-sm mx-auto lg:mx-0">
            <div class="absolute -left-2 bottom-0 w-28 h-36 sm:w-36 sm:h-44 rounded-2xl overflow-hidden border-4 border-brand-dark shadow-xl opacity-90">
              <img
                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=400&fit=crop&crop=faces"
                alt="Student"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="relative ml-16 sm:ml-20 w-40 h-52 sm:w-48 sm:h-60 rounded-2xl overflow-hidden border-4 border-white/20 shadow-2xl">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop&crop=faces"
                alt="Scholarship student"
                class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="flex flex-col min-h-screen order-1 lg:order-2 bg-white">
      <!-- Top link -->
      <div class="flex justify-end px-6 sm:px-10 pt-6">
        <a href="#" class="text-sm font-medium text-gray-500 hover:text-brand-dark transition">
          Recover Password
        </a>
      </div>

      <!-- Form centered -->
      <div class="flex-1 flex items-center justify-center px-6 sm:px-10 py-8 lg:py-0">
        <div class="w-full max-w-md">
          <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-dark">Welcome Back</h2>
          <p class="mt-1.5 text-sm text-gray-500">Welcome to this Cohort</p>

          <form id="login-form" class="mt-8 space-y-5" novalidate>
            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-semibold text-brand-dark mb-1.5">Email</label>
              <input
                id="email"
                name="email"
                type="email"
                value="ayomide@gmail.com"
                autocomplete="email"
                class="w-full px-4 py-3 rounded-xl border border-emerald-200 bg-emerald-50/80 text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark transition"
              />
            </div>

            <!-- Password -->
            <div>
              <label for="password" class="block text-sm font-semibold text-brand-dark mb-1.5">Password</label>
              <div class="relative">
                <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="••••••••••"
                  autocomplete="current-password"
                  class="w-full px-4 py-3 pr-12 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark transition"
                />
                <button
                  type="button"
                  id="toggle-password"
                  class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-gray-400 hover:text-gray-600 transition"
                  aria-label="Show password"
                >
                  <svg id="eye-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                  <svg id="eye-closed" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                  </svg>
                </button>
              </div>
            </div>

            <!-- Keep logged in -->
            <label class="flex items-center gap-2.5 cursor-pointer">
              <input
                id="keep-logged-in"
                name="keepLoggedIn"
                type="checkbox"
                class="w-4 h-4 rounded border-gray-300 text-brand-dark focus:ring-brand-dark"
              />
              <span class="text-sm text-gray-600">Keep Me Logged in</span>
            </label>

            <p id="form-error" class="text-sm text-red-600 hidden"></p>

            <button
              type="submit"
              class="w-full bg-brand-dark text-white font-semibold py-3.5 rounded-xl hover:bg-brand-green transition text-sm"
            >
              Login
            </button>
          </form>
        </div>
      </div>

      <!-- Powered by -->
      <div class="px-6 sm:px-10 pb-8 flex items-center justify-center gap-2">
        <span class="text-xs text-gray-400">Powered by:</span>
        <div class="flex items-center gap-1.5">
          <div class="w-6 h-6 rounded-full bg-brand-dark flex items-center justify-center">
            <svg class="w-3.5 h-3.5 text-brand-lime" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
          </div>
          <span class="text-xs font-medium text-gray-600">Techieonplatform</span>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script>
    // --- Password visibility toggle ---
    // Necessary for the eye icon shown in the design
    const passwordInput = document.getElementById('password');
    const toggleBtn = document.getElementById('toggle-password');
    const eyeOpen = document.getElementById('eye-open');
    const eyeClosed = document.getElementById('eye-closed');

    toggleBtn?.addEventListener('click', () => {
      const isHidden = passwordInput.type === 'password';
      passwordInput.type = isHidden ? 'text' : 'password';
      eyeOpen.classList.toggle('hidden', isHidden);
      eyeClosed.classList.toggle('hidden', !isHidden);
    });

    // --- Form submit ---
    // Necessary to validate and log login credentials
    document.getElementById('login-form')?.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      const keepLoggedIn = document.getElementById('keep-logged-in').checked;
      const errorEl = document.getElementById('form-error');

      errorEl.classList.add('hidden');
      errorEl.classList.remove('text-emerald-600');
      errorEl.classList.add('text-red-600');
      errorEl.textContent = '';

      if (!email) {
        errorEl.textContent = 'Please enter your email.';
        errorEl.classList.remove('hidden');
        return;
      }
      if (!password) {
        errorEl.textContent = 'Please enter your password.';
        errorEl.classList.remove('hidden');
        return;
      }

      const formData = { email, password, keepLoggedIn };
      submitForm(formData)
      console.log('Login submitted:', formData);
    });

    async function submitForm(formData){
      const request = await fetch("/api/login", {
        method: "POST",
        body: JSON.stringify(formData),
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
      });
      const response = request.json();
      if(response.success == 'true'){
        errorEl.classList.remove('text-red-600');
        errorEl.classList.add('text-emerald-600');
        errorEl.textContent = 'Signing you in…';
        errorEl.classList.remove('hidden');
      }else{
        errorEl.classList.remove('text-red-600');
        errorEl.classList.add('text-emerald-600');
        errorEl.textContent = 'Authenticaion error. Please try again';
        errorEl.classList.remove('hidden');
      }
    }
  </script>
@endsection