@extends('layouts.app')

@section('content')
<style>
    body { font-family: 'Poppins', sans-serif; }
    .nav-pill { background: rgba(255,255,255,0.95); }
    .step-panel { display: none; }
    .step-panel.active { display: block; }
    .progress-fill { transition: width 0.3s ease; }
  </style>

<!-- ========== PROGRAMME INTRO ========== -->
  <section class="bg-[#E8F5C8]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
      <h2 class="font-bold text-brand-dark text-sm sm:text-base">TechionPlatform Scholarship Programme</h2>
      <p class="mt-1 text-sm text-brand-dark/80">
        Complete this short application to access career-ready training, mentorship, and job placement support.
      </p>
    </div>
  </section>

  <!-- ========== APPLICATION FORM ========== -->
  <main class="bg-gray-50/50 py-8 md:py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Progress -->
      <div class="bg-white rounded-2xl border border-gray-100 p-5 mb-8 shadow-sm">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm font-medium text-gray-600">Application progress</span>
          <span id="step-indicator" class="text-sm font-semibold text-brand-dark">Step 1 of 3</span>
        </div>
        <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
          <div id="progress-bar" class="progress-fill h-full bg-brand-dark rounded-full" style="width: 33%"></div>
        </div>
        <div class="flex justify-between mt-3 text-xs font-medium">
          <span id="label-1" class="text-brand-dark">Your details</span>
          <span id="label-2" class="text-gray-400">Your goals</span>
          <span id="label-3" class="text-gray-400">Review</span>
        </div>
      </div>

      <form id="application-form" novalidate>
        <!-- ========== STEP 1: YOUR DETAILS ========== -->
        <div id="step-1" class="step-panel active">
          <h2 class="text-sm font-bold tracking-wide text-gray-900 uppercase mb-1">Step 1 · Your details</h2>
          <p class="text-sm text-gray-500 mb-6">Tell us a little about yourself so we can personalize your experience.</p>

          <div class="space-y-4">
            <!-- Name row -->
            <div class="grid sm:grid-cols-2 gap-4">
              <div class="bg-white rounded-2xl border border-gray-100 p-5">
                <label for="first-name" class="block text-sm font-semibold text-gray-900 mb-1">
                  First name <span class="text-red-500">*</span>
                </label>
                <input
                  id="first-name"
                  name="firstName"
                  type="text"
                  placeholder="e.g. Ada"
                  required
                  class="w-full border-0 border-b border-gray-200 pb-2 text-sm focus:outline-none focus:border-brand-dark transition"
                />
              </div>
              <div class="bg-white rounded-2xl border border-gray-100 p-5">
                <label for="last-name" class="block text-sm font-semibold text-gray-900 mb-1">
                  Last name <span class="text-red-500">*</span>
                </label>
                <input
                  id="last-name"
                  name="lastName"
                  type="text"
                  placeholder="e.g. Okafor"
                  required
                  class="w-full border-0 border-b border-gray-200 pb-2 text-sm focus:outline-none focus:border-brand-dark transition"
                />
              </div>
            </div>

            <!-- Email -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <label for="email" class="block text-sm font-semibold text-gray-900 mb-1">
                Email address <span class="text-red-500">*</span>
              </label>
              <input
                id="email"
                name="email"
                type="email"
                placeholder="you@example.com"
                required
                class="w-full border-0 border-b border-gray-200 pb-2 text-sm focus:outline-none focus:border-brand-dark transition"
              />
            </div>

            <!-- Phone -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <label for="phone" class="block text-sm font-semibold text-gray-900 mb-1">
                Phone number <span class="text-red-500">*</span>
              </label>
              <p class="text-xs text-gray-500 mb-2">WhatsApp number preferred</p>
              <input
                id="phone"
                name="phone"
                type="tel"
                placeholder="+234 800 000 0000"
                required
                class="w-full border-0 border-b border-gray-200 pb-2 text-sm focus:outline-none focus:border-brand-dark transition"
              />
            </div>

            <!-- Country -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <p class="text-sm font-semibold text-gray-900 mb-3">
                Country <span class="text-red-500">*</span>
              </p>
              <div class="space-y-2.5">
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="Nigeria" required class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Nigeria</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="United Kingdom" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">United Kingdom</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="United States" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">United States</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="Ghana" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Ghana</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="Kenya" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Kenya</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="Canada" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Canada</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="country" value="Other" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Other</span>
                </label>
              </div>
            </div>

            <!-- Scholarship Code -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <label for="scholarship-code" class="block text-sm font-semibold text-gray-900 mb-1">
                Scholarship Code <span class="text-gray-400 font-normal">(optional)</span>
              </label>
              <p class="text-xs text-gray-500 mb-2">If you have a referral or sponsor code, enter it here.</p>
              <input
                id="scholarship-code"
                name="scholarshipCode"
                type="text"
                placeholder="e.g. Thevictoa * (No 22)"
                class="w-full border-0 border-b border-gray-200 pb-2 text-sm focus:outline-none focus:border-brand-dark transition"
              />
            </div>
          </div>

          <div class="mt-8 flex justify-end">
            <button type="button" id="next-1" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">
              Continue →
            </button>
          </div>
        </div>

        <!-- ========== STEP 2: YOUR GOALS ========== -->
        <div id="step-2" class="step-panel">
          <h2 class="text-sm font-bold tracking-wide text-gray-900 uppercase mb-1">Step 2 · Your goals</h2>
          <p class="text-sm text-gray-500 mb-2">Choose your learning path</p>
          <p class="text-sm text-gray-500 mb-6">Select the training that will help you move forward.</p>

          <div class="space-y-4">
            <!-- Mode of learning -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <p class="text-sm font-semibold text-gray-900 mb-3">
                Preferred mode of learning <span class="text-red-500">*</span>
              </p>
              <div class="space-y-2.5">
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="learningMode" value="Online" required class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Online</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="learningMode" value="Physical (in-person)" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Physical (in-person)</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="learningMode" value="Hybrid (online + physical)" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Hybrid (online + physical)</span>
                </label>
              </div>
            </div>

            <!-- Current status -->
            <div class="bg-white rounded-2xl border border-gray-100 p-5">
              <p class="text-sm font-semibold text-gray-900 mb-3">
                Your current status <span class="text-red-500">*</span>
              </p>
              <div class="space-y-2.5">
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Student" required class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Student</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Graduate" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Graduate</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Working professional" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Working professional</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Self-employed" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Self-employed</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Unemployed" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Unemployed</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                  <input type="radio" name="status" value="Other" class="w-4 h-4 text-brand-dark focus:ring-brand-dark" />
                  <span class="text-sm text-gray-700">Other</span>
                </label>
              </div>
            </div>
          </div>

          <div class="mt-8 flex justify-between">
            <button type="button" id="back-2" class="text-sm font-semibold text-gray-600 hover:text-brand-dark transition px-4 py-2.5">
              ← Back
            </button>
            <button type="button" id="next-2" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">
              Continue →
            </button>
          </div>
        </div>

        <!-- ========== STEP 3: REVIEW ========== -->
        <div id="step-3" class="step-panel">
          <h2 class="text-sm font-bold tracking-wide text-gray-900 uppercase mb-1">Step 3 · Review</h2>
          <p class="text-sm text-gray-500 mb-6">Please confirm your details before submitting.</p>

          <div class="bg-white rounded-2xl border border-gray-100 p-6 space-y-4">
            <div class="grid sm:grid-cols-2 gap-4">
              <div>
                <p class="text-xs text-gray-500 uppercase tracking-wide">First name</p>
                <p id="review-first" class="font-medium text-gray-900 mt-0.5">—</p>
              </div>
              <div>
                <p class="text-xs text-gray-500 uppercase tracking-wide">Last name</p>
                <p id="review-last" class="font-medium text-gray-900 mt-0.5">—</p>
              </div>
            </div>
            <div>
              <p class="text-xs text-gray-500 uppercase tracking-wide">Email</p>
              <p id="review-email" class="font-medium text-gray-900 mt-0.5">—</p>
            </div>
            <div>
              <p class="text-xs text-gray-500 uppercase tracking-wide">Phone</p>
              <p id="review-phone" class="font-medium text-gray-900 mt-0.5">—</p>
            </div>
            <div>
              <p class="text-xs text-gray-500 uppercase tracking-wide">Country</p>
              <p id="review-country" class="font-medium text-gray-900 mt-0.5">—</p>
            </div>
            <div>
              <p class="text-xs text-gray-500 uppercase tracking-wide">Learning mode</p>
              <p id="review-mode" class="font-medium text-gray-900 mt-0.5">—</p>
            </div>
            <div>
              <p class="text-xs text-gray-500 uppercase tracking-wide">Current status</p>
              <p id="review-status" class="font-medium text-gray-900 mt-0.5">—</p>
            </div>
            <div id="review-code-wrap" class="hidden">
              <p class="text-xs text-gray-500 uppercase tracking-wide">Scholarship code</p>
              <p id="review-code" class="font-medium text-brand-dark mt-0.5">—</p>
            </div>
          </div>

          <div class="mt-8 flex justify-between">
            <button type="button" id="back-3" class="text-sm font-semibold text-gray-600 hover:text-brand-dark transition px-4 py-2.5">
              ← Back
            </button>
            <button type="submit" class="bg-brand-lime text-brand-dark font-semibold px-6 py-2.5 rounded-full hover:bg-brand-yellow transition text-sm">
              Submit application
            </button>
          </div>
        </div>

        <!-- Success message (hidden by default) -->
        <div id="success-panel" class="hidden text-center py-12">
          <div class="w-16 h-16 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-5">
            <svg class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
          <h2 class="text-2xl font-extrabold text-gray-900">Application submitted!</h2>
          <p class="mt-3 text-gray-600 max-w-md mx-auto">
            Thank you for applying to the TechionPlatform Scholarship Programme. We’ll review your application and get back to you shortly.
          </p>
          <a href="{{ route('index') }}" class="mt-8 inline-flex items-center bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">
            Back to Home
          </a>
        </div>
      </form>
    </div>
  </main>
@endsection

@section('javascript')
<script>
    // --- Multi-step form ---
    // Necessary for the 3-step application flow shown in the design
    let currentStep = 1;
    const totalSteps = 3;

    function goToStep(step) {
      currentStep = step;

      // Show/hide panels
      document.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
      document.getElementById('step-' + step)?.classList.add('active');

      // Progress bar
      const pct = (step / totalSteps) * 100;
      document.getElementById('progress-bar').style.width = pct + '%';
      document.getElementById('step-indicator').textContent = 'Step ' + step + ' of ' + totalSteps;

      // Labels
      for (let i = 1; i <= totalSteps; i++) {
        const label = document.getElementById('label-' + i);
        if (label) {
          label.classList.toggle('text-brand-dark', i <= step);
          label.classList.toggle('text-gray-400', i > step);
        }
      }

      // Populate review on step 3
      if (step === 3) populateReview();

      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function getFormData() {
      const country = document.querySelector('input[name="country"]:checked');
      const mode = document.querySelector('input[name="learningMode"]:checked');
      const status = document.querySelector('input[name="status"]:checked');
      return {
        firstName: document.getElementById('first-name').value.trim(),
        lastName: document.getElementById('last-name').value.trim(),
        email: document.getElementById('email').value.trim(),
        phone: document.getElementById('phone').value.trim(),
        country: country ? country.value : '',
        scholarshipCode: document.getElementById('scholarship-code').value.trim(),
        learningMode: mode ? mode.value : '',
        status: status ? status.value : '',
      };
    }

    function populateReview() {
      const data = getFormData();
      document.getElementById('review-first').textContent = data.firstName || '—';
      document.getElementById('review-last').textContent = data.lastName || '—';
      document.getElementById('review-email').textContent = data.email || '—';
      document.getElementById('review-phone').textContent = data.phone || '—';
      document.getElementById('review-country').textContent = data.country || '—';
      document.getElementById('review-mode').textContent = data.learningMode || '—';
      document.getElementById('review-status').textContent = data.status || '—';

      if (data.scholarshipCode) {
        document.getElementById('review-code').textContent = data.scholarshipCode;
        document.getElementById('review-code-wrap').classList.remove('hidden');
      } else {
        document.getElementById('review-code-wrap').classList.add('hidden');
      }
    }

    // Basic required-field check before advancing
    function validateStep(step) {
      if (step === 1) {
        const data = getFormData();
        if (!data.firstName || !data.lastName || !data.email || !data.phone || !data.country) {
          alert('Please fill in all required fields in Step 1.');
          return false;
        }
      }
      if (step === 2) {
        const data = getFormData();
        if (!data.learningMode || !data.status) {
          alert('Please select your learning mode and current status.');
          return false;
        }
      }
      return true;
    }

    document.getElementById('next-1')?.addEventListener('click', () => {
      if (validateStep(1)) goToStep(2);
    });
    document.getElementById('next-2')?.addEventListener('click', () => {
      if (validateStep(2)) goToStep(3);
    });
    document.getElementById('back-2')?.addEventListener('click', () => goToStep(1));
    document.getElementById('back-3')?.addEventListener('click', () => goToStep(2));

    // Form submit — collect all values into an object and log to console
    document.getElementById('application-form')?.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = getFormData();
      submitForm(formData);
      console.log('Scholarship application submitted:', formData);
    });

    async function submitForm(formData){
      const request = await fetch("/api/applicants", {
        method: 'POST',
        body: JSON.stringify(formData),
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        }
      })

      const response = await request.json()
      if(response.success == true){
        document.getElementById('step-3').classList.remove('active');
        document.getElementById('success-panel').classList.remove('hidden');
        document.getElementById('progress-bar').style.width = '100%';
        document.getElementById('step-indicator').textContent = 'Complete';
      }else{
        alert("An error occured. Please try again");
      }

    };
  
</script>
@endsection