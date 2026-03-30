@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <div class="max-w-6xl mx-auto">
        <div class="mb-8">
          <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 mb-1">
            Account Settings
          </h1>
          <p class="text-slate-500 text-sm font-medium">
            Manage your agency profile, subscription, and platform security.
          </p>
        </div>

        <div class="grid grid-cols-12 gap-6">
          <!-- Content Area -->
          <div class="col-span-12 space-y-6">
            <section class="bg-white rounded-[28px] p-6 lg:p-8 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
                <div>
                  <h2 class="text-xl font-bold text-slate-900 mb-1">Company Profile</h2>
                  <p class="text-xs text-slate-500">This information will be visible to potential candidates.</p>
                </div>
                <button class="inline-flex items-center justify-center gap-2 rounded-full bg-[#b62dd6] px-4 py-2.5 text-xs font-bold text-white shadow-lg shadow-purple-200 hover:translate-y-[-1px] transition-all">
                  <i class="bx bx-edit"></i>
                  Save Changes
                </button>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                <div class="md:col-span-2 flex flex-col sm:flex-row sm:items-center gap-5">
                  <div class="relative group">
                    <div
                      class="w-20 h-20 rounded-3xl bg-[#f7f8fd] flex items-center justify-center overflow-hidden border-2 border-dashed border-slate-200 group-hover:border-[#b62dd6] transition-colors"
                    >
                      <img
                        class="w-full h-full object-cover"
                        data-alt="Company Logo Preview"
                        src="assets/images/company-logo.svg"
                      />
                      <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer"
                      >
                        <i class="bx bx-cloud-upload text-white text-xl"></i>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h4 class="font-bold text-slate-900">Company Logo</h4>
                    <p class="text-xs text-slate-400 mt-1">PNG or JPG. Max 2MB. Recommended 400x400px.</p>
                    <button
                      class="mt-2 text-xs font-bold text-[#b62dd6] px-4 py-2 bg-purple-50 rounded-full hover:bg-purple-100 transition-colors"
                    >
                      Replace Image
                    </button>
                  </div>
                </div>

                <div class="flex flex-col gap-2">
                  <label class="text-[11px] font-bold uppercase tracking-widest text-slate-400 px-1">Company Name</label>
                  <input
                    class="w-full rounded-2xl bg-[#f7f8fd] border border-slate-200 px-4 py-2.5 text-sm font-medium transition-all focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    type="text"
                    value="Apex Hire Global"
                  />
                </div>
                <div class="flex flex-col gap-2">
                  <label class="text-[11px] font-bold uppercase tracking-widest text-slate-400 px-1">Industry</label>
                  <select
                    class="w-full rounded-2xl bg-[#f7f8fd] border border-slate-200 px-4 py-2.5 text-sm font-medium transition-all focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                  >
                    <option>Tech &amp; Software</option>
                    <option>Finance</option>
                    <option>Healthcare</option>
                    <option>Manufacturing</option>
                  </select>
                </div>
                <div class="flex flex-col gap-2">
                  <label class="text-[11px] font-bold uppercase tracking-widest text-slate-400 px-1">Company Size</label>
                  <input
                    class="w-full rounded-2xl bg-[#f7f8fd] border border-slate-200 px-4 py-2.5 text-sm font-medium transition-all focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    type="text"
                    value="50-200 Employees"
                  />
                </div>
                <div class="flex flex-col gap-2">
                  <label class="text-[11px] font-bold uppercase tracking-widest text-slate-400 px-1">Location</label>
                  <input
                    class="w-full rounded-2xl bg-[#f7f8fd] border border-slate-200 px-4 py-2.5 text-sm font-medium transition-all focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    type="text"
                    value="San Francisco, CA"
                  />
                </div>
                <div class="md:col-span-2 flex flex-col gap-2">
                  <label class="text-[11px] font-bold uppercase tracking-widest text-slate-400 px-1">Description</label>
                  <textarea
                    class="w-full rounded-2xl bg-[#f7f8fd] border border-slate-200 px-4 py-2.5 text-sm font-medium transition-all focus:outline-none focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6]"
                    rows="4"
                  >We are a premier talent acquisition firm specializing in hyper-growth startups. Our mission is to connect visionary founders with the engineers and designers who will build the future.</textarea>
                </div>
              </div>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <section class="bg-white rounded-[28px] p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)] flex flex-col">
                <div class="flex items-center gap-4 mb-4">
                  <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-[#b62dd6]">
                    <i class="bx bx-award"></i>
                  </div>
                  <div>
                    <h3 class="font-bold text-slate-900">Professional Plan</h3>
                    <p class="text-xs text-slate-400">Current active subscription</p>
                  </div>
                </div>
                <div class="mb-6">
                  <div class="flex justify-between items-end mb-2">
                    <span class="text-sm font-bold text-slate-900">Job Posting Limit</span>
                    <span class="text-sm font-bold text-[#b62dd6]">8 / 15 Posts</span>
                  </div>
                  <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-[#b62dd6] w-[53%] rounded-full"></div>
                  </div>
                  <p class="text-[10px] text-slate-400 mt-2 uppercase font-bold tracking-widest">Resets in 12 days</p>
                </div>
                <button
                  class="mt-auto w-full py-3.5 rounded-full border border-[#b62dd6]/20 text-[#b62dd6] font-bold hover:bg-purple-50 transition-all text-sm"
                >
                  Manage Billing
                </button>
              </section>
              <section
                class="bg-slate-900 rounded-[28px] p-6 shadow-[0_12px_30px_rgba(15,23,42,0.18)] relative overflow-hidden flex flex-col justify-between"
              >
                <div class="relative z-10">
                  <span
                    class="px-3 py-1 bg-fuchsia-500/20 text-fuchsia-300 text-[10px] font-bold rounded-full uppercase tracking-widest"
                  >
                    Recommended
                  </span>
                  <h3 class="text-xl font-bold text-white mt-3 mb-1.5">Enterprise Plus</h3>
                  <p class="text-slate-300 text-sm leading-relaxed">
                    Unlimited job posts, dedicated account manager, and priority candidate matching.
                  </p>
                </div>
                <button
                  class="relative z-10 w-full py-3.5 bg-[#b62dd6] text-white font-bold rounded-full shadow-lg shadow-purple-500/40 text-sm mt-6 active:scale-95 transition-transform"
                >
                  Upgrade to Enterprise
                </button>
                <div class="absolute -right-8 -bottom-8 w-40 h-40 bg-[#b62dd6]/20 blur-3xl rounded-full"></div>
              </section>
            </div>

            <section class="bg-white rounded-[28px] p-6 lg:p-8 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
              <h2 class="text-xl font-bold text-slate-900 mb-5">Security &amp; Privacy</h2>
              <div class="space-y-4">
                <div
                  class="flex items-center justify-between p-3 bg-[#f7f8fd] rounded-2xl hover:bg-white transition-colors cursor-pointer group"
                >
                  <div class="flex items-center gap-4">
                    <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-slate-400">
                      <i class="bx bx-lock"></i>
                    </div>
                    <div>
                      <p class="font-bold text-slate-900">Change Password</p>
                      <p class="text-xs text-slate-500">Last updated 3 months ago</p>
                    </div>
                  </div>
                  <i class="bx bx-chevron-right text-slate-300 group-hover:text-[#b62dd6] transition-colors"></i>
                </div>
                <div
                  class="flex items-center justify-between p-3 bg-[#f7f8fd] rounded-2xl hover:bg-white transition-colors cursor-pointer group"
                >
                  <div class="flex items-center gap-4">
                    <div class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-slate-400">
                      <i class="bx bx-mobile-alt"></i>
                    </div>
                    <div>
                      <p class="font-bold text-slate-900">Two-Factor Authentication</p>
                      <p class="text-xs text-emerald-500 font-bold">Enabled</p>
                    </div>
                  </div>
                  <i class="bx bx-chevron-right text-slate-300 group-hover:text-[#b62dd6] transition-colors"></i>
                </div>
                <div class="pt-6 mt-6 border-t border-slate-100">
                  <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                      <p class="font-bold text-red-500">Delete Profile</p>
                      <p class="text-xs text-slate-500 mt-1">
                        Permanently remove all your recruitment data and company history.
                      </p>
                    </div>
                    <button
                      class="px-5 py-2.5 text-red-500 font-bold border border-red-200 hover:bg-red-50 rounded-full text-sm transition-all"
                    >
                      Delete Profile
                    </button>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
