@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <div class="max-w-5xl mx-auto">
        <div class="mb-10">
          <nav class="flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">
            <a class="hover:text-[#b62dd6] transition-colors" href="job-postings.html">Jobs</a>
            <i class="bx bx-chevron-right text-sm"></i>
            <span class="text-slate-900">Post New Position</span>
          </nav>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-none">
            Post a Job
          </h2>
          <p class="mt-4 text-slate-500 max-w-2xl leading-relaxed">
            Fill in the details below to find your next top talent. Your post will be visible to our premium
            network of candidates.
          </p>
        </div>

        <form class="space-y-10">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-12">
              <div class="bg-white rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] p-5 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="md:col-span-2">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Job Title
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="e.g. Senior Product Designer"
                      type="text"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Job Type
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Full-time</option>
                      <option>Part-time</option>
                      <option>Contract</option>
                      <option>Freelance</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Experience Level
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Entry Level</option>
                      <option>Mid-Level</option>
                      <option>Senior</option>
                      <option>Executive</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Location
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="Remote, New York, etc."
                      type="text"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Application Deadline
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      type="date"
                    />
                  </div>
                  <div class="md:col-span-2">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Salary Range (Annual USD)
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                      <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-semibold">
                          $
                        </span>
                        <input
                          class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 pl-9 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                          placeholder="Min"
                          type="text"
                        />
                      </div>
                      <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-semibold">
                          $
                        </span>
                        <input
                          class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 pl-9 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                          placeholder="Max"
                          type="text"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-12">
              <div class="bg-white rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] p-5 sm:p-6 lg:p-8 space-y-6">
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-[#f7f8fd]">
                  <div class="flex items-center gap-2 px-4 py-3 border-b border-slate-200 text-slate-500">
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-bold"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-italic"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-list-ul"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-link"></i>
                    </button>
                  </div>
                  <div class="p-4">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Role Overview
                    </label>
                    <textarea
                      class="w-full min-h-[180px] bg-transparent border-none px-0 py-2 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none"
                      placeholder="Write a compelling job description..."
                    ></textarea>
                  </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-[#f7f8fd]">
                  <div class="flex items-center gap-2 px-4 py-3 border-b border-slate-200 text-slate-500">
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-bold"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-italic"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-list-ul"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-link"></i>
                    </button>
                  </div>
                  <div class="p-4">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Key Responsibilities
                    </label>
                    <textarea
                      class="w-full min-h-[140px] bg-transparent border-none px-0 py-2 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none"
                      placeholder="List the core responsibilities for the role..."
                    ></textarea>
                  </div>
                </div>
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-[#f7f8fd]">
                  <div class="flex items-center gap-2 px-4 py-3 border-b border-slate-200 text-slate-500">
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-bold"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-italic"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-list-ul"></i>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-white/70 transition-colors" type="button">
                      <i class="bx bx-link"></i>
                    </button>
                  </div>
                  <div class="p-4">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Required Experience
                    </label>
                    <textarea
                      class="w-full min-h-[140px] bg-transparent border-none px-0 py-2 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none"
                      placeholder="Summarize the experience and skills required..."
                    ></textarea>
                  </div>
                </div>
                <p class="text-[11px] text-slate-400 font-medium flex items-center gap-1">
                  <i class="bx bx-info-circle"></i>
                  Minimum 200 characters recommended for better search ranking.
                </p>
              </div>
            </div>
          </div>

          <div class="mb-24 lg:mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-end gap-4">
            <button
              class="px-8 py-3 bg-white text-slate-700 font-bold rounded-full border border-slate-200 hover:bg-slate-50 transition-all"
              type="button"
            >
              Cancel
            </button>
            <button
              class="bg-[#b62dd6] text-white py-3 px-10 rounded-full font-bold shadow-lg shadow-purple-200 flex items-center justify-center gap-2"
              type="submit"
            >
              Post Job
              <i class="bx bx-rocket text-lg"></i>
            </button>
          </div>

          <div class="h-24 lg:hidden"></div>
        </form>
      </div>
    </main>

@endsection
