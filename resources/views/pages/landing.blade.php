@extends('layouts.app')
@section('title', 'Apex Hire — The Curated Talent Network')
@section('content')

{{-- ── HERO ── --}}
<section class="bg-[#100B00] min-h-screen flex items-center pt-20 pb-24">
<div class="max-w-7xl mx-auto px-6 w-full">
  <div class="reveal reveal-up mb-8" data-delay="0">
    <span class="inline-flex items-center gap-2 rounded-full border border-[#EFFFC8]/20 px-4 py-1.5 text-sm text-[#EFFFC8]/80">
      <span class="w-2 h-2 rounded-full bg-[#85CB33] dot-pulse"></span>Pre-launch — Limited access
    </span>
  </div>
  <h1 class="reveal reveal-up font-display font-bold text-5xl md:text-7xl text-[#EFFFC8] leading-[1.05] tracking-tight max-w-4xl mb-6" data-delay="0">The best talent isn't on Fiverr.</h1>
  <p class="reveal reveal-up text-lg md:text-xl text-[#EFFFC8]/70 max-w-2xl mb-10 leading-relaxed" data-delay="150">Founders waste thousands on rushed, low‑quality work. Skilled professionals have left those platforms. Apex Hire is the curated, invite‑only network that fixes this — connecting vetted operators with startups through trust, not bids.</p>
  <div class="reveal reveal-up" data-delay="300">
    <button onclick="document.getElementById('waitlist').scrollIntoView({behavior:'smooth'})" class="bg-[#85CB33] text-[#100B00] font-semibold rounded-full px-8 py-4 hover:bg-[#9AE65D] hover:scale-105 transition-all duration-300 text-sm">Join the waitlist</button>
  </div>
</div>
</section>

{{-- ── THE PROBLEM ── --}}
<section id="problem" class="bg-[#100B00] py-24 md:py-32 border-t border-[#EFFFC8]/10">
<div class="max-w-7xl mx-auto px-6">
  <p class="reveal reveal-up text-xs font-semibold tracking-[0.25em] uppercase text-[#85CB33] mb-5" data-delay="0">The Problem</p>
  <h2 class="reveal reveal-up font-display font-bold text-3xl md:text-5xl text-[#EFFFC8] max-w-3xl leading-tight tracking-tight mb-4" data-delay="0">Founders and skilled professionals have lost trust in traditional freelancer platforms.</h2>
  <p class="reveal reveal-up text-[#EFFFC8]/60 text-lg mb-16 max-w-xl" data-delay="150">Real voices — here's what they say.</p>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
    @php
    $quotes = [
      ['i'=>'N','n'=>'NotWolf','r'=>'Founder','q'=>"Fiverr and Upwork are actually slop. I've spent thousands and every time I tell myself I'm not gonna do it again. Out of 50 hires, maybe 3 were good.",'d'=>'0','dir'=>'left'],
      ['i'=>'A','n'=>'Aaron','r'=>'Brand Designer','q'=>"The money in Fiverr is in quantity, so they rush your job and treat you like a number. Search 'logo designer' and you'll see garbage with hundreds of 5 stars.",'d'=>'150','dir'=>'right'],
      ['i'=>'O','n'=>'Omaa','r'=>'Startup Founder','q'=>"It's nearly impossible to find someone who understands the vision. Most freelancers just crank out work as fast as possible and disappear.",'d'=>'150','dir'=>'left'],
      ['i'=>'V','n'=>'Vanya','r'=>'HR / Talent Consultant','q'=>"If I needed to hire a professional with real senior-level skills, I wouldn't go near Fiverr or Upwork. Skilled people avoid them.",'d'=>'300','dir'=>'right'],
      ['i'=>'Z','n'=>'Zyther','r'=>'Growth Marketer','q'=>"We've completely stopped relying on freelance marketplaces. Now we ask around in Discord and Reddit — at least there you get real people vouching.",'d'=>'300','dir'=>'left'],
      ['i'=>'Z','n'=>'Zemp','r'=>'Indie Hacker','q'=>"For any serious service now, I rely on Discord and Reddit. Traditional platforms just don't filter for the quality a startup needs.",'d'=>'450','dir'=>'right'],
    ];
    @endphp
    @foreach($quotes as $q)
    <div class="reveal reveal-up md:reveal-{{ $q['dir'] }} rounded-2xl bg-[#100B00] border border-[#EFFFC8]/15 p-6 md:p-8 transition duration-300 hover:border-[#85CB33]/30" data-delay="{{ $q['d'] }}">
      <svg class="w-6 h-6 text-[#85CB33] mb-4 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
      <p class="italic text-lg text-[#EFFFC8]/80 leading-relaxed mb-5">"{{ $q['q'] }}"</p>
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-[#85CB33]/10 border border-[#85CB33]/20 flex items-center justify-center text-[#85CB33] font-bold text-sm font-display">{{ $q['i'] }}</div>
        <div><div class="text-[#EFFFC8] font-semibold text-sm">{{ $q['n'] }}</div><div class="text-[#EFFFC8]/40 text-xs">{{ $q['r'] }}</div></div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</section>

{{-- ── THE SOLUTION ── --}}
<section id="solution" class="bg-[#100B00] py-24 md:py-32 border-t border-[#EFFFC8]/10">
<div class="max-w-7xl mx-auto px-6 text-center">
  <p class="reveal reveal-up text-xs font-semibold tracking-[0.25em] uppercase text-[#85CB33] mb-5" data-delay="0">The Solution</p>
  <h2 class="reveal reveal-up font-display font-bold text-3xl md:text-5xl text-[#EFFFC8] leading-tight tracking-tight max-w-3xl mx-auto mb-6" data-delay="0">A curated, invite‑only network of vetted startup operators.</h2>
  <p class="reveal reveal-up text-[#EFFFC8]/70 text-lg max-w-2xl mx-auto mb-12 leading-relaxed" data-delay="150">Every professional in Apex Hire is hand‑picked through case studies, portfolios, and founder references. No bidding wars, no fake profiles. We personally match you with the right person — so you stop burning runway and start building.</p>
  <div class="reveal reveal-up flex flex-col sm:flex-row justify-center gap-6 text-left max-w-2xl mx-auto" data-delay="300">
    <div class="flex items-start gap-3"><span class="text-[#85CB33] text-xl mt-0.5">✓</span><span class="text-[#EFFFC8]/90 text-base">Personally vetted professionals</span></div>
    <div class="flex items-start gap-3"><span class="text-[#85CB33] text-xl mt-0.5">✓</span><span class="text-[#EFFFC8]/90 text-base">Real proof of work, not platform ratings</span></div>
    <div class="flex items-start gap-3"><span class="text-[#85CB33] text-xl mt-0.5">✓</span><span class="text-[#EFFFC8]/90 text-base">Warm, manual intros — no algorithm lottery</span></div>
  </div>
</div>
</section>

{{-- ── BENEFITS ── --}}
<section id="benefits" class="bg-[#100B00] py-24 md:py-32 border-t border-[#EFFFC8]/10">
<div class="max-w-7xl mx-auto px-6">
  <p class="reveal reveal-up text-xs font-semibold tracking-[0.25em] uppercase text-[#85CB33] mb-5" data-delay="0">Why Apex Hire</p>
  <h2 class="reveal reveal-up font-display font-bold text-3xl md:text-5xl text-[#EFFFC8] leading-tight tracking-tight max-w-2xl mb-14" data-delay="0">Designed to end the guessing game.</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @php
    $benefits = [
      ['t'=>'Curated Network','d'=>'Every professional is personally vetted. Only the top operators get in.','icon'=>'👥','delay'=>'0'],
      ['t'=>'Proof of Work','d'=>'Portfolios, case studies, and founder references — not fake Fiverr reviews.','icon'=>'📂','delay'=>'150'],
      ['t'=>'Manual Matching','d'=>'We personally connect you with the right person. No algorithmic lottery.','icon'=>'🤝','delay'=>'300'],
      ['t'=>'All Startup Roles','d'=>'Design, dev, marketing, ops — every function a startup needs.','icon'=>'⚡','delay'=>'0'],
      ['t'=>'Real Accountability','d'=>'Professionals are trusted by other founders. Reputation that matters.','icon'=>'🛡️','delay'=>'150'],
      ['t'=>'No Bidding Wars','d'=>'Fixed scope, fair rates. No race‑to‑the‑bottom pricing.','icon'=>'💰','delay'=>'300'],
      ['t'=>'Runway Protection','d'=>'Stop wasting budget on amateur work. Get execution from day one.','icon'=>'🚀','delay'=>'0'],
      ['t'=>'Invite‑Only','d'=>'Quality over quantity. An exclusive network, not another crowded marketplace.','icon'=>'🔒','delay'=>'150'],
    ];
    @endphp
    @foreach($benefits as $b)
    <div class="reveal reveal-up rounded-2xl bg-[#100B00] border border-[#EFFFC8]/15 p-6 md:p-8 transition duration-300 hover:border-[#85CB33]/30" data-delay="{{ $b['delay'] }}">
      <div class="text-2xl mb-4">{{ $b['icon'] }}</div>
      <h3 class="font-display font-bold text-[#EFFFC8] text-lg mb-2">{{ $b['t'] }}</h3>
      <p class="text-[#EFFFC8]/60 text-sm leading-relaxed">{{ $b['d'] }}</p>
    </div>
    @endforeach
  </div>
</div>
</section>

{{-- ── WAITLIST ── --}}
<section id="waitlist" class="bg-[#100B00] py-24 md:py-32 border-t border-[#85CB33]">
<div class="max-w-md mx-auto px-6 text-center">
  <h2 class="reveal reveal-up font-display font-bold text-3xl md:text-4xl text-[#EFFFC8] leading-tight tracking-tight mb-4" data-delay="0">We're opening the network soon.</h2>
  <p class="reveal reveal-up text-[#EFFFC8]/60 text-base mb-10" data-delay="150">Join the waitlist. Tell us who you are — we'll handle the rest.</p>

  <div class="reveal reveal-up rounded-2xl bg-[#100B00] border border-[#EFFFC8]/20 p-8 text-left" data-delay="300">
    <form id="waitlist-form" action="{{ route('waitlist.store') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label class="block text-xs font-semibold text-[#EFFFC8]/50 mb-1.5 tracking-wide uppercase">Email *</label>
        <input type="email" name="email" required placeholder="you@company.com" class="field-input"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-[#EFFFC8]/50 mb-2.5 tracking-wide uppercase">I am a…</label>
        <select name="type" required class="field-input">
          <option value="professional" style="color: #100B00;">Skilled Professional</option>
          <option value="founder" style="color: #100B00;">Founder & Startup Owner</option>
          <option value="hr" style="color: #100B00;">HR Manager</option>
        </select>
      </div>
      <button type="submit" class="w-full bg-[#85CB33] text-[#100B00] font-semibold rounded-full px-8 py-4 hover:bg-[#9AE65D] hover:scale-105 transition-all duration-300 text-sm mt-2">Join the waitlist</button>
    </form>

    <div id="waitlist-success" class="hidden text-center py-6">
      <div class="w-12 h-12 rounded-full bg-[#85CB33]/10 border border-[#85CB33]/30 flex items-center justify-center mx-auto mb-4">
        <svg class="w-6 h-6 text-[#85CB33]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
      </div>
      <p class="font-display font-bold text-[#EFFFC8] text-lg mb-1">You're on the list!</p>
      <p class="text-[#EFFFC8]/50 text-sm">We'll reach out personally.</p>
    </div>
  </div>

  <p class="reveal reveal-up text-[#EFFFC8]/30 text-sm mt-6" data-delay="450">No spam. We'll never share your email.</p>
</div>
</section>

<script>
function selectRole(el) {
  document.querySelectorAll('.role-btn').forEach(btn => {
    btn.classList.remove('bg-[#85CB33]', 'text-[#100B00]', 'border-[#85CB33]', 'font-semibold');
    btn.classList.add('border-[#EFFFC8]/20', 'text-[#EFFFC8]/70');
  });
  el.classList.remove('border-[#EFFFC8]/20', 'text-[#EFFFC8]/70');
  el.classList.add('bg-[#85CB33]', 'text-[#100B00]', 'border-[#85CB33]', 'font-semibold');
}

function handleWaitlist(e) {
  e.preventDefault();
  document.getElementById('waitlist-form').classList.add('hidden');
  document.getElementById('waitlist-success').classList.remove('hidden');
}
</script>
@endsection