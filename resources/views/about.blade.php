@extends('layouts.app')

@section('content')
<!-- ========== HERO ========== -->
  <section class="bg-brand-dark text-white relative overflow-hidden pt-16 md:pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
      <div class="max-w-3xl">
        <p class="text-brand-lime text-sm font-semibold tracking-wide uppercase mb-4">About TechieOnPlatform</p>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
          Building Digital Solutions.<br />
          <span class="text-brand-lime">Building the Future Workforce.</span>
        </h1>
        <p class="mt-6 text-base sm:text-lg text-white/75 leading-relaxed max-w-2xl">
          TechieOnPlatform is a technology and digital skills platform committed to empowering individuals, businesses, and organizations through innovative digital solutions and practical technology training.
        </p>
      </div>
    </div>
  </section>

  <!-- ========== BRIDGE SECTION ========== -->
  <section class="bg-white py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 leading-tight">
            Bridging skills and real-world opportunity
          </h2>
          <p class="mt-5 text-gray-600 leading-relaxed">
            We equip individuals with industry-relevant knowledge while helping businesses leverage technology to grow, innovate, and compete in the digital economy.
          </p>
          <p class="mt-4 text-gray-600 leading-relaxed">
            From website and mobile application development to AI-powered solutions, digital skills training, and scholarship programmes, we create opportunities that drive sustainable growth and digital transformation.
          </p>
        </div>
        <div class="relative">
          <div class="rounded-2xl overflow-hidden shadow-xl">
            <img
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&h=500&fit=crop"
              alt="Team collaborating"
              class="w-full h-72 sm:h-80 object-cover"
            />
          </div>
          <div class="absolute -bottom-4 -left-4 bg-brand-lime text-brand-dark font-bold text-sm px-4 py-2 rounded-xl shadow-lg">
            500M+ lives to empower
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== MISSION + VISION ========== -->
  <section class="bg-brand-dark text-white py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-10 md:gap-16">
        <div>
          <span class="inline-block text-brand-lime text-xs font-semibold tracking-wider uppercase mb-3">Mission</span>
          <h2 class="text-2xl font-bold leading-snug">
            Empower 500 million individuals and businesses
          </h2>
          <p class="mt-4 text-white/70 leading-relaxed">
            with the digital skills, innovative solutions, and opportunities needed to thrive in the digital age.
          </p>
        </div>
        <div>
          <span class="inline-block text-brand-lime text-xs font-semibold tracking-wider uppercase mb-3">Vision</span>
          <h2 class="text-2xl font-bold leading-snug">
            A leading platform for digital innovation
          </h2>
          <p class="mt-4 text-white/70 leading-relaxed">
            talent development, and technology-driven business growth — creating a future where everyone can access the skills and solutions needed to succeed.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CORE VALUES ========== -->
  <section class="bg-gray-50 py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">Our Core Values</h2>
        <p class="mt-3 text-gray-500 max-w-lg mx-auto">The principles that guide every programme, partnership, and product we build.</p>
      </div>

      <div class="space-y-4">
        <div class="bg-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-start gap-4 sm:gap-8 border border-gray-100">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-dark text-brand-lime font-bold flex items-center justify-center text-lg">A</div>
          <div>
            <h3 class="font-bold text-gray-900 text-lg">Accessibility</h3>
            <p class="mt-1 text-gray-600 leading-relaxed">Making digital education and technology opportunities accessible to more people through training and scholarship programmes.</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-start gap-4 sm:gap-8 border border-gray-100">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-dark text-brand-lime font-bold flex items-center justify-center text-lg">I</div>
          <div>
            <h3 class="font-bold text-gray-900 text-lg">Innovation</h3>
            <p class="mt-1 text-gray-600 leading-relaxed">Building creative, practical, and technology-driven solutions that solve real-world problems.</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-start gap-4 sm:gap-8 border border-gray-100">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-dark text-brand-lime font-bold flex items-center justify-center text-lg">E</div>
          <div>
            <h3 class="font-bold text-gray-900 text-lg">Excellence</h3>
            <p class="mt-1 text-gray-600 leading-relaxed">Delivering quality training and digital solutions that meet professional standards.</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-start gap-4 sm:gap-8 border border-gray-100">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-dark text-brand-lime font-bold flex items-center justify-center text-lg">C</div>
          <div>
            <h3 class="font-bold text-gray-900 text-lg">Collaboration</h3>
            <p class="mt-1 text-gray-600 leading-relaxed">Partnering with businesses, educational institutions, and organizations to expand opportunities and create meaningful impact.</p>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-start gap-4 sm:gap-8 border border-gray-100">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-brand-dark text-brand-lime font-bold flex items-center justify-center text-lg">E</div>
          <div>
            <h3 class="font-bold text-gray-900 text-lg">Empowerment</h3>
            <p class="mt-1 text-gray-600 leading-relaxed">Equipping individuals with valuable digital skills and connecting talent with opportunities for career and business growth.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHAT WE DO ========== -->
  <section class="bg-white py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">What We Do</h2>
        <p class="mt-3 text-gray-500 max-w-lg mx-auto">Five pillars that power everything at TechieOnPlatform.</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="relative bg-brand-dark text-white rounded-2xl p-7 overflow-hidden">
          <span class="text-5xl font-extrabold text-white/10 absolute top-4 right-5">01</span>
          <h3 class="relative font-bold text-lg">Digital Solutions</h3>
          <p class="relative mt-3 text-sm text-white/70 leading-relaxed">
            Website development, mobile applications, AI agents, chatbots, and business automation.
          </p>
        </div>

        <div class="relative bg-brand-dark text-white rounded-2xl p-7 overflow-hidden">
          <span class="text-5xl font-extrabold text-white/10 absolute top-4 right-5">02</span>
          <h3 class="relative font-bold text-lg">Technology Training</h3>
          <p class="relative mt-3 text-sm text-white/70 leading-relaxed">
            Practical programmes in software development, product design, cybersecurity, data analytics, and more.
          </p>
        </div>

        <div class="relative bg-brand-dark text-white rounded-2xl p-7 overflow-hidden">
          <span class="text-5xl font-extrabold text-white/10 absolute top-4 right-5">03</span>
          <h3 class="relative font-bold text-lg">Scholarship Programmes</h3>
          <p class="relative mt-3 text-sm text-white/70 leading-relaxed">
            Collaborating with organizations and partners to expand access to digital skills education.
          </p>
        </div>

        <div class="relative bg-brand-dark text-white rounded-2xl p-7 overflow-hidden">
          <span class="text-5xl font-extrabold text-white/10 absolute top-4 right-5">04</span>
          <h3 class="relative font-bold text-lg">Talent Development</h3>
          <p class="relative mt-3 text-sm text-white/70 leading-relaxed">
            Preparing individuals for employment, freelancing, entrepreneurship, and the evolving digital workplace.
          </p>
        </div>

        <div class="relative bg-brand-lime text-brand-dark rounded-2xl p-7 overflow-hidden sm:col-span-2 lg:col-span-1">
          <span class="text-5xl font-extrabold text-brand-dark/10 absolute top-4 right-5">05</span>
          <h3 class="relative font-bold text-lg">Corporate Training</h3>
          <p class="relative mt-3 text-sm text-brand-dark/80 leading-relaxed">
            Helping businesses and institutions build digital capacity through customized training and technology solutions.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COMMITMENT BANNER ========== -->
  <section class="bg-[#C8F060] py-14 md:py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-dark leading-tight">
        Our Commitment
      </h2>
      <p class="mt-5 text-brand-dark/80 leading-relaxed">
        We believe technology creates greater impact when people have the skills to use it. We are committed to developing digital talent, delivering effective technology solutions, and building partnerships that create lasting value for individuals, businesses, and communities.
      </p>
      <p class="mt-6 font-semibold text-brand-dark">
        TechieOnPlatform — Building Digital Solutions. Building the Future Workforce.
      </p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <a href="courses.html" class="inline-flex items-center bg-brand-dark text-white font-semibold px-6 py-3 rounded-lg hover:bg-brand-green transition text-sm">
          Explore Courses
        </a>
        <a href="index.html#scholarship" class="inline-flex items-center border-2 border-brand-dark text-brand-dark font-semibold px-6 py-3 rounded-lg hover:bg-brand-dark hover:text-white transition text-sm">
          Apply For Scholarship
        </a>
      </div>
    </div>
  </section>
  @endsection