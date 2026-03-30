@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <section class="mb-8 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 sm:gap-6">
        <div>
          <nav class="flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">
            <a class="hover:text-slate-600" href="job-postings.html">Jobs</a>
            <i class="bx bx-chevron-right text-sm"></i>
            <a class="hover:text-slate-600" href="job-applications.html">Applicants</a>
            <i class="bx bx-chevron-right text-sm"></i>
            <span class="text-[#b62dd6]">Sarah Chen</span>
          </nav>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight mb-2">Applicant Detail</h2>
          <p class="text-slate-500 font-medium">
            Review profile details, submission content, and internal hiring notes.
          </p>
        </div>
        <div class="flex w-full sm:w-auto flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center gap-2 sm:gap-3">
          <a
            class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-50 transition-all"
            href="job-applications.html"
          >
            <i class="bx bx-arrow-back text-base text-slate-400"></i>
            <span>Back to Applicants</span>
          </a>
          <a
            class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-full bg-[#b62dd6] px-4 py-2.5 text-sm font-bold text-white shadow-lg shadow-purple-200 hover:opacity-95 transition-all"
            href="interview-scheduler.html"
          >
            <i class="bx bx-calendar text-base"></i>
            <span>Schedule Interview</span>
          </a>
        </div>
      </section>

      <section class="grid grid-cols-1 xl:grid-cols-12 gap-4 sm:gap-6 mb-8">
        <div
          class="xl:col-span-8 bg-white rounded-[32px] p-5 sm:p-6 lg:p-8 shadow-[0_18px_40px_rgba(15,23,42,0.08)]"
        >
          <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
            <div class="flex items-start gap-4 min-w-0">
              <img
                alt="Applicant Avatar"
                class="w-16 h-16 lg:w-20 lg:h-20 rounded-[24px] object-cover shadow-sm flex-shrink-0"
                src="assets/images/avatar-sarah.svg"
              />
              <div class="min-w-0">
                <div class="flex flex-wrap items-center gap-2 mb-2">
                  <h3 class="text-2xl lg:text-3xl font-extrabold tracking-tight text-slate-900">Sarah Chen</h3>
                  <span
                    class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest bg-purple-50 text-[#7b5df7]"
                  >
                    Shortlisted
                  </span>
                </div>
                <p class="text-base lg:text-lg font-semibold text-slate-700">Senior Product Designer</p>
                <div class="mt-3 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-500 font-medium">
                  <span class="inline-flex items-center gap-2">
                    <i class="bx bx-map text-base text-slate-400"></i>
                    Austin, TX
                  </span>
                  <span class="inline-flex items-center gap-2">
                    <i class="bx bx-briefcase text-base text-slate-400"></i>
                    7 years experience
                  </span>
                  <span class="inline-flex items-center gap-2">
                    <i class="bx bx-envelope text-base text-slate-400"></i>
                    sarah.chen@example.com
                  </span>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:min-w-[250px] w-full lg:w-auto">
              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Applied</p>
                <p class="text-sm font-bold text-slate-900">Oct 12, 2024</p>
              </div>
              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Resume</p>
                <p class="text-sm font-bold text-emerald-600">Attached</p>
              </div>
              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Headline</p>
                <p class="text-sm font-bold text-slate-900">Product-led UX specialist</p>
              </div>
              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Portfolio</p>
                <p class="text-sm font-bold text-slate-900">Available</p>
              </div>
            </div>
          </div>
        </div>

        <div class="xl:col-span-4 bg-white rounded-[32px] p-5 sm:p-6 shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
          <div class="flex items-center justify-between gap-3 mb-5">
            <div>
              <h4 class="text-lg font-bold text-slate-900">Application Summary</h4>
              <p class="text-xs text-slate-500 mt-1">Quick view for hiring team review.</p>
            </div>
            <div class="w-11 h-11 rounded-2xl bg-purple-50 text-[#b62dd6] flex items-center justify-center">
              <i class="bx bx-file text-lg"></i>
            </div>
          </div>
          <div class="space-y-3">
            <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
              <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Current Company</p>
              <p class="text-sm font-semibold text-slate-900">Stripe</p>
            </div>
            <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
              <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Education</p>
              <p class="text-sm font-semibold text-slate-900">BFA, Interaction Design</p>
            </div>
            <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
              <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Availability</p>
              <p class="text-sm font-semibold text-slate-900">Available in 30 days</p>
            </div>
          </div>
        </div>
      </section>

      <section class="grid grid-cols-1 xl:grid-cols-12 gap-4 sm:gap-6">
        <div class="xl:col-span-8 space-y-6">
          <div class="bg-white rounded-[30px] p-5 sm:p-6 lg:p-8 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-5">
              <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Cover Letter</p>
                <h4 class="text-xl font-bold text-slate-900">Submission Message</h4>
              </div>
              <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-[10px] font-black uppercase tracking-widest">
                Submitted
              </span>
            </div>
            <div class="rounded-[24px] border border-slate-100 bg-[#f7f8fd] p-5 text-sm leading-7 text-slate-600">
              <p class="mb-4">
                Dear Hiring Team, I’m excited to apply for the Senior Product Designer role at Apex Hire. Over the last
                seven years, I’ve led end-to-end product design work across marketplace, fintech, and recruiting
                products with a strong focus on user research and measurable business outcomes.
              </p>
              <p class="mb-4">
                What drew me to this opportunity is the chance to design experiences that directly improve the way
                employers and candidates connect. I’ve previously redesigned onboarding and workflow-heavy dashboards,
                partnered closely with engineers and PMs, and helped teams ship systems that improved adoption and
                reduced time-to-task.
              </p>
              <p>
                I’d love the opportunity to bring the same systems thinking and user empathy to Apex Hire. Thank you
                for your time and consideration.
              </p>
            </div>
          </div>

          <div class="bg-white rounded-[30px] p-5 sm:p-6 lg:p-8 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-5">
              <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Resume</p>
                <h4 class="text-xl font-bold text-slate-900">Candidate Attachment</h4>
              </div>
              <button
                class="inline-flex items-center justify-center gap-2 rounded-full bg-[#b62dd6] px-4 py-2.5 text-sm font-bold text-white shadow-lg shadow-purple-200 hover:opacity-95 transition-all"
                type="button"
              >
                <i class="bx bx-download text-base"></i>
                <span>Download Resume</span>
              </button>
            </div>
            <div class="rounded-[24px] border border-dashed border-slate-200 bg-[#f7f8fd] p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
              <div class="flex items-center gap-4 min-w-0">
                <div class="w-12 h-12 rounded-2xl bg-white border border-slate-200 text-[#b62dd6] flex items-center justify-center flex-shrink-0">
                  <i class="bx bxs-file-pdf text-xl"></i>
                </div>
                <div class="min-w-0">
                  <p class="font-bold text-slate-900 truncate">sarah-chen-resume.pdf</p>
                  <p class="text-xs text-slate-500 font-medium mt-1">Uploaded with application • 1.8 MB</p>
                </div>
              </div>
              <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-[10px] font-black uppercase tracking-widest">
                Ready
              </span>
            </div>
          </div>
        </div>

        <div class="xl:col-span-4 space-y-6">
          <div class="bg-white rounded-[30px] p-5 sm:p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex items-center justify-between gap-3 mb-5">
              <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Internal Notes</p>
                <h4 class="text-xl font-bold text-slate-900">Employer-only Feedback</h4>
              </div>
              <div class="w-11 h-11 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center">
                <i class="bx bx-lock-alt text-lg"></i>
              </div>
            </div>
            <div class="rounded-[24px] border border-slate-100 bg-[#f7f8fd] p-4 mb-4">
              <p class="text-xs font-semibold text-slate-600 leading-6">
                Strong portfolio quality and clean systems thinking. Good fit for collaborative product squads. Check
                stakeholder communication depth during interview round.
              </p>
              <p class="text-[11px] text-slate-400 font-medium mt-3">Last note by Alex Sterling • Today</p>
            </div>
            <label class="block text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-2">Add a Note</label>
            <textarea
              class="w-full min-h-[160px] rounded-[24px] bg-[#f7f8fd] border border-slate-200 px-4 py-4 text-sm leading-relaxed placeholder:text-slate-400 focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
              placeholder="Only you and your hiring team can read notes added here..."
            ></textarea>
            <button
              class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-full border border-purple-200 bg-white px-4 py-3 text-sm font-bold text-[#b62dd6] hover:bg-purple-50 transition-all"
              type="button"
            >
              <i class="bx bx-message-square-add text-base"></i>
              <span>Add Internal Note</span>
            </button>
          </div>

          <div class="bg-white rounded-[30px] p-5 sm:p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <h4 class="text-lg font-bold text-slate-900 mb-4">Contact Snapshot</h4>
            <div class="space-y-3">
              <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Phone</p>
                <p class="text-sm font-semibold text-slate-900">+1 (512) 555-0187</p>
              </div>
              <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Preferred Work Style</p>
                <p class="text-sm font-semibold text-slate-900">Hybrid or remote-friendly teams</p>
              </div>
              <div class="rounded-2xl border border-slate-100 bg-[#f7f8fd] p-4">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Notice</p>
                <p class="text-sm font-semibold text-slate-900">30 days</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
