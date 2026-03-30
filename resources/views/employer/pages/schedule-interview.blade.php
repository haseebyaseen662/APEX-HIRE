@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <div class="max-w-7xl mx-auto">
        <section class="mb-8 flex flex-col xl:flex-row xl:items-end xl:justify-between gap-4 sm:gap-6">
          <div>
            <nav class="flex flex-wrap items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">
              <a class="hover:text-slate-600 transition-colors" href="job-postings.html">Jobs</a>
              <i class="bx bx-chevron-right text-sm"></i>
              <a class="hover:text-slate-600 transition-colors" href="job-applications.html">Applicants</a>
              <i class="bx bx-chevron-right text-sm"></i>
              <a class="hover:text-slate-600 transition-colors" href="applicant-detail.html">Sarah Chen</a>
              <i class="bx bx-chevron-right text-sm"></i>
              <span class="text-slate-900">Schedule Interview</span>
            </nav>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-none">
              Schedule Interview
            </h2>
            <p class="mt-4 text-slate-500 max-w-3xl leading-relaxed">
              Finalize the interview plan for Sarah Chen with date, time, panel assignment, and candidate
              instructions in one place.
            </p>
          </div>
          <div class="flex w-full sm:w-auto flex-col sm:flex-row items-stretch sm:items-center gap-3">
            <a
              class="inline-flex items-center justify-center gap-2 rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 transition-all"
              href="applicant-detail.html"
            >
              <i class="bx bx-arrow-back text-base text-slate-400"></i>
              <span>Back</span>
            </a>
            <button
              class="inline-flex items-center justify-center gap-2 rounded-full bg-[#b62dd6] px-5 py-3 text-sm font-bold text-white shadow-lg shadow-purple-200 hover:opacity-95 transition-all"
              type="submit"
              form="interview-scheduler-form"
            >
              <i class="bx bx-calendar-check text-base"></i>
              <span>Confirm</span>
            </button>
          </div>
        </section>

        <section class="grid grid-cols-1 xl:grid-cols-12 gap-6 lg:gap-8">
          <div class="xl:col-span-8">
            <form class="space-y-8" id="interview-scheduler-form">
              <div class="bg-white rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] p-5 sm:p-6 lg:p-8">
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
                  <div>
                    <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-2">Interview Plan</p>
                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Core Details</h3>
                  </div>
                  <span class="inline-flex items-center gap-2 self-start rounded-full bg-purple-50 px-3 py-1.5 text-[10px] font-black uppercase tracking-widest text-[#7b5df7]">
                    <i class="bx bx-time-five text-sm"></i>
                    45 mins recommended
                  </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div class="md:col-span-2">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Title
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="e.g. Product Design Final Round"
                      type="text"
                      value="Senior Product Designer Final Round"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Type
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option selected>Video Interview</option>
                      <option>On-site Interview</option>
                      <option>Phone Screening</option>
                      <option>Panel Interview</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Stage
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Screening Round</option>
                      <option>Technical Round</option>
                      <option selected>Final Round</option>
                      <option>Culture Fit</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Date
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      type="date"
                      value="2026-04-03"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Start Time
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      type="time"
                      value="14:00"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      End Time
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      type="time"
                      value="14:45"
                    />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Time Zone
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>PKT (UTC+05:00)</option>
                      <option selected>CT (UTC-05:00)</option>
                      <option>ET (UTC-04:00)</option>
                      <option>GMT (UTC+00:00)</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Meeting Link / Location
                    </label>
                    <input
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="Paste Zoom/Meet link or office address"
                      type="text"
                      value="https://meet.google.com/apexhire-design-final"
                    />
                  </div>
                </div>
              </div>

              <div class="bg-white rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] p-5 sm:p-6 lg:p-8">
                <div class="mb-6">
                  <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-2">Interviewers</p>
                  <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Assign Panel</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Primary Interviewer
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option selected>Alex Sterling</option>
                      <option>Victoria Gomez</option>
                      <option>Jason Reed</option>
                      <option>Elena Morris</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Coordinator
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Marcus Hall</option>
                      <option selected>Elena Morris</option>
                      <option>Victoria Gomez</option>
                    </select>
                  </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                  <article class="rounded-[24px] border border-slate-200 bg-[#f7f8fd] p-4 sm:p-5">
                    <div class="flex items-center gap-3 mb-4">
                      <img alt="Alex Sterling" class="h-12 w-12 rounded-2xl object-cover" src="assets/images/avatar-employer.svg" />
                      <div>
                        <p class="font-bold text-slate-900">Alex Sterling</p>
                        <p class="text-xs text-slate-500 font-medium">Hiring Manager</p>
                      </div>
                    </div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Role
                    </label>
                    <select
                      class="w-full rounded-xl bg-white border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option selected>Panel Lead</option>
                      <option>Evaluator</option>
                      <option>Observer</option>
                    </select>
                  </article>

                  <article class="rounded-[24px] border border-slate-200 bg-[#f7f8fd] p-4 sm:p-5">
                    <div class="flex items-center gap-3 mb-4">
                      <img alt="Victoria Gomez" class="h-12 w-12 rounded-2xl object-cover" src="assets/images/avatar-victoria.svg" />
                      <div>
                        <p class="font-bold text-slate-900">Victoria Gomez</p>
                        <p class="text-xs text-slate-500 font-medium">Design Director</p>
                      </div>
                    </div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Role
                    </label>
                    <select
                      class="w-full rounded-xl bg-white border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Panel Lead</option>
                      <option selected>Evaluator</option>
                      <option>Observer</option>
                    </select>
                  </article>

                  <article class="rounded-[24px] border border-slate-200 bg-[#f7f8fd] p-4 sm:p-5">
                    <div class="flex items-center gap-3 mb-4">
                      <img alt="Jason Reed" class="h-12 w-12 rounded-2xl object-cover" src="assets/images/avatar-jason.svg" />
                      <div>
                        <p class="font-bold text-slate-900">Jason Reed</p>
                        <p class="text-xs text-slate-500 font-medium">Product Manager</p>
                      </div>
                    </div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Role
                    </label>
                    <select
                      class="w-full rounded-xl bg-white border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Panel Lead</option>
                      <option selected>Evaluator</option>
                      <option>Observer</option>
                    </select>
                  </article>
                </div>
              </div>

              <div class="bg-white rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] p-5 sm:p-6 lg:p-8">
                <div class="mb-6">
                  <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-2">Candidate Notes</p>
                  <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">Instructions & Preparation</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Interview Focus
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>Portfolio Review</option>
                      <option selected>Case Study + Stakeholder Collaboration</option>
                      <option>Culture Interview</option>
                      <option>Technical Assessment</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Reminder
                    </label>
                    <select
                      class="w-full rounded-xl bg-[#f7f8fd] border border-slate-200 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    >
                      <option>15 minutes before</option>
                      <option selected>1 hour before</option>
                      <option>1 day before</option>
                    </select>
                  </div>
                </div>

                <div class="space-y-5">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Candidate Instructions
                    </label>
                    <textarea
                      class="w-full min-h-[160px] rounded-[24px] bg-[#f7f8fd] border border-slate-200 px-4 py-4 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="Share prep notes, agenda, and materials."
                    >Please join 5 minutes early and keep your portfolio or case study deck ready. We will spend the first 20 minutes on your recent product design work, followed by a collaborative workflow discussion and 10 minutes for Q&amp;A.</textarea>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-2">
                      Internal Notes
                    </label>
                    <textarea
                      class="w-full min-h-[140px] rounded-[24px] bg-[#f7f8fd] border border-slate-200 px-4 py-4 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                      placeholder="Notes visible only to the hiring team."
                    >Focus on stakeholder communication, facilitation style, and how she frames tradeoffs between product velocity and user experience quality.</textarea>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <aside class="xl:col-span-4 space-y-6">
            <div class="bg-white rounded-[32px] p-5 sm:p-6 shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
              <div class="flex items-start gap-4 mb-5">
                <img
                  alt="Sarah Chen"
                  class="h-16 w-16 rounded-[24px] object-cover shadow-sm"
                  src="assets/images/avatar-sarah.svg"
                />
                <div class="min-w-0">
                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Candidate</p>
                  <h3 class="text-2xl font-extrabold tracking-tight text-slate-900">Sarah Chen</h3>
                  <p class="text-sm font-semibold text-slate-600">Senior Product Designer</p>
                </div>
              </div>

              <div class="space-y-3">
                <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Current Stage</p>
                  <p class="text-sm font-bold text-[#7b5df7]">Final Interview</p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Availability</p>
                  <p class="text-sm font-bold text-slate-900">Apr 3 - Apr 5, 1:00 PM to 5:00 PM CT</p>
                </div>
                <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Email</p>
                  <p class="text-sm font-bold text-slate-900 break-all">sarah.chen@example.com</p>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-[32px] p-5 sm:p-6 shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
              <div class="flex items-center justify-between gap-3 mb-5">
                <div>
                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Schedule Snapshot</p>
                  <h4 class="text-xl font-bold text-slate-900">Interview Summary</h4>
                </div>
                <div class="h-11 w-11 rounded-2xl bg-purple-50 text-[#b62dd6] flex items-center justify-center">
                  <i class="bx bx-calendar-event text-lg"></i>
                </div>
              </div>

              <div class="space-y-4">
                <div class="flex items-start gap-3">
                  <div class="mt-1 h-10 w-10 rounded-2xl bg-slate-100 text-slate-500 flex items-center justify-center">
                    <i class="bx bx-calendar text-lg"></i>
                  </div>
                  <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Date & Time</p>
                    <p class="text-sm font-bold text-slate-900">April 3, 2026 • 2:00 PM - 2:45 PM CT</p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div class="mt-1 h-10 w-10 rounded-2xl bg-slate-100 text-slate-500 flex items-center justify-center">
                    <i class="bx bx-video text-lg"></i>
                  </div>
                  <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Format</p>
                    <p class="text-sm font-bold text-slate-900">Video Interview with 3 interviewers</p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div class="mt-1 h-10 w-10 rounded-2xl bg-slate-100 text-slate-500 flex items-center justify-center">
                    <i class="bx bx-notepad text-lg"></i>
                  </div>
                  <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Focus</p>
                    <p class="text-sm font-bold text-slate-900">Case study walkthrough and collaboration depth</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-[32px] p-5 sm:p-6 shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
              <div class="mb-5">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Checklist</p>
                <h4 class="text-xl font-bold text-slate-900">Before Sending Invite</h4>
              </div>

              <div class="space-y-3">
                <label class="flex items-start gap-3 rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <input checked class="mt-1 rounded border-slate-300 text-[#b62dd6] focus:ring-[#b62dd6]" type="checkbox" />
                  <span>
                    <span class="block text-sm font-bold text-slate-900">Candidate availability confirmed</span>
                    <span class="block text-xs text-slate-500 mt-1">Schedule fits shared windows for Sarah.</span>
                  </span>
                </label>
                <label class="flex items-start gap-3 rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <input checked class="mt-1 rounded border-slate-300 text-[#b62dd6] focus:ring-[#b62dd6]" type="checkbox" />
                  <span>
                    <span class="block text-sm font-bold text-slate-900">Panel interviewers assigned</span>
                    <span class="block text-xs text-slate-500 mt-1">Hiring, design, and product representation added.</span>
                  </span>
                </label>
                <label class="flex items-start gap-3 rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                  <input class="mt-1 rounded border-slate-300 text-[#b62dd6] focus:ring-[#b62dd6]" type="checkbox" />
                  <span>
                    <span class="block text-sm font-bold text-slate-900">Calendar invite and reminder ready</span>
                    <span class="block text-xs text-slate-500 mt-1">Include meeting link and prep instructions before sending.</span>
                  </span>
                </label>
              </div>
            </div>
          </aside>
        </section>
      </div>
    </main>

@endsection
