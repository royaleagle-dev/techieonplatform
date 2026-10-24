@extends('layouts.app')

@section('content')
<section id="home" class="bg-brand-dark text-white relative overflow-hidden pt-16 md:pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 lg:py-28">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left content -->
        <div class="relative z-10">
          <h1 class="text-4xl sm:text-5xl lg:text-[3.25rem] font-extrabold leading-[1.15] tracking-tight">
            Building Digital<br />
            solutions.<span class="text-brand-lime">Training</span><br />
            <span class="text-brand-lime">Future Workforce.</span>
          </h1>
          <p class="mt-5 text-base sm:text-lg text-white/75 max-w-md leading-relaxed">
            Helping businesses build better digital experiences and helping people gain the practical skills to participate in the future of work.
          </p>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ route('solutions') }}" class="inline-flex items-center bg-brand-lime text-brand-dark font-semibold px-5 py-3 rounded-lg hover:bg-brand-yellow transition">
              Start a project
            </a>
            <a href="{{ route('courses') }}" class="inline-flex items-center border border-white/40 text-white font-semibold px-5 py-3 rounded-lg hover:bg-white/10 transition">
              Explore our courses
            </a>
          </div>
        </div>

        <!-- Right images collage -->
        <div class="relative flex justify-center lg:justify-end">
          <img src="/assets/images/hero_image.png" class="min-w-[400px]">
        </div>
      </div>
    </div>
  </section>

  
  <section id="scholarship" class="bg-white py-10 md:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="rounded-3xl overflow-hidden bg-gradient-to-r from-gray-50 to-brand-purple/30 flex flex-col lg:flex-row shadow-sm border border-gray-100" style="min-height:500px;">
        <!-- Left photo + stats -->
        <div class="relative lg:w-[48%] min-h-[280px]">
          <img
            src="/assets/images/tech_scholar.png"
            alt="Student working on laptop"
            class="absolute inset-0 w-full h-full object-cover"
          />
          <div class="absolute bottom-4 left-4 right-4 flex gap-3 bg-green-800">
            <div class="backdrop-blur rounded-xl px-4 py-3 shadow-md flex-1 text-center">
              <div class="text-xl font-bold text-white">200+</div>
              <div class="text-xs text-white mt-0.5">Learners trained</div>
            </div>
            <div class="backdrop-blur rounded-xl px-4 py-3 shadow-md flex-1 text-center">
              <div class="text-xl font-bold text-white">85%</div>
              <div class="text-xs text-white mt-0.5">Graduate employed</div>
            </div>
            <div class="backdrop-blur rounded-xl px-4 py-3 shadow-md flex-1 text-center">
              <div class="text-xl font-bold text-white">100+</div>
              <div class="text-xs text-white mt-0.5">Hiring partners</div>
            </div>
          </div>
        </div>

        <!-- Right purple card -->
        <div class="lg:w-[52%] bg-[#EDE4F7] p-8 md:p-10 flex flex-col justify-center">
          <span class="inline-flex self-start items-center gap-1.5 bg-emerald-500 text-white text-xs font-semibold px-3 py-1 rounded-full mb-4">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Free Scholarship
          </span>
          <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
            Get Free tech<br />Scholarship today
          </h2>
          <p class="mt-3 text-gray-600 max-w-md">
            Join 20,000+ learners who've launched high-paying tech careers—no experience required.
          </p>
          <a href="{{ route('apply') }}" class="mt-6 inline-flex self-start items-center bg-brand-dark text-white font-semibold px-5 py-3 rounded-lg hover:bg-brand-green transition">
            Apply for Scholarship
          </a>
        </div>
      </div>
    </div>
  </section>

  
<section id="solutions" class="bg-[#C8F060] py-14 md:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-10 items-center">
      <!-- Left content -->
      <div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark leading-tight">
          Ready to build<br />something great?
        </h2>
        <p class="mt-4 text-brand-dark/80 max-w-md">
          Tell us what you want to build and we will help you shape the next step.
        </p>
        <a href="{{ route('solutions') }}" class="mt-8 inline-flex items-center bg-brand-dark text-white font-semibold px-6 py-3 rounded-lg hover:bg-brand-green transition">
          Get Quotation
        </a>
      </div>

      <!-- Right: Horizontal scroll (mobile-friendly) -->
      <div class="relative w-full max-w-full overflow-hidden">
        <div id="services-scroll" class="services-scroll-wrapper overflow-x-auto overflow-y-hidden rounded-2xl">
          <div class="services-scroll-track flex gap-3 sm:gap-4 py-2">
            <!-- 8 original images -->
            <img src="/assets/images/services/service_1.png" alt="Service 1" class="service-img" />
            <img src="/assets/images/services/service_2.png" alt="Service 2" class="service-img" />
            <img src="/assets/images/services/service_3.png" alt="Service 3" class="service-img" />
            <img src="/assets/images/services/service_4.png" alt="Service 4" class="service-img" />
            <img src="/assets/images/services/service_5.png" alt="Service 5" class="service-img" />
            <img src="/assets/images/services/service_6.png" alt="Service 6" class="service-img" />
            <img src="/assets/images/services/service_7.png" alt="Service 7" class="service-img" />
            <img src="/assets/images/services/service_8.png" alt="Service 8" class="service-img" />

            <!-- Duplicate set for seamless loop -->
            <img src="/assets/images/services/service_1.png" alt="Service 1" class="service-img" />
            <img src="/assets/images/services/service_2.png" alt="Service 2" class="service-img" />
            <img src="/assets/images/services/service_3.png" alt="Service 3" class="service-img" />
            <img src="/assets/images/services/service_4.png" alt="Service 4" class="service-img" />
            <img src="/assets/images/services/service_5.png" alt="Service 5" class="service-img" />
            <img src="/assets/images/services/service_6.png" alt="Service 6" class="service-img" />
            <img src="/assets/images/services/service_7.png" alt="Service 7" class="service-img" />
            <img src="/assets/images/services/service_8.png" alt="Service 8" class="service-img" />
          </div>
        </div>

        <!-- Soft edge fades -->
        <div class="pointer-events-none absolute inset-y-0 left-0 w-8 sm:w-12 bg-gradient-to-r from-[#C8F060] to-transparent z-10"></div>
        <div class="pointer-events-none absolute inset-y-0 right-0 w-8 sm:w-12 bg-gradient-to-l from-[#C8F060] to-transparent z-10"></div>
      </div>
    </div>
  </div>
</section>

  
  <section id="courses" class="bg-gray-50 py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-10">
        <div>
          <span class="inline-block bg-brand-dark text-white text-xs font-semibold px-3 py-1 rounded-full mb-3">Trending Programs</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900">Demanded Programs</h2>
        </div>
        <!-- Filters -->
        <div class="flex flex-wrap gap-2">
          <button class="filter-btn active px-4 py-1.5 rounded-full text-sm font-medium bg-brand-dark text-white" data-filter="all">All</button>
          <button class="filter-btn px-4 py-1.5 rounded-full text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:border-gray-300" data-filter="design">Design</button>
          <button class="filter-btn px-4 py-1.5 rounded-full text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:border-gray-300" data-filter="engineering">Engineering</button>
          <button class="filter-btn px-4 py-1.5 rounded-full text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:border-gray-300" data-filter="media">Media</button>
        </div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="programs-grid">
        
        <!-- Card 1: Product Design -->
        <article class="program-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition" data-category="design">
          <div class="aspect-[16/10] overflow-hidden">
            <img src="/assets/images/programs/program_1.png" alt="Product Design" class="w-full h-full object-cover" />
          </div>
          <div class="p-5">
            <span class="text-xs font-medium text-black bg-brand-lime px-6 py-2">Available program</span>
            <h3 class="mt-3 text-lg font-bold text-gray-900">Product Design (UI/UX)</h3>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed">
              The school of Product offers disciplines that cover major aspects of a product lifecycle, from ideation to shipping. Programs: UX Design, UI Design, Product Management and more.
            </p>
            <p class="mt-3 text-xs text-gray-500">12 weeks · Beginner friendly</p>
            <a href="#" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-brand-dark border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-50 transition">
              Apply now
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 2: Software Development -->
        <article class="program-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition" data-category="engineering">
          <div class="aspect-[16/10] overflow-hidden">
            <img src="/assets/images/programs/program_2.png" alt="Software Development" class="w-full h-full object-cover" />
          </div>
          <div class="p-5">
            <span class="text-xs font-medium text-black bg-brand-lime px-6 py-2">Available program</span>
            <h3 class="mt-3 text-lg font-bold text-gray-900">Software Development</h3>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed">
              Attain expertise in web development through learning how to code and create.
            </p>
            <p class="mt-3 text-xs text-gray-500">16 weeks · Beginner friendly</p>
            <a href="#" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-brand-dark border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-50 transition">
              Apply now
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 3: Cinematography -->
        <article class="program-card bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition" data-category="media">
          <div class="aspect-[16/10] overflow-hidden">
            <img src="/assets/images/programs/program_3.png" alt="Cinematography" class="w-full h-full object-cover" />
          </div>
          <div class="p-5">
            <span class="text-xs font-medium text-black bg-brand-lime px-6 py-2">Available program</span>
            <h3 class="mt-3 text-lg font-bold text-gray-900">Cinematography</h3>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed">
              Cinematography is a valuable skill in the digital age, offering opportunities for storytelling, creativity, and career prospects in various digital platforms and industries.
            </p>
            <p class="mt-3 text-xs text-gray-500">12 weeks · Beginner friendly</p>
            <a href="#" class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-brand-dark border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-50 transition">
              Apply now
              <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  
  <section class="bg-white py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl sm:text-4xl font-[600] text-gray-900 leading-tight">
            From application to<br />your first role
          </h2>

          <ol class="mt-10 space-y-6">
            <li class="flex gap-4">
              <div class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-dark text-white text-sm font-bold flex items-center justify-center">01</div>
              <div>
                <h3 class="font-[600] text-gray-900">Apply</h3>
                <p class="text-sm text-gray-600 mt-0.5">Fill the short form. No prior experience is needed.</p>
                <hr style="width:100%;border-bottom: 1px solid rgba(128, 128, 128, 0.494);" class="mt-3">
              </div>
            </li>
            <li class="flex gap-4">
              <div class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-dark text-white text-sm font-bold flex items-center justify-center">02</div>
              <div>
                <h3 class="font-[600] text-gray-900">Get Matched</h3>
                <p class="text-sm text-gray-600 mt-0.5">We confirm your scholarship and place you in a cohort.</p>
                <hr style="width:100%;border-bottom: 1px solid rgba(128, 128, 128, 0.494);" class="mt-3">
              </div>
            </li>
            <li class="flex gap-4">
              <div class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-dark text-white text-sm font-bold flex items-center justify-center">03</div>
              <div>
                <h3 class="font-[600] text-gray-900">Learn by building</h3>
                <p class="text-sm text-gray-600 mt-0.5">Live classes, mentors and real projects every week.</p>
                <hr style="width:100%;border-bottom: 1px solid rgba(128, 128, 128, 0.494);" class="mt-3">
              </div>
            </li>
            <li class="flex gap-4">
              <div class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-dark text-white text-sm font-bold flex items-center justify-center">04</div>
              <div>
                <h3 class="font-[600] text-gray-900">Get Hired</h3>
                <p class="text-sm text-gray-600 mt-0.5">Portfolio reviews and introductions to hiring partners.</p>
                <hr style="width:100%;border-bottom: 1px solid rgba(128, 128, 128, 0.494);" class="mt-3">
              </div>
            </li>
          </ol>
        </div>

        <div class="text-right">
          <div class="text-left bg-brand-dark text-brand-lime font-[500] text-2xl px-5 py-3 rounded-2xl shadow-lg z-10 mb-10 inline-block">
            Free tech<br /><span class="text-white">Scholarship</span>
          </div>
          <div class="rounded-2xl overflow-hidden shadow-xl">
            <img
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&h=500&fit=crop"
              alt="Mentor teaching student"
              class="w-full h-72 sm:h-80 object-cover"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="bg-brand-dark text-white py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10">
        <div>
          <span class="inline-block bg-white/15 text-white text-xs font-semibold px-3 py-1 rounded-full mb-3">Testimonials</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold">Graduates, in their words</h2>
        </div>
        <a href="#scholarship" class="self-start sm:self-auto bg-brand-lime text-brand-dark font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-yellow transition">
          Apply for Scholarship
        </a>
      </div>

      <div class="grid md:grid-cols-3 gap-5">
        <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/10">
          <p class="text-white/90 text-sm leading-relaxed">
            “I started with zero design knowledge. Six months later I was shipping screens for a fintech team.”
          </p>
          <div class="mt-5 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-400 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=faces" alt="Amaka" class="w-full h-full object-cover" />
            </div>
            <div>
              <div class="font-semibold text-sm">Amaka O.</div>
              <div class="text-xs text-white/60">UI/UX Designer</div>
            </div>
          </div>
        </div>

        <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/10">
          <p class="text-white/90 text-sm leading-relaxed">
            “The weekly projects made the difference. My portfolio did the talking in interviews.”
          </p>
          <div class="mt-5 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-400 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop&crop=faces" alt="Tunde" class="w-full h-full object-cover" />
            </div>
            <div>
              <div class="font-semibold text-sm">Tunde A.</div>
              <div class="text-xs text-white/60">Frontend Developer</div>
            </div>
          </div>
        </div>

        <div class="bg-white/10 backdrop-blur rounded-2xl p-6 border border-white/10">
          <p class="text-white/90 text-sm leading-relaxed">
            “I now shoot and edit commercial work for brands I used to only follow online.”
          </p>
          <div class="mt-5 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-gray-400 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=faces" alt="Zainab" class="w-full h-full object-cover" />
            </div>
            <div>
              <div class="font-semibold text-sm">Zainab K.</div>
              <div class="text-xs text-white/60">Cinematographer</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="bg-white py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="rounded-3xl overflow-hidden bg-sponsor-purple text-white flex flex-col lg:flex-row">
        <!-- Left content -->
        <div class="lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
          <span class="inline-flex self-start items-center gap-1.5 bg-white/15 text-white text-xs font-semibold px-3 py-1 rounded-full mb-5">
            Sponsor tech talents
          </span>
          <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight">
            Sponsor talents<br />for $1/Day
          </h2>
          <p class="mt-4 text-white/75 max-w-md text-sm leading-relaxed">
            We're committed to help young less privilege across the globe including African countries or especially Africans. Let's put more appealing content that will arrest the interest of those that want to contribute.
          </p>
          <a href="#" class="mt-8 inline-flex self-start items-center gap-2 bg-white text-sponsor-purple font-semibold px-6 py-3 rounded-full hover:bg-gray-100 transition">
            Sponsor Now
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
          </a>
        </div>

        <!-- Right imagee -->
        <div class="lg:w-1/2 relative p-6 md:p-8 flex items-center justify-center gap-4 min-h-[280px] bg-gray-200">
          <img src="/assets/images/sponsorship.png" style="width:100%;height:auto;">
        </div>
      </div>
    </div>
  </section>
@endsection