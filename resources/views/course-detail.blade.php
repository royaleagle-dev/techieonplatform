@extends('layouts.app')

@section('content')
<header class="lg:hidden bg-brand-dark text-white sticky top-0 z-50">
    <div class="px-4 pt-4 pb-3">
      <a href="index.html" class="font-bold text-base tracking-tight">TechieOnPlatform</a>
    </div>
    <!-- Horizontal step progress -->
    <div class="px-4 pb-4">
      <div class="flex items-center gap-2">
        <!-- Step 1 done -->
        <div class="flex items-center gap-1.5 flex-1 min-w-0">
          <span class="w-6 h-6 rounded-full border border-white/50 flex items-center justify-center text-[11px] font-semibold text-white/70 flex-shrink-0">1</span>
          <span class="text-[11px] text-white/50 truncate hidden xs:inline">Password</span>
        </div>
        <div class="h-px flex-1 bg-white/25 max-w-[24px]"></div>
        <!-- Step 2 active -->
        <div class="flex items-center gap-1.5 flex-1 min-w-0">
          <span class="w-6 h-6 rounded-full bg-white text-brand-dark flex items-center justify-center text-[11px] font-bold flex-shrink-0">2</span>
          <span class="text-[11px] font-semibold text-white truncate">Course</span>
        </div>
        <div class="h-px flex-1 bg-white/25 max-w-[24px]"></div>
        <!-- Step 3 -->
        <div class="flex items-center gap-1.5 flex-1 min-w-0">
          <span class="w-6 h-6 rounded-full border border-white/50 flex items-center justify-center text-[11px] font-semibold text-white/70 flex-shrink-0">3</span>
          <span class="text-[11px] text-white/50 truncate hidden xs:inline">Profile</span>
        </div>
      </div>
      <!-- Progress bar -->
      <div class="mt-3 h-1 bg-white/20 rounded-full overflow-hidden">
        <div class="h-full bg-brand-lime rounded-full" style="width: 66%"></div>
      </div>
    </div>
  </header>

  <div class="min-h-screen lg:grid lg:grid-cols-[280px_1fr]">

    
    <aside class="hidden lg:flex bg-brand-dark text-white flex-col relative overflow-hidden min-h-screen">
      <div class="p-8 lg:p-10 flex-1 flex flex-col">
        <a href="index.html" class="font-bold text-lg tracking-tight mb-12 lg:mb-16">
          TechieOnPlatform
        </a>

        <nav class="space-y-6" aria-label="Onboarding progress">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full border-2 border-white/40 flex items-center justify-center text-sm font-semibold text-white/70">1</span>
            <span class="text-sm font-medium text-white/60">Create password</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full bg-white text-brand-dark flex items-center justify-center text-sm font-bold">2</span>
            <span class="text-sm font-semibold text-white">Your course</span>
          </div>
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-full border-2 border-white/40 flex items-center justify-center text-sm font-semibold text-white/70">3</span>
            <span class="text-sm font-medium text-white/60">Set up profile</span>
          </div>
        </nav>
      </div>

      
      <div class="relative h-56 mt-auto">
        <div class="absolute bottom-0 left-0 right-0 px-4 pb-4 flex justify-center">
          <div class="relative w-full max-w-[220px] aspect-[4/3]">
            <div class="absolute bottom-2 left-1/2 -translate-x-1/2 w-40 h-3 bg-white/20 rounded-full blur-[1px]"></div>
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-36 h-24 bg-gradient-to-b from-white/25 to-white/10 rounded-xl border border-white/20 shadow-xl overflow-hidden">
              <div class="h-4 bg-white/15 flex items-center gap-1 px-2">
                <span class="w-1.5 h-1.5 rounded-full bg-red-400/80"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-yellow-400/80"></span>
                <span class="w-1.5 h-1.5 rounded-full bg-green-400/80"></span>
              </div>
              <div class="p-2 grid grid-cols-3 gap-1">
                <div class="h-6 bg-white/20 rounded"></div>
                <div class="h-6 bg-brand-lime/40 rounded"></div>
                <div class="h-6 bg-white/15 rounded"></div>
                <div class="h-6 bg-white/15 rounded col-span-2"></div>
                <div class="h-6 bg-white/20 rounded"></div>
              </div>
            </div>
            <div class="absolute top-0 right-2 w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center shadow-lg text-lg">🔔</div>
            <div class="absolute top-8 left-2 w-9 h-9 rounded-full bg-emerald-400 flex items-center justify-center shadow-lg text-base">✓</div>
            <div class="absolute bottom-16 right-0 w-9 h-9 rounded-full bg-sky-400 flex items-center justify-center shadow-lg text-base">⏱</div>
            <div class="absolute top-4 left-8 text-yellow-300 text-sm">✦</div>
            <div class="absolute top-12 right-10 text-yellow-300 text-xs">✦</div>
          </div>
        </div>
      </div>
    </aside>

    
    <main class="flex flex-col min-h-[calc(100vh-7rem)] lg:min-h-screen">
      <div class="flex-1 px-4 sm:px-8 lg:px-16 py-8 sm:py-10 lg:py-14">
        <p class="text-xs font-semibold tracking-wider text-gray-500 uppercase">Step 2 of 3</p>
        <h1 class="mt-2 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-brand-dark">Your course</h1>
        <p class="mt-2 text-sm sm:text-base text-gray-500 max-w-lg">
          Here is the course you registered for and how the training runs.
        </p>

        <!-- Course card -->
        <div class="mt-6 sm:mt-8 max-w-xl bg-white rounded-2xl border border-gray-100 shadow-sm p-5 sm:p-8">
          <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Course taken</p>
          <h2 class="mt-1 text-lg sm:text-xl lg:text-2xl font-extrabold text-gray-900">Front End Development</h2>

          <div class="mt-5 sm:mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
            <div>
              <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Duration</p>
              <p class="mt-1 text-sm font-semibold text-gray-900">[COURSE LENGTH]</p>
            </div>
            <div>
              <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Cohort</p>
              <p class="mt-1 text-sm font-semibold text-gray-900">Cohort 2</p>
            </div>
            <div>
              <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Starts</p>
              <p class="mt-1 text-sm font-semibold text-gray-900">Monday, November 2</p>
            </div>
            <div>
              <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Time</p>
              <p class="mt-1 text-sm font-semibold text-gray-900">5:00 – 7:00 PM</p>
            </div>
          </div>

          <div class="mt-5 sm:mt-6">
            <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase mb-2">Class days</p>
            <div class="flex flex-wrap gap-2">
              <span class="inline-flex px-3.5 py-1.5 rounded-full bg-[#E8F5C8] text-brand-dark text-sm font-medium">Monday</span>
              <span class="inline-flex px-3.5 py-1.5 rounded-full bg-[#E8F5C8] text-brand-dark text-sm font-medium">Wednesday</span>
              <span class="inline-flex px-3.5 py-1.5 rounded-full bg-[#E8F5C8] text-brand-dark text-sm font-medium">Thursday</span>
            </div>
          </div>

          <div class="mt-5 sm:mt-6">
            <p class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Where</p>
            <p class="mt-1 text-sm font-semibold text-gray-900">Virtual class on TechieOnPlatform</p>
          </div>
        </div>
      </div>

      <!-- Footer action — full width on mobile -->
      <div class="px-4 sm:px-8 lg:px-16 py-4 sm:py-6 flex justify-stretch sm:justify-end border-t border-gray-200/60 lg:border-0 bg-[#F0F4EC] sticky bottom-0 lg:static">
        <a
          href="setup-profile.html"
          id="continue-btn"
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brand-dark sm:bg-white text-white sm:text-brand-dark border border-transparent sm:border-gray-200 font-semibold px-5 py-3 sm:py-2.5 rounded-xl hover:bg-brand-green sm:hover:bg-gray-50 transition text-sm shadow-sm"
        >
          Save &amp; Continue
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </main>
  </div>
@endsection

@section('javascript')
<script>
    async function getApplicantByEmail(email){
        const request = await fetch("/api/applicants/getByEmail", {
            method: "POST",
            body: JSON.stringify({
                'email': email,
            }),
            headers: {
            }
        });
        const response = await request.json();
        if(response.success == 'true'){
            return response.data;
        }else{
            alert ("User authentication failed");
            window.location = "{{ route('user-login') }}"
        }
    }

    const loadData = await getApplicantByEmail(localStorage.getItem('user_email'));

    // document.getElementById('continue-btn')?.addEventListener('click', () => {
    //   const courseData = {
    //     course: 'Front End Development',
    //     duration: '[COURSE LENGTH]',
    //     cohort: 'Cohort 2',
    //     starts: 'Monday, November 2',
    //     time: '5:00 – 7:00 PM',
    //     classDays: ['Monday', 'Wednesday', 'Thursday'],
    //     where: 'Virtual class on TechieOnPlatform',
    //   };
    //   console.log('Course confirmed:', courseData);
    // });
  </script>
@endsection