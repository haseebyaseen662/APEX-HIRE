@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <!-- Header Section -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div class="space-y-3">
          <div class="flex items-center gap-3">
            <button class="hover:bg-slate-100 p-2 rounded-full transition-colors">
              <i class="bx bx-arrow-back text-[#b62dd6]"></i>
            </button>
            <span
              class="bg-purple-50 text-[#b62dd6] px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase"
            >
              Active Position
            </span>
          </div>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900">
            Senior Product Designer
          </h2>
          <div class="flex flex-wrap gap-4 text-slate-500 font-medium">
            <span class="flex items-center gap-2"><i class="bx bx-map"></i> San Francisco, CA (Hybrid)</span>
            <span class="flex items-center gap-2"><i class="bx bx-dollar"></i> $140k – $180k</span>
            <span class="flex items-center gap-2"><i class="bx bx-time"></i> Full-time</span>
          </div>
        </div>
        <div class="flex flex-wrap gap-3">
          <button
            class="px-8 py-3 rounded-full border border-slate-200 font-bold hover:bg-slate-50 transition-colors"
          >
            Close Job
          </button>
          <button
            class="px-8 py-3 rounded-full bg-[#b62dd6] text-white font-bold flex items-center gap-2 shadow-lg shadow-purple-200 transition-transform active:scale-95"
          >
            <i class="bx bx-edit text-lg"></i>
            Edit Job
          </button>
        </div>
      </div>

      <!-- Layout -->
      <div class="grid grid-cols-12 gap-8">
        <!-- Main Content Area -->
        <div class="col-span-12 lg:col-span-8 space-y-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white p-6 rounded-[24px] shadow-[0_10px_24px_rgba(15,23,42,0.06)]">
              <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Pending</p>
              <p class="text-3xl font-extrabold text-slate-900">24</p>
              <div class="w-full bg-slate-100 h-1.5 mt-4 rounded-full overflow-hidden">
                <div class="bg-slate-400 h-full w-1/3"></div>
              </div>
            </div>
            <div class="bg-white p-6 rounded-[24px] shadow-[0_10px_24px_rgba(15,23,42,0.06)]">
              <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Shortlisted</p>
              <p class="text-3xl font-extrabold text-[#7b5df7]">12</p>
              <div class="w-full bg-purple-50 h-1.5 mt-4 rounded-full overflow-hidden">
                <div class="bg-[#7b5df7] h-full w-1/2"></div>
              </div>
            </div>
            <div class="bg-white p-6 rounded-[24px] shadow-[0_10px_24px_rgba(15,23,42,0.06)]">
              <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Rejected</p>
              <p class="text-3xl font-extrabold text-red-500">08</p>
              <div class="w-full bg-red-50 h-1.5 mt-4 rounded-full overflow-hidden">
                <div class="bg-red-400 h-full w-1/4"></div>
              </div>
            </div>
            <div class="bg-white p-6 rounded-[24px] shadow-[0_10px_24px_rgba(15,23,42,0.06)]">
              <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Hired</p>
              <p class="text-3xl font-extrabold text-[#b62dd6]">01</p>
              <div class="w-full bg-purple-50 h-1.5 mt-4 rounded-full overflow-hidden">
                <div class="bg-[#b62dd6] h-full w-full"></div>
              </div>
            </div>
          </div>

          <div class="bg-white p-8 lg:p-10 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)] space-y-10">
            <section>
              <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span class="w-8 h-1 bg-[#b62dd6] rounded-full"></span>
                Role Overview
              </h3>
              <p class="text-slate-600 leading-relaxed">
                We are looking for a Senior Product Designer to join our core product team. You will be
                responsible for defining the user experience for our recruitment ecosystem, ensuring that
                every touchpoint for both hiring managers and candidates is intuitive, beautiful, and
                efficient. You’ll work closely with engineers and product managers to bring complex features
                from concept to reality.
              </p>
            </section>
            <section>
              <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span class="w-8 h-1 bg-[#b62dd6] rounded-full"></span>
                Key Responsibilities
              </h3>
              <ul class="space-y-4 text-slate-600">
                <li class="flex items-start gap-3">
                  <i class="bx bx-check-circle text-[#b62dd6] mt-1"></i>
                  <span>Lead the end-to-end design process for our core employer dashboard.</span>
                </li>
                <li class="flex items-start gap-3">
                  <i class="bx bx-check-circle text-[#b62dd6] mt-1"></i>
                  <span>Collaborate with the design systems team to evolve our visual language.</span>
                </li>
                <li class="flex items-start gap-3">
                  <i class="bx bx-check-circle text-[#b62dd6] mt-1"></i>
                  <span>Conduct user research and usability testing to validate design decisions.</span>
                </li>
                <li class="flex items-start gap-3">
                  <i class="bx bx-check-circle text-[#b62dd6] mt-1"></i>
                  <span>Mentor junior designers and contribute to a culture of design excellence.</span>
                </li>
              </ul>
            </section>
            <section>
              <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                <span class="w-8 h-1 bg-[#b62dd6] rounded-full"></span>
                Required Experience
              </h3>
              <div class="bg-[#f7f8fd] p-6 rounded-2xl border-l-4 border-[#b62dd6]">
                <p class="text-slate-900 font-bold text-lg mb-2">5+ Years in SaaS Design</p>
                <p class="text-slate-600">
                  Candidates must demonstrate a strong portfolio of shipped products, specifically in complex
                  data-heavy environments. Experience with Figma, design systems, and basic prototyping is
                  mandatory.
                </p>
              </div>
            </section>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-span-12 lg:col-span-4 space-y-8">
          <div class="bg-white p-8 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <h4 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-6">Hiring Team</h4>
            <div class="space-y-6">
              <div class="flex items-center gap-4">
                <img
                  alt="Sarah Chen"
                  class="w-12 h-12 rounded-full border-2 border-primary/20"
                  src="assets/images/avatar-sarah.svg"
                />
                <div>
                  <p class="font-bold">Sarah Chen</p>
                  <p class="text-xs text-slate-400">Head of Product</p>
                </div>
                <i class="bx bx-message text-[#b62dd6] ml-auto"></i>
              </div>
              <div class="flex items-center gap-4">
                <img
                  alt="Marcus Johnson"
                  class="w-12 h-12 rounded-full border-2 border-primary/20"
                  src="assets/images/avatar-marcus.svg"
                />
                <div>
                  <p class="font-bold">Marcus Johnson</p>
                  <p class="text-xs text-slate-400">Lead Recruiter</p>
                </div>
                <i class="bx bx-message text-[#b62dd6] ml-auto"></i>
              </div>
            </div>
          </div>

          <div class="bg-white p-8 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <h4 class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-6">Recent Activity</h4>
            <div class="space-y-6 relative">
              <div class="absolute left-[11px] top-2 bottom-2 w-0.5 bg-slate-200"></div>
              <div class="relative pl-8">
                <div class="absolute left-0 top-1 w-6 h-6 bg-[#b62dd6] rounded-full border-4 border-white"></div>
                <p class="text-xs font-bold text-slate-900">New Applicant</p>
                <p class="text-xs text-slate-400">Dianne Russell applied 2 hours ago</p>
              </div>
              <div class="relative pl-8">
                <div class="absolute left-0 top-1 w-6 h-6 bg-[#7b5df7] rounded-full border-4 border-white"></div>
                <p class="text-xs font-bold text-slate-900">Candidate Shortlisted</p>
                <p class="text-xs text-slate-400">Guy Hawkins moved to Shortlisted</p>
              </div>
              <div class="relative pl-8">
                <div class="absolute left-0 top-1 w-6 h-6 bg-slate-400 rounded-full border-4 border-white"></div>
                <p class="text-xs font-bold text-slate-900">Job Edited</p>
                <p class="text-xs text-slate-400">Salary range updated by Alex T.</p>
              </div>
            </div>
          </div>

          <div class="bg-white p-8 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)] space-y-4">
            <div class="flex justify-between items-center py-2 border-b border-slate-100">
              <span class="text-xs font-bold text-slate-500 uppercase tracking-tighter">Job ID</span>
              <span class="text-sm font-mono font-bold">#JH-7842-PD</span>
            </div>
            <div class="flex justify-between items-center py-2 border-b border-slate-100">
              <span class="text-xs font-bold text-slate-500 uppercase tracking-tighter">Posted Date</span>
              <span class="text-sm font-bold">Oct 12, 2024</span>
            </div>
            <div class="flex justify-between items-center py-2">
              <span class="text-xs font-bold text-slate-500 uppercase tracking-tighter">Views</span>
              <span class="text-sm font-bold">1,429</span>
            </div>
            <button
              class="w-full mt-2 py-3 rounded-xl bg-white border border-slate-200 font-bold flex items-center justify-center gap-2 hover:bg-slate-50"
            >
              <i class="bx bx-share"></i>
              Share Listing
            </button>
          </div>
        </div>
      </div>
      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
