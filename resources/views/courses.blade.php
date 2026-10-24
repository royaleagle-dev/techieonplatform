@extends('layouts.app')

@section('content')

  <section class="bg-brand-dark text-white relative overflow-hidden pt-16 md:pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 md:py-20">
      <div class="grid lg:grid-cols-2 gap-10 items-center">
        <!-- Left content -->
        <div>
          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
            Build the global career<br />you were made for
          </h1>
          <p class="mt-4 text-base sm:text-lg text-white/70 max-w-md">
            We gives you a path to keep growing as work changes around you.
          </p>
        </div>

        
        <div class="relative flex justify-center lg:justify-end gap-4 sm:gap-6">
          <img src="assets/images/courses_hero.png" class="min-w-[400px]">
        </div>
      </div>
    </div>
  </section>

  
  <section class="bg-white border-b border-gray-100 sticky top-16 md:top-20 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch sm:items-center">
        <!-- Search -->
        <div class="relative flex-1 max-w-xl">
          <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
          <input
            id="course-search"
            type="search"
            placeholder="Search"
            class="w-full pl-11 pr-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/20 focus:border-brand-dark transition"
          />
        </div>

        <!-- Filter by -->
        <div class="relative">
          <button
            id="filter-btn"
            class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-gray-200 text-sm font-medium text-gray-700 hover:bg-gray-50 transition whitespace-nowrap"
          >
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
            </svg>
            Filter by
            <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>

          <!-- Filter dropdown -->
          <div id="filter-dropdown" class="filter-dropdown absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50">
            <button class="filter-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50 font-medium text-brand-dark" data-category="all">All Categories</button>
            <button class="filter-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50 text-gray-700" data-category="technology">Technology & Development</button>
            <button class="filter-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50 text-gray-700" data-category="design">Design & Creative Media</button>
            <button class="filter-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50 text-gray-700" data-category="ai">Artificial Intelligence and Management</button>
            <button class="filter-option w-full text-left px-4 py-2 text-sm hover:bg-gray-50 text-gray-700" data-category="data">Data and others</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <main class="bg-gray-50/50 py-10 md:py-7">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

      <!-- Technology & Development -->
      <section class="course-category" data-category="technology">
        <h2 class="text-xl font-bold text-gray-900 mb-5">Technology & Development</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <!-- Front End -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Front End Development" data-desc="Learn HTML, CSS, JavaScript, responsive design, and React to build attractive, interactive websites that work on mobile phones, tablets, and computers.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_1.png" alt="Front End Development" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Front End Development</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn HTML, CSS, JavaScript, responsive design, and React to build attractive, interactive websites that work on mobile phones, tablets, and computers.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Back End -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Back End Development" data-desc="Learn server-side programming, databases, APIs, authentication, and application logic using technologies such as Node.js, Python, and SQL.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_1.png" alt="Back End Development" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Back End Development</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn server-side programming, databases, APIs, authentication, and application logic using technologies such as Node.js, Python, and SQL.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Cybersecurity -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Cybersecurity" data-desc="Understand cyber threats, network security, ethical hacking fundamentals, vulnerability assessment, security monitoring, and incident response in authorised environments.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_1.png" alt="Cybersecurity" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Cybersecurity</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Understand cyber threats, network security, ethical hacking fundamentals, vulnerability assessment, security monitoring, and incident response in authorised environments.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Mobile App -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Mobile App Development" data-desc="Learn to create Android and iOS applications using Flutter, React Native, or native development technologies.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_1.png" alt="Mobile App Development" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Mobile App Development</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn to create Android and iOS applications using Flutter, React Native, or native development technologies.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>
        </div>
      </section>

      <!-- Design & Creative Media -->
      <section class="course-category" data-category="design">
        <h2 class="text-xl font-bold text-gray-900 mb-5">Design & Creative Media</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <!-- Video Editing -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Video Editing & Motion Graphics" data-desc="Learn video cutting, transitions, audio editing, colour correction, subtitles, storytelling, animation, and promotional video production using Premiere Pro, CapCut, or After Effects.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_2.png" alt="Video Editing" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Video Editing & Motion Graphics</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn video cutting, transitions, audio editing, colour correction, subtitles, storytelling, animation, and promotional video production using Premiere Pro, CapCut, or After Effects.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- UI/UX -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="UI/UX Design & Product Design" data-desc="Learn user research, user journeys, wireframing, prototyping, usability testing and interface design with Figma. Develop digital products based on user needs.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_3.png" alt="UI/UX Design" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">UI/UX Design & Product Design</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn user research, user journeys, wireframing, prototyping, usability testing and interface design with Figma. Develop digital products based on user needs.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Graphic Design -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Graphic Design & Branding" data-desc="Master layout, typography, colour theory, branding, logo creation, flyers, posters, and social-media graphics using tools such as Photoshop, Illustrator, and Canva.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_4.png" alt="Graphic Design" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Graphic Design & Branding</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Master layout, typography, colour theory, branding, logo creation, flyers, posters, and social-media graphics using tools such as Photoshop, Illustrator, and Canva.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Social Media Marketing -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Social Media Marketing" data-desc="Cinematography is a valuable skill in the digital age, offering opportunities for storytelling, creativity, and career prospects in various digital platforms and industries.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_5.png" alt="Social Media Marketing" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Social Media Marketing</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Cinematography is a valuable skill in the digital age, offering opportunities for storytelling, creativity, and career prospects in various digital platforms and industries.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>
        </div>
      </section>

      <!-- Artificial Intelligence and Management -->
      <section class="course-category" data-category="ai">
        <h2 class="text-xl font-bold text-gray-900 mb-5">Artificial Intelligence and Management</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <!-- AI Agents -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="AI Agents & Chatbot" data-desc="Build AI-powered chatbots and assistants for customer support, automation, sales, and business operations. Learn prompting, knowledge bases, tool integration, and workflow design.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_2.png" alt="AI Agents" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">AI Agents & Chatbot</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Build AI-powered chatbots and assistants for customer support, automation, sales, and business operations. Learn prompting, knowledge bases, tool integration, and workflow design.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- DevOps -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="DevOps & Cloud Engineering" data-desc="Learn Git, Linux, CI/CD pipelines, Docker, deployment automation, infrastructure management, and application monitoring.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_3.png" alt="DevOps" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">DevOps & Cloud Engineering</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn Git, Linux, CI/CD pipelines, Docker, deployment automation, infrastructure management, and application monitoring.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Product Management -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Product Management" data-desc="Learn product discovery, customer research, product roadmaps, requirements, prioritisation, metrics, and collaboration with design and engineering teams.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_4.png" alt="Product Management" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Product Management</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn product discovery, customer research, product roadmaps, requirements, prioritisation, metrics, and collaboration with design and engineering teams.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Cloud Computing -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Cloud Computing" data-desc="Learn cloud infrastructure, storage, networking, identity management, deployment, and monitoring with AWS, Microsoft Azure, or Google Cloud.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_5.png" alt="Cloud Computing" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Cloud Computing</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn cloud infrastructure, storage, networking, identity management, deployment, and monitoring with AWS, Microsoft Azure, or Google Cloud.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>
        </div>
      </section>

      <!-- Data and others -->
      <section class="course-category" data-category="data">
        <h2 class="text-xl font-bold text-gray-900 mb-5">Data and others</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <!-- Data Analytics -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Data Analytics" data-desc="Learn data cleaning, analysis, visualisation, and reporting using Excel, SQL, Python, and Power BI to support business decisions.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_2.png" alt="Data Analytics" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Data Analytics</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Learn data cleaning, analysis, visualisation, and reporting using Excel, SQL, Python, and Power BI to support business decisions.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Data Science -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Data Science" data-desc="Explore statistics, Python, exploratory data analysis, predictive modelling and machine learning to solve complex problems with data.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_3.png" alt="Data Science" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Data Science</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Explore statistics, Python, exploratory data analysis, predictive modelling and machine learning to solve complex problems with data.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Virtual Assistance -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Virtual Assistance" data-desc="Develop skills in email and calendar management, online research, data entry, document preparation, customer communication and remote-work tools.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_4.png" alt="Virtual Assistance" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Virtual Assistance</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Develop skills in email and calendar management, online research, data entry, document preparation, customer communication and remote-work tools.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>

          <!-- Robotics -->
          <article class="course-card bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition" data-title="Robotics" data-desc="Cinematography is a valuable skill in the digital age, offering opportunities for storytelling, creativity, and career prospects in various digital platforms and industries.">
            <div class="aspect-[4/3] overflow-hidden">
              <img src="assets/images/courses/image_5.png" alt="Robotics" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-medium text-emerald-600">Available Course</span>
                <span class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                  <svg class="w-3.5 h-3.5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </span>
              </div>
              <h3 class="font-bold text-gray-900 text-sm leading-snug">Robotics</h3>
              <p class="mt-1.5 text-xs text-gray-500 leading-relaxed line-clamp-3">
                Cinematography is a valuable skill in the digital age, offering opportunities for storytelling, creativity, and career prospects in various digital platforms and industries.
              </p>
              <a href="#" class="mt-4 inline-flex w-full justify-center items-center text-sm font-semibold text-brand-dark border border-gray-200 rounded-full py-2 hover:bg-gray-50 transition">
                Enroll Now
              </a>
            </div>
          </article>
        </div>
      </section>

    </div>
  </main>

  
  <section class="bg-white py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
        <div>
          <img
              src="assets/images/women_in_tech.png"
              alt="Woman in Tech"
              class="md:w-[400px]"
        />
        </div>
        <div class="flex-1 bg-[#E8F0FE] rounded-2xl p-8 md:p-10">
          <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">Woman in Tech</h2>
          <p class="mt-4 text-gray-700 leading-relaxed max-w-xl">
            At <strong>TOP</strong> trained women have already demonstrated significant economic and social contributions in their workplaces. Through <strong>TOP WiT</strong> and your backing, we can empower additional women to initiate and thrive in their tech careers.
          </p>
          <a href="index.html#scholarship" class="mt-6 inline-flex items-center bg-brand-dark text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-green transition text-sm">
            Apply For Scholarship
          </a>
        </div>
      </div>
    </div>
  </section>
  @endection