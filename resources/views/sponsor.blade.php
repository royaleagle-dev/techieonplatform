@extends('layouts.app')

@section('content')
  <!-- Hero -->
  <section class="bg-brand-dark text-white pt-28 pb-14 md:pt-32 md:pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl">
        <span class="inline-flex items-center gap-1.5 bg-white/15 text-white text-xs font-semibold px-3 py-1 rounded-full mb-5">
          Sponsor tech talents
        </span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">
          Your <span class="text-brand-lime">$1 a day</span> keeps a young African in tech class.
        </h1>
        <p class="mt-5 text-base sm:text-lg text-white/75 max-w-2xl leading-relaxed">
          For the price of a coffee, you can fund a full day of hands-on training for a talented young person who
          can't afford it. Sponsor a day, a week, or a whole month — and help the next generation of African tech
          talent rise.
        </p>
      </div>
    </div>
  </section>

  <!-- Form + impact -->
  <section class="bg-white py-14 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-start">

        <!-- Left: why sponsor -->
        <div>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900">Where your sponsorship goes</h2>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Every contribution is channelled directly into a real learner's journey — not overheads.
          </p>

          <ul class="mt-8 space-y-5">
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-10 h-10 rounded-xl bg-brand-lime/30 text-brand-dark flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
              </span>
              <div>
                <p class="font-semibold text-gray-900">Tuition &amp; mentorship</p>
                <p class="text-sm text-gray-600 mt-1">Funds live classes, course materials and one-on-one mentorship from working professionals.</p>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-10 h-10 rounded-xl bg-brand-lime/30 text-brand-dark flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </span>
              <div>
                <p class="font-semibold text-gray-900">100% to the learner</p>
                <p class="text-sm text-gray-600 mt-1">Your sponsorship goes straight to a talent's training — no middlemen, no hidden cuts.</p>
              </div>
            </li>
            <li class="flex gap-4">
              <span class="flex-shrink-0 w-10 h-10 rounded-xl bg-brand-lime/30 text-brand-dark flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
              </span>
              <div>
                <p class="font-semibold text-gray-900">Transparent tracking</p>
                <p class="text-sm text-gray-600 mt-1">We record the exact days you sponsored and how many talents your support kept learning.</p>
              </div>
            </li>
          </ul>

          <div class="mt-10 grid grid-cols-3 gap-4">
            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-4 text-center">
              <div class="text-2xl font-extrabold text-brand-dark">200+</div>
              <div class="text-xs text-gray-500 mt-1">Talents trained</div>
            </div>
            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-4 text-center">
              <div class="text-2xl font-extrabold text-brand-dark">85%</div>
              <div class="text-xs text-gray-500 mt-1">Graduate employed</div>
            </div>
            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-4 text-center">
              <div class="text-2xl font-extrabold text-brand-dark">$1</div>
              <div class="text-xs text-gray-500 mt-1">Per day, per talent</div>
            </div>
          </div>
        </div>

        <!-- Right: sponsor form -->
        <div class="rounded-3xl border border-gray-100 shadow-sm bg-white p-6 sm:p-8 lg:sticky lg:top-24">
          <div id="sponsor-success" class="hidden text-center py-8">
            <div class="w-16 h-16 mx-auto rounded-full bg-green-100 text-green-600 flex items-center justify-center">
              <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 class="mt-5 text-xl font-bold text-gray-900">Thank you for sponsoring!</h3>
            <p class="mt-2 text-sm text-gray-600">Your support keeps a tech talent learning. A confirmation has been recorded.</p>
            <a href="{{ route('index') }}" class="mt-6 inline-flex items-center bg-brand-dark text-white font-semibold px-5 py-3 rounded-lg hover:bg-brand-green transition">Back to home</a>
          </div>

          <form id="sponsor-form" class="space-y-6">
            <div>
              <h3 class="text-xl font-bold text-gray-900">Sponsor now</h3>
              <p class="text-sm text-gray-500 mt-1">Choose how much training you'd like to fund.</p>
            </div>

            <!-- Unit -->
            <div>
              <label class="block text-sm font-semibold text-gray-900 mb-2">Sponsor by</label>
              <div class="grid grid-cols-3 gap-2" id="sponsor-units">
                <button type="button" data-unit="day" class="unit-btn px-3 py-2.5 rounded-xl border text-sm font-semibold transition">Day</button>
                <button type="button" data-unit="week" class="unit-btn px-3 py-2.5 rounded-xl border text-sm font-semibold transition">Week</button>
                <button type="button" data-unit="month" class="unit-btn px-3 py-2.5 rounded-xl border text-sm font-semibold transition">Month</button>
              </div>
            </div>

            <!-- Quantity -->
            <div>
              <label for="sponsor-quantity" class="block text-sm font-semibold text-gray-900 mb-2">How many?</label>
              <div class="flex items-center gap-3">
                <button type="button" id="qty-minus" class="w-10 h-10 flex-shrink-0 rounded-xl border border-gray-200 text-lg font-semibold text-gray-700 hover:bg-gray-50 transition">−</button>
                <input id="sponsor-quantity" type="number" min="1" max="3650" value="1" inputmode="numeric"
                       class="w-full text-center border border-gray-200 rounded-xl py-2.5 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-brand-dark/30" />
                <button type="button" id="qty-plus" class="w-10 h-10 flex-shrink-0 rounded-xl border border-gray-200 text-lg font-semibold text-gray-700 hover:bg-gray-50 transition">+</button>
              </div>
              <p class="text-xs text-gray-400 mt-2" id="unit-hint">1 day = 1 talent trained for a day</p>
            </div>

            <!-- Summary -->
            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-4 space-y-2">
              <div class="flex items-center justify-between text-sm text-gray-600">
                <span>Duration</span>
                <span class="font-semibold text-gray-900" id="sum-days">1 day</span>
              </div>
              <div class="flex items-center justify-between text-sm text-gray-600">
                <span>Amount</span>
                <span class="font-semibold text-gray-900" id="sum-usd">$1.00</span>
              </div>
              <div class="flex items-center justify-between pt-2 border-t border-gray-200">
                <span class="text-sm text-gray-600">You pay (NGN)</span>
                <span class="text-lg font-extrabold text-brand-dark" id="sum-ngn">₦0</span>
              </div>
              <p class="text-[11px] text-gray-400" id="rate-note">Converted at ₦0 / $1</p>
            </div>

            <!-- Details -->
            <div class="space-y-4">
              <div>
                <label for="sponsor-name" class="block text-sm font-semibold text-gray-900 mb-2">Full name</label>
                <input id="sponsor-name" type="text" required autocomplete="name"
                       class="w-full border border-gray-200 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/30" />
              </div>
              <div>
                <label for="sponsor-email" class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                <input id="sponsor-email" type="email" required autocomplete="email"
                       class="w-full border border-gray-200 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/30" />
              </div>
              <div>
                <label for="sponsor-phone" class="block text-sm font-semibold text-gray-900 mb-2">Phone <span class="text-gray-400 font-normal">(optional)</span></label>
                <input id="sponsor-phone" type="tel" autocomplete="tel"
                       class="w-full border border-gray-200 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/30" />
              </div>
              <div>
                <label for="sponsor-message" class="block text-sm font-semibold text-gray-900 mb-2">Message <span class="text-gray-400 font-normal">(optional)</span></label>
                <textarea id="sponsor-message" rows="2"
                          class="w-full border border-gray-200 rounded-xl px-3 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-dark/30"></textarea>
              </div>
            </div>

            <div id="sponsor-error" class="hidden rounded-xl bg-red-50 border border-red-100 text-red-600 text-sm px-3 py-2.5"></div>

            <button type="submit" id="sponsor-submit"
                    class="w-full inline-flex items-center justify-center gap-2 bg-brand-dark text-white font-semibold px-6 py-3.5 rounded-xl hover:bg-brand-green transition disabled:opacity-60 disabled:cursor-not-allowed whitespace-nowrap">
              <span id="sponsor-btn-label">Sponsor now</span>
            </button>
            <p class="text-center text-xs text-gray-400">Secure payment powered by Paystack. You'll pay in Naira.</p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://js.paystack.co/v2/inline.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ngnFmt = new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN', maximumFractionDigits: 0 });
      const usdFmt = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' });

      const state = {
        dailyRate: 1,
        rate: {{ (float) config('services.sponsorship.usd_to_ngn_fallback', 1600) }},
        unitDays: { day: 1, week: 7, month: 30 },
        unit: 'day',
      };

      const qty = document.getElementById('sponsor-quantity');
      const form = document.getElementById('sponsor-form');
      const submitBtn = document.getElementById('sponsor-submit');
      const btnLabel = document.getElementById('sponsor-btn-label');
      const errorBox = document.getElementById('sponsor-error');
      const sumDays = document.getElementById('sum-days');
      const sumUsd = document.getElementById('sum-usd');
      const sumNgn = document.getElementById('sum-ngn');
      const rateNote = document.getElementById('rate-note');
      const unitHint = document.getElementById('unit-hint');

      function days() {
        return state.unitDays[state.unit] * (parseInt(qty.value, 10) || 0);
      }
      function usdAmount() { return days() * state.dailyRate; }
      function ngnAmount() { return usdAmount() * state.rate; }

      function renderUnits() {
        document.querySelectorAll('.unit-btn').forEach(function (btn) {
          const active = btn.dataset.unit === state.unit;
          btn.className = 'unit-btn px-3 py-2.5 rounded-xl border text-sm font-semibold transition ' +
            (active
              ? 'bg-brand-dark text-white border-brand-dark'
              : 'bg-white text-gray-700 border-gray-200 hover:border-gray-300');
        });
        unitHint.textContent = state.unit === 'day' ? '1 day = 1 talent trained for a day'
          : state.unit === 'week' ? '1 week = 7 sponsored days'
          : '1 month = 30 sponsored days';
      }

      function render() {
        const d = days();
        sumDays.textContent = d + (d === 1 ? ' day' : ' days');
        sumUsd.textContent = usdFmt.format(usdAmount());
        sumNgn.textContent = ngnFmt.format(Math.round(ngnAmount()));
        btnLabel.textContent = 'Sponsor ' + ngnFmt.format(Math.round(ngnAmount()));
        rateNote.textContent = 'Converted at ₦' + Number(state.rate).toLocaleString() + ' / $1';
        submitBtn.disabled = d < 1;
      }

      document.querySelectorAll('.unit-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
          state.unit = btn.dataset.unit;
          renderUnits();
          render();
        });
      });

      document.getElementById('qty-minus').addEventListener('click', function () {
        qty.value = Math.max(1, (parseInt(qty.value, 10) || 1) - 1);
        render();
      });
      document.getElementById('qty-plus').addEventListener('click', function () {
        qty.value = Math.min(3650, (parseInt(qty.value, 10) || 1) + 1);
        render();
      });
      qty.addEventListener('input', render);

      function showError(message) {
        errorBox.textContent = message;
        errorBox.classList.remove('hidden');
      }
      function hideError() { errorBox.classList.add('hidden'); }

      function setLoading(loading) {
        submitBtn.disabled = loading;
        btnLabel.textContent = loading ? 'Please wait…' : 'Sponsor ' + ngnFmt.format(Math.round(ngnAmount()));
      }

      // Load live rate + daily price
      fetch('/api/sponsorships/rate', { headers: { 'Accept': 'application/json' } })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res && res.success && res.data) {
            state.dailyRate = parseFloat(res.data.daily_rate_usd) || 1;
            state.rate = parseFloat(res.data.usd_to_ngn) || state.rate;
            state.unitDays = res.data.unit_days || state.unitDays;
          }
        })
        .catch(function () {})
        .finally(function () { renderUnits(); render(); });

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        hideError();

        const name = document.getElementById('sponsor-name').value.trim();
        const email = document.getElementById('sponsor-email').value.trim();
        const phone = document.getElementById('sponsor-phone').value.trim();
        const message = document.getElementById('sponsor-message').value.trim();

        if (!name || !email) {
          showError('Please enter your name and email.');
          return;
        }

        setLoading(true);

        fetch('/api/sponsorships/initialize', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify({ name: name, email: email, phone: phone, message: message, unit: state.unit, quantity: parseInt(qty.value, 10) || 1 }),
        })
          .then(function (r) { return r.json().then(function (body) { return { ok: r.ok, body: body }; }); })
          .then(function (result) {
            if (!result.ok || !result.body.success) {
              throw new Error(result.body.message || 'Unable to start the payment.');
            }
            const reference = result.body.data.reference;
            const accessCode = result.body.data.access_code;

            const popup = new PaystackPop();
            popup.resumeTransaction(accessCode, {
              onSuccess: function () { verify(reference); },
              onCancel: function () {
                setLoading(false);
                showError('Payment window closed. You were not charged.');
              },
            });
          })
          .catch(function (err) {
            setLoading(false);
            showError(err.message || 'Something went wrong. Please try again.');
          });
      });

      function verify(reference) {
        btnLabel.textContent = 'Confirming…';
        fetch('/api/sponsorships/verify', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify({ reference: reference }),
        })
          .then(function (r) { return r.json().then(function (body) { return { ok: r.ok, body: body }; }); })
          .then(function (result) {
            setLoading(false);
            if (result.ok && result.body.success) {
              form.classList.add('hidden');
              document.getElementById('sponsor-success').classList.remove('hidden');
            } else {
              showError(result.body.message || 'We could not confirm your payment.');
            }
          })
          .catch(function () {
            setLoading(false);
            showError('We could not confirm your payment. Please contact support.');
          });
      }

      renderUnits();
      render();
    });
  </script>
@endsection
