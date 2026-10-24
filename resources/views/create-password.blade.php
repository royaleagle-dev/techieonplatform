@extends('layouts.app')

@section('content')
<div class="min-h-screen grid lg:grid-cols-2">

    <!-- ========== LEFT PANEL ========== -->
    <div class="relative bg-brand-dark text-white flex flex-col justify-between overflow-hidden min-h-[420px] lg:min-h-screen">
      <!-- Background photo -->
      <div class="absolute inset-0">
        <img
          src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=900&h=1200&fit=crop&crop=faces"
          alt="Scholarship student"
          class="w-full h-full object-cover object-top opacity-90"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/85 to-brand-dark/40"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-brand-dark/30"></div>
      </div>

      <div class="relative z-10 flex flex-col justify-between h-full p-8 sm:p-10 lg:p-12">
        <!-- Top content -->
        <div class="pt-4 lg:pt-10 max-w-md">
          <p class="text-brand-lime font-medium text-sm sm:text-base mb-3"><span id="firstname">Adeolu</span> <span id="lastname">Ayomide</span></p>
          <h1 class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold leading-[1.15] tracking-tight">
            Welcome to our<br />
            Tech scholarship<br />
            Programme.
          </h1>
          <p class="mt-4 text-white/75 text-sm sm:text-base leading-relaxed">
            Where we're shaping the future you desire.
          </p>
        </div>

        <!-- Bottom content -->
        <div class="mt-10 lg:mt-0 space-y-8">
          <p class="text-white/80 text-sm sm:text-base max-w-xs leading-relaxed">
            From zero knowledge to internationally competitive Tech Talent.
          </p>
          <div class="flex items-center gap-2">
            <span class="text-white/60 text-xs">Powered by:</span>
            <div class="w-8 h-8 rounded-full bg-brand-lime/90 flex items-center justify-center">
              <svg class="w-4 h-4 text-brand-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== RIGHT PANEL ========== -->
    <div class="flex items-center justify-center p-6 sm:p-10 lg:p-16 bg-gray-50/50">
      <div class="w-full max-w-md">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-dark">Create your Password</h2>
        <p class="mt-2 text-sm text-gray-500 leading-relaxed">
          Welcome to Cohort 2. Choose a password to secure your students account.
        </p>

        <form id="password-form" class="mt-8 space-y-5" novalidate>
          <!-- Email (read-only) -->
          <div>
            <label for="email" class="block text-sm font-semibold text-brand-dark mb-1.5">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              value="ayomide@gmail.com"
              readonly
              class="w-full px-4 py-3 rounded-xl border border-emerald-200 bg-emerald-50/80 text-sm text-gray-800 focus:outline-none cursor-default"
            />
          </div>

          <!-- New Password -->
          <div>
            <label for="new-password" class="block text-sm font-semibold text-brand-dark mb-1.5">New Password</label>
            <div class="relative">
              <input
                id="new-password"
                name="newPassword"
                type="password"
                placeholder="••••••••••"
                autocomplete="new-password"
                class="w-full px-4 py-3 pr-12 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark transition"
              />
              <button
                type="button"
                id="toggle-new"
                class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-gray-400 hover:text-gray-600 transition"
                aria-label="Show password"
              >
                <!-- Eye open -->
                <svg id="eye-new-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <!-- Eye closed -->
                <svg id="eye-new-closed" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- Confirm Password -->
          <div>
            <label for="confirm-password" class="block text-sm font-semibold text-brand-dark mb-1.5">Confirm Password</label>
            <div class="relative">
              <input
                id="confirm-password"
                name="confirmPassword"
                type="password"
                placeholder="••••••••••"
                autocomplete="new-password"
                class="w-full px-4 py-3 pr-12 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark transition"
              />
              <button
                type="button"
                id="toggle-confirm"
                class="absolute right-3 top-1/2 -translate-y-1/2 p-1 text-gray-400 hover:text-gray-600 transition"
                aria-label="Show password"
              >
                <svg id="eye-confirm-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <svg id="eye-confirm-closed" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                </svg>
              </button>
            </div>
            <p class="mt-2 text-xs text-gray-500">Use 5+ characters with a mix of letters and numbers.</p>
          </div>

          <!-- Error message -->
          <p id="form-error" class="text-sm text-red-600 hidden"></p>

          <!-- Submit -->
          <button
            type="submit"
            class="w-full bg-brand-dark text-white font-semibold py-3.5 rounded-xl hover:bg-brand-green transition text-sm"
          >
            Create Password And Continue
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
<script>
    document.querySelector("#firstname").textContent = localStorage.getItem('first_name');
    document.querySelector("#lastname").textContent = localStorage.getItem('last_name');
    const emailInput = document.querySelector("#email")
    emailInput.value = localStorage.getItem('user_email');
    emailInput.disabled = true;
</script>
<script>
    // --- Password visibility toggles ---
    // Necessary for the eye icons shown in the design
    function setupToggle(inputId, btnId, openId, closedId) {
      const input = document.getElementById(inputId);
      const btn = document.getElementById(btnId);
      const eyeOpen = document.getElementById(openId);
      const eyeClosed = document.getElementById(closedId);
      btn?.addEventListener('click', () => {
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        eyeOpen.classList.toggle('hidden', isHidden);
        eyeClosed.classList.toggle('hidden', !isHidden);
      });
    }
    setupToggle('new-password', 'toggle-new', 'eye-new-open', 'eye-new-closed');
    setupToggle('confirm-password', 'toggle-confirm', 'eye-confirm-open', 'eye-confirm-closed');

    // --- Form submit ---
    // Necessary to validate and log the password creation data
    document.getElementById('password-form')?.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('email').value.trim();
      const newPassword = document.getElementById('new-password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      const errorEl = document.getElementById('form-error');

      errorEl.classList.add('hidden');
      errorEl.textContent = '';

      if (!newPassword || newPassword.length < 5) {
        errorEl.textContent = 'Password must be at least 5 characters.';
        errorEl.classList.remove('hidden');
        return;
      }
      if (!/[a-zA-Z]/.test(newPassword) || !/[0-9]/.test(newPassword)) {
        errorEl.textContent = 'Password must include a mix of letters and numbers.';
        errorEl.classList.remove('hidden');
        return;
      }
      if (newPassword !== confirmPassword) {
        errorEl.textContent = 'Passwords do not match.';
        errorEl.classList.remove('hidden');
        return;
      }

      const formData = {
        'emal': email,
        'password': newPassword,
        'password_confirmation':confirmPassword,
      };
      
      console.log('Password created:', formData);
      submitPassword(formData);

      // Success feedback (replace with redirect in production)
      errorEl.classList.remove('text-red-600');
      errorEl.classList.add('text-emerald-600');
      errorEl.textContent = 'Password created successfully. Redirecting…';
      errorEl.classList.remove('hidden');
    });

    async function submitPassword(formData){
        const token = localStorage.get_item('auth_token');
        const request = await fetch("/api/user/create-password", {
            method: "POST",
            body: JSON.stringify(formData);
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}` // Pass Sanctum token here
            },
        })

        const response = await request.json();
        if(response.success == 'true'){
          window.location = "{{ route('course-detail') }}"
        }
    }
  </script>
@endsection