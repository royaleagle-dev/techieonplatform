@extends('layouts.app')

@section('content')
<style>
    body { font-family: 'Poppins', sans-serif; }
    .step-panel { display: none; }
    .step-panel.active { display: block; }
    .option-btn {
      border: 1.5px solid #e5e7eb;
      background: #fff;
      transition: all 0.15s ease;
    }
    .option-btn:hover { border-color: #0B2E1F; }
    .option-btn.selected {
      border-color: #0B2E1F;
      background: #f0fdf4;
      color: #0B2E1F;
      font-weight: 600;
    }
    .option-btn.selected-green {
      border-color: #16a34a;
      background: #f0fdf4;
      color: #15803d;
      font-weight: 600;
    }
    .progress-seg { height: 4px; border-radius: 2px; background: #e5e7eb; flex: 1; }
    .progress-seg.done { background: #16a34a; }
    .progress-seg.current { background: #16a34a; }
  </style>
<!-- ========== HERO ========== -->
  <section class="relative pt-16 md:pt-18 min-h-[300px] md:min-h-[340px] flex items-center">
    <div class="absolute inset-0">
      <img
        src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1600&h=700&fit=crop"
        alt="Ready to build"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-brand-dark/65"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight max-w-xl">
        Ready to Build Something<br />Great?
      </h1>
      <p class="mt-3 text-white/85 text-base sm:text-lg">Tell us what you want to build.</p>
      <a href="#quotation-form" class="mt-6 inline-flex items-center bg-brand-lime text-brand-dark font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-yellow transition text-sm">
        Get Quotation
      </a>
    </div>
  </section>

  <!-- ========== QUOTATION WIZARD ========== -->
  <main id="quotation-form" class="py-8 md:py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Progress segments -->
      <div class="flex gap-1.5 mb-2">
        <div class="progress-seg" id="seg-1"></div>
        <div class="progress-seg" id="seg-2"></div>
        <div class="progress-seg" id="seg-3"></div>
        <div class="progress-seg" id="seg-4"></div>
        <div class="progress-seg" id="seg-5"></div>
        <div class="progress-seg" id="seg-6"></div>
      </div>
      <p class="text-xs text-gray-500 mb-6">
        Step <span id="step-num">1</span> of 6: <span id="step-name" class="font-medium text-gray-700">Project type</span>
      </p>

      <div class="grid lg:grid-cols-[1fr_280px] gap-6 items-start">

        <!-- ===== LEFT: FORM PANELS ===== -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 sm:p-8">

          <!-- STEP 1: Project type -->
          <div id="step-1" class="step-panel active">
            <h2 class="text-2xl font-extrabold text-gray-900">What do you want to build?</h2>
            <p class="mt-1 text-sm text-gray-500 mb-6">Choose the closest option.</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3" id="project-type-grid">
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Business Website">Business Website</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Corporate Website">Corporate Website</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="E-commerce Website">E-commerce Website</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="School Website">School Website</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="NGO Website">NGO Website</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Landing Page">Landing Page</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Web Application">Web Application</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Mobile Application">Mobile Application</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Marketplace">Marketplace</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="AI Agent or Chatbot">AI Agent or Chatbot</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Business Management System">Business Management System</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="UI/UX Design">UI/UX Design</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Website Redesign">Website Redesign</button>
              <button type="button" class="option-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Other Digital Solution">Other Digital Solution</button>
            </div>

            <div class="mt-8 flex justify-end">
              <button type="button" id="next-1" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm disabled:opacity-40" disabled>
                Continue →
              </button>
            </div>
          </div>

          <!-- STEP 2: Details -->
          <div id="step-2" class="step-panel">
            <h2 class="text-2xl font-extrabold text-gray-900">Tell us about your project</h2>
            <div class="mt-6 space-y-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Project or business name</label>
                <input id="project-name" type="text" placeholder="e.g. Momo Platform" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Industry or business sector</label>
                <input id="industry" type="text" placeholder="e.g. networking digital business" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Project description</label>
                <textarea id="description" rows="3" placeholder="Describe what you want to build, the problem you want to solve, and what you want your customers to be able to do." class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark resize-none"></textarea>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Target audience</label>
                <input id="audience" type="text" placeholder="e.g. students, small businesses" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Main objective</label>
                <input id="objective" type="text" placeholder="e.g. generate leads, sell products online" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Existing website URL <span class="text-gray-400 font-normal">(optional)</span></label>
                <input id="existing-url" type="url" placeholder="https://" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <p class="text-sm font-medium text-gray-700 mb-2">New project or existing product?</p>
                <div class="flex flex-wrap gap-3">
                  <button type="button" class="option-btn rounded-xl px-5 py-2.5 text-sm status-btn" data-value="A new project">A new project</button>
                  <button type="button" class="option-btn rounded-xl px-5 py-2.5 text-sm status-btn" data-value="An existing product">An existing product</button>
                </div>
              </div>
            </div>

            <div class="mt-8 flex justify-between">
              <button type="button" class="back-btn text-sm font-semibold text-gray-600 border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition">← Back</button>
              <button type="button" id="next-2" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">Continue →</button>
            </div>
          </div>

          <!-- STEP 3: Features -->
          <div id="step-3" class="step-panel">
            <h2 class="text-2xl font-extrabold text-gray-900">Select the features you need</h2>
            <p class="mt-1 text-sm text-gray-500 mb-6">Options change with your project type.</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3" id="features-grid">
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Responsive mobile design">Responsive mobile design</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Contact form">Contact form</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="WhatsApp integration">WhatsApp integration</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Blog or news section">Blog or news section</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Admin dashboard">Admin dashboard</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="User registration and login">User registration and login</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Online payment integration">Online payment integration</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Booking or appointment system">Booking or appointment system</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Product catalogue">Product catalogue</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Search engine optimization">Search engine optimization</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Domain and hosting assistance">Domain and hosting assistance</button>
              <button type="button" class="option-btn feature-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Website maintenance">Website maintenance</button>
            </div>

            <div class="mt-6">
              <label class="block text-sm font-medium text-gray-700 mb-1.5">Custom requirements <span class="text-gray-400 font-normal">(optional)</span></label>
              <textarea id="custom-req" rows="3" placeholder="Any other features or requirements…" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark resize-none"></textarea>
            </div>

            <div class="mt-8 flex justify-between">
              <button type="button" class="back-btn text-sm font-semibold text-gray-600 border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition">← Back</button>
              <button type="button" id="next-3" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">Continue →</button>
            </div>
          </div>

          <!-- STEP 4: Timeline & budget -->
          <div id="step-4" class="step-panel">
            <h2 class="text-2xl font-extrabold text-gray-900">Timeline and budget</h2>

            <div class="mt-6">
              <p class="text-sm font-medium text-gray-700 mb-2">Preferred timeline</p>
              <div class="grid sm:grid-cols-3 gap-3" id="timeline-grid">
                <button type="button" class="option-btn timeline-btn rounded-xl px-4 py-3 text-sm text-left" data-value="As soon as possible">As soon as possible</button>
                <button type="button" class="option-btn timeline-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Within 2–4 weeks">Within 2–4 weeks</button>
                <button type="button" class="option-btn timeline-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Within 1–2 months">Within 1–2 months</button>
                <button type="button" class="option-btn timeline-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Within 3 months">Within 3 months</button>
                <button type="button" class="option-btn timeline-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Flexible">Flexible</button>
              </div>
            </div>

            <div class="mt-6">
              <p class="text-sm font-medium text-gray-700 mb-1">Estimated budget (₦)</p>
              <p class="text-xs text-gray-400 mb-2">Budget categories only, not service prices.</p>
              <div class="grid sm:grid-cols-3 gap-3" id="budget-grid">
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Below ₦100,000">Below ₦100,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="₦100,000–₦300,000">₦100,000–₦300,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="₦300,000–₦700,000">₦300,000–₦700,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="₦700,000–₦1,500,000">₦700,000–₦1,500,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="₦1,500,000–₦3,000,000">₦1,500,000–₦3,000,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Above ₦3,000,000">Above ₦3,000,000</button>
                <button type="button" class="option-btn budget-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Not sure yet">Not sure yet</button>
              </div>
            </div>

            <div class="mt-6">
              <p class="text-sm font-medium text-gray-700 mb-2">What do you need from us?</p>
              <div class="grid sm:grid-cols-3 gap-3" id="help-grid">
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Design only">Design only</button>
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Development only">Development only</button>
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Design and development">Design and development</button>
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Complete solution including deployment">Complete solution including deployment</button>
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Ongoing maintenance and support">Ongoing maintenance and support</button>
                <button type="button" class="option-btn help-btn rounded-xl px-4 py-3 text-sm text-left" data-value="Advice before deciding">Advice before deciding</button>
              </div>
            </div>

            <div class="mt-8 flex justify-between">
              <button type="button" class="back-btn text-sm font-semibold text-gray-600 border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition">← Back</button>
              <button type="button" id="next-4" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">Continue →</button>
            </div>
          </div>

          <!-- STEP 5: Contact -->
          <div id="step-5" class="step-panel">
            <h2 class="text-2xl font-extrabold text-gray-900">Contact details</h2>
            <div class="mt-6 space-y-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Full name</label>
                <input id="contact-name" type="text" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Business email</label>
                <input id="contact-email" type="email" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Phone or WhatsApp number</label>
                <input id="contact-phone" type="tel" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Company name <span class="text-gray-400 font-normal">(optional)</span></label>
                <input id="contact-company" type="text" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark" />
              </div>
              <div>
                <p class="text-sm font-medium text-gray-700 mb-2">Preferred contact method</p>
                <div class="flex flex-wrap gap-3">
                  <button type="button" class="option-btn contact-method-btn rounded-xl px-5 py-2.5 text-sm" data-value="Email">Email</button>
                  <button type="button" class="option-btn contact-method-btn rounded-xl px-5 py-2.5 text-sm" data-value="Phone call">Phone call</button>
                  <button type="button" class="option-btn contact-method-btn rounded-xl px-5 py-2.5 text-sm" data-value="WhatsApp">WhatsApp</button>
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Additional notes <span class="text-gray-400 font-normal">(optional)</span></label>
                <textarea id="contact-notes" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark resize-none"></textarea>
              </div>
              <label class="flex items-start gap-3 cursor-pointer">
                <input id="contact-agree" type="checkbox" class="mt-1 w-4 h-4 rounded text-brand-dark focus:ring-brand-dark" />
                <span class="text-sm text-gray-600">I agree that TechieOnPlatform may contact me about this quotation request.</span>
              </label>
            </div>

            <div class="mt-8 flex justify-between">
              <button type="button" class="back-btn text-sm font-semibold text-gray-600 border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition">← Back</button>
              <button type="button" id="next-5" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">Continue →</button>
            </div>
          </div>

          <!-- STEP 6: Review -->
          <div id="step-6" class="step-panel">
            <h2 class="text-2xl font-extrabold text-gray-900">Review your quotation request</h2>
            <p class="mt-1 text-sm text-gray-500 mb-6">Check everything, or edit any section.</p>

            <!-- Project type card -->
            <div class="rounded-xl border border-gray-200 p-5 mb-4">
              <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">Project type</h3>
                <button type="button" class="edit-btn text-xs font-semibold text-gray-500 border border-gray-200 rounded-full px-3 py-1 hover:bg-gray-50" data-goto="1">Edit</button>
              </div>
              <div class="flex justify-between text-sm">
                <span class="text-gray-500">Type</span>
                <span id="rev-type" class="font-medium text-gray-900">—</span>
              </div>
            </div>

            <!-- Project details card -->
            <div class="rounded-xl border border-gray-200 p-5 mb-4">
              <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">Project details</h3>
                <button type="button" class="edit-btn text-xs font-semibold text-gray-500 border border-gray-200 rounded-full px-3 py-1 hover:bg-gray-50" data-goto="2">Edit</button>
              </div>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between gap-4"><span class="text-gray-500">Project</span><span id="rev-project" class="font-medium text-gray-900 text-right">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Industry</span><span id="rev-industry" class="font-medium text-gray-900 text-right">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Description</span><span id="rev-desc" class="font-medium text-gray-900 text-right max-w-[60%]">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Audience</span><span id="rev-audience" class="font-medium text-gray-900 text-right">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Objective</span><span id="rev-objective" class="font-medium text-gray-900 text-right">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Status</span><span id="rev-status" class="font-medium text-gray-900 text-right">—</span></div>
              </div>
            </div>

            <!-- Features card -->
            <div class="rounded-xl border border-gray-200 p-5 mb-4">
              <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">Features</h3>
                <button type="button" class="edit-btn text-xs font-semibold text-gray-500 border border-gray-200 rounded-full px-3 py-1 hover:bg-gray-50" data-goto="3">Edit</button>
              </div>
              <div class="text-sm">
                <span class="text-gray-500">Selected</span>
                <p id="rev-features" class="font-medium text-gray-900 mt-1 leading-relaxed">—</p>
              </div>
            </div>

            <!-- Timeline/budget card -->
            <div class="rounded-xl border border-gray-200 p-5 mb-4">
              <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">Timeline, budget, package</h3>
                <button type="button" class="edit-btn text-xs font-semibold text-gray-500 border border-gray-200 rounded-full px-3 py-1 hover:bg-gray-50" data-goto="4">Edit</button>
              </div>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between gap-4"><span class="text-gray-500">Timeline</span><span id="rev-timeline" class="font-medium text-gray-900">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Budget</span><span id="rev-budget" class="font-medium text-gray-900">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Help needed</span><span id="rev-help" class="font-medium text-gray-900 text-right">—</span></div>
              </div>
            </div>

            <!-- Contact card -->
            <div class="rounded-xl border border-gray-200 p-5 mb-4">
              <div class="flex items-center justify-between mb-3">
                <h3 class="font-bold text-gray-900">Contact</h3>
                <button type="button" class="edit-btn text-xs font-semibold text-gray-500 border border-gray-200 rounded-full px-3 py-1 hover:bg-gray-50" data-goto="5">Edit</button>
              </div>
              <div class="space-y-2 text-sm">
                <div class="flex justify-between gap-4"><span class="text-gray-500">Name</span><span id="rev-name" class="font-medium text-gray-900">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Email</span><span id="rev-email" class="font-medium text-gray-900">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Phone</span><span id="rev-phone" class="font-medium text-gray-900">—</span></div>
                <div class="flex justify-between gap-4"><span class="text-gray-500">Preferred contact</span><span id="rev-method" class="font-medium text-gray-900">—</span></div>
              </div>
            </div>

            <div class="bg-[#E8F5C8] rounded-xl px-4 py-3 text-sm text-brand-dark mb-6">
              <strong>Custom quotation required.</strong> The final quotation depends on scope, features, integrations, content, hosting and maintenance.
            </div>

            <div class="flex justify-between">
              <button type="button" class="back-btn text-sm font-semibold text-gray-600 border border-gray-200 rounded-full px-5 py-2.5 hover:bg-gray-50 transition">← Back</button>
              <button type="button" id="submit-btn" class="bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">
                Submit quotation request
              </button>
            </div>
          </div>

          <!-- Success -->
          <div id="success-panel" class="hidden text-center py-10">
            <div class="w-16 h-16 mx-auto rounded-full bg-emerald-100 flex items-center justify-center mb-5">
              <svg class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h2 class="text-2xl font-extrabold text-gray-900">Request submitted!</h2>
            <p class="mt-3 text-gray-600 max-w-md mx-auto">Thank you. We’ll review your project details and send a custom quotation shortly.</p>
            <a href="{{ route('index') }}" class="mt-8 inline-flex items-center bg-brand-dark text-white font-semibold px-6 py-2.5 rounded-full hover:bg-brand-green transition text-sm">Back to Home</a>
          </div>
        </div>

        <!-- ===== RIGHT: SIDEBAR ===== -->
        <aside class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 sticky top-24 hidden lg:block">
          <h3 class="font-bold text-gray-900 mb-4">Your project</h3>
          <dl class="space-y-3 text-sm">
            <div class="flex justify-between gap-2">
              <dt class="text-gray-500">Type</dt>
              <dd id="side-type" class="font-medium text-gray-900 text-right">Not set</dd>
            </div>
            <div class="flex justify-between gap-2 border-t border-gray-100 pt-3">
              <dt class="text-gray-500">Project</dt>
              <dd id="side-project" class="font-medium text-gray-900 text-right">Not set</dd>
            </div>
            <div class="flex justify-between gap-2 border-t border-gray-100 pt-3">
              <dt class="text-gray-500">Features</dt>
              <dd id="side-features" class="font-medium text-gray-900 text-right">Not set</dd>
            </div>
            <div class="flex justify-between gap-2 border-t border-gray-100 pt-3">
              <dt class="text-gray-500">Timeline</dt>
              <dd id="side-timeline" class="font-medium text-gray-900 text-right">Not set</dd>
            </div>
            <div class="flex justify-between gap-2 border-t border-gray-100 pt-3">
              <dt class="text-gray-500">Budget</dt>
              <dd id="side-budget" class="font-medium text-gray-900 text-right">Not set</dd>
            </div>
          </dl>
          <div class="mt-5 bg-[#E8F5C8] rounded-xl px-3 py-3 text-xs text-brand-dark">
            <strong>Custom quotation required</strong><br />
            Final pricing depends on your project scope.
          </div>
        </aside>
      </div>
    </div>
  </main>
  @endsection

  @section('javascript')
  <script>
    // --- State ---
    // Necessary for the multi-step quotation wizard and live sidebar
    const state = {
      type: null,
      project: '',
      industry: '',
      description: '',
      audience: '',
      objective: '',
      url: '',
      status: null,
      features: [],
      customReq: '',
      timeline: null,
      budget: null,
      help: null,
      name: '',
      email: '',
      phone: '',
      company: '',
      method: null,
      notes: '',
      agreed: false,
    };

    let currentStep = 1;
    const stepNames = ['Project type', 'Details', 'Features', 'Timeline & budget', 'Contact', 'Review'];

    // --- Helpers ---
    function updateProgress() {
      for (let i = 1; i <= 6; i++) {
        const seg = document.getElementById('seg-' + i);
        seg.classList.remove('done', 'current');
        if (i < currentStep) seg.classList.add('done');
        else if (i === currentStep) seg.classList.add('current');
      }
      document.getElementById('step-num').textContent = currentStep;
      document.getElementById('step-name').textContent = stepNames[currentStep - 1];
    }

    function updateSidebar() {
      document.getElementById('side-type').textContent = state.type || 'Not set';
      document.getElementById('side-project').textContent = state.project || 'Not set';
      document.getElementById('side-features').textContent = state.features.length ? state.features.length + ' selected' : 'Not set';
      document.getElementById('side-timeline').textContent = state.timeline || 'Not set';
      document.getElementById('side-budget').textContent = state.budget || 'Not set';
    }

    function goToStep(step) {
      currentStep = step;
      document.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
      document.getElementById('step-' + step)?.classList.add('active');
      document.getElementById('success-panel')?.classList.add('hidden');
      updateProgress();
      if (step === 6) populateReview();
      window.scrollTo({ top: document.getElementById('quotation-form').offsetTop - 80, behavior: 'smooth' });
    }

    function populateReview() {
      document.getElementById('rev-type').textContent = state.type || '—';
      document.getElementById('rev-project').textContent = state.project || '—';
      document.getElementById('rev-industry').textContent = state.industry || '—';
      document.getElementById('rev-desc').textContent = state.description || '—';
      document.getElementById('rev-audience').textContent = state.audience || '—';
      document.getElementById('rev-objective').textContent = state.objective || '—';
      document.getElementById('rev-status').textContent = state.status || '—';
      document.getElementById('rev-features').textContent = state.features.length ? state.features.join(', ') : '—';
      document.getElementById('rev-timeline').textContent = state.timeline || '—';
      document.getElementById('rev-budget').textContent = state.budget || '—';
      document.getElementById('rev-help').textContent = state.help || '—';
      document.getElementById('rev-name').textContent = state.name || '—';
      document.getElementById('rev-email').textContent = state.email || '—';
      document.getElementById('rev-phone').textContent = state.phone || '—';
      document.getElementById('rev-method').textContent = state.method || '—';
    }

    // --- Single-select option groups ---
    function setupSingleSelect(selector, stateKey, selectedClass) {
      document.querySelectorAll(selector).forEach(btn => {
        btn.addEventListener('click', () => {
          document.querySelectorAll(selector).forEach(b => b.classList.remove(selectedClass || 'selected'));
          btn.classList.add(selectedClass || 'selected');
          state[stateKey] = btn.dataset.value;
          updateSidebar();
          if (stateKey === 'type') {
            document.getElementById('next-1').disabled = false;
          }
        });
      });
    }

    setupSingleSelect('#project-type-grid .option-btn', 'type');
    setupSingleSelect('.status-btn', 'status');
    setupSingleSelect('.timeline-btn', 'timeline');
    setupSingleSelect('.budget-btn', 'budget');
    setupSingleSelect('.help-btn', 'help');
    setupSingleSelect('.contact-method-btn', 'method', 'selected-green');

    // --- Multi-select features ---
    document.querySelectorAll('.feature-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('selected');
        const val = btn.dataset.value;
        if (btn.classList.contains('selected')) {
          if (!state.features.includes(val)) state.features.push(val);
        } else {
          state.features = state.features.filter(f => f !== val);
        }
        updateSidebar();
      });
    });

    // --- Navigation ---
    document.getElementById('next-1')?.addEventListener('click', () => {
      if (!state.type) return alert('Please select a project type.');
      goToStep(2);
    });

    document.getElementById('next-2')?.addEventListener('click', () => {
      state.project = document.getElementById('project-name').value.trim();
      state.industry = document.getElementById('industry').value.trim();
      state.description = document.getElementById('description').value.trim();
      state.audience = document.getElementById('audience').value.trim();
      state.objective = document.getElementById('objective').value.trim();
      state.url = document.getElementById('existing-url').value.trim();
      updateSidebar();
      goToStep(3);
    });

    document.getElementById('next-3')?.addEventListener('click', () => {
      state.customReq = document.getElementById('custom-req').value.trim();
      goToStep(4);
    });

    document.getElementById('next-4')?.addEventListener('click', () => {
      goToStep(5);
    });

    document.getElementById('next-5')?.addEventListener('click', () => {
      state.name = document.getElementById('contact-name').value.trim();
      state.email = document.getElementById('contact-email').value.trim();
      state.phone = document.getElementById('contact-phone').value.trim();
      state.company = document.getElementById('contact-company').value.trim();
      state.notes = document.getElementById('contact-notes').value.trim();
      state.agreed = document.getElementById('contact-agree').checked;
      if (!state.name || !state.email || !state.phone) {
        return alert('Please fill in name, email and phone.');
      }
      if (!state.agreed) {
        return alert('Please agree to be contacted about this quotation.');
      }
      goToStep(6);
    });

    // Back buttons
    document.querySelectorAll('.back-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        if (currentStep > 1) goToStep(currentStep - 1);
      });
    });

    // Edit buttons on review
    document.querySelectorAll('.edit-btn').forEach(btn => {
      btn.addEventListener('click', () => goToStep(parseInt(btn.dataset.goto, 10)));
    });

    // Submit
    document.getElementById('submit-btn')?.addEventListener('click', () => {
      console.log(state);
      submitForm(state);
    });

    async function submitForm(formData){
      const request = await fetch("/api/solution-requests", {
        method: 'POST',
        body: JSON.stringify(formData),
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        }
      })

      const response = await request.json()
      if(response.success == true){
        document.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
        document.getElementById('success-panel').classList.remove('hidden');
        for (let i = 1; i <= 6; i++) document.getElementById('seg-' + i).classList.add('done');
        document.getElementById('step-num').textContent = '6';
        document.getElementById('step-name').textContent = 'Complete';
      }else{
        alert("An error occured. Please try again");
      }
    };

    // Init
    updateProgress();
    updateSidebar();
</script>
  @endsection