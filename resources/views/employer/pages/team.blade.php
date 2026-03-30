@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <div class="max-w-6xl mx-auto">
        <div class="mb-8 flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
          <div>
            <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 mb-1">Team</h1>
            <p class="text-slate-500 text-sm font-medium">Manage members, roles, and access to your employer portal.</p>
          </div>
          <div class="flex flex-wrap gap-2">
            <button class="px-5 py-2.5 rounded-full bg-[#b62dd6] text-white text-sm font-bold shadow-lg shadow-purple-200" type="button">
              Invite Member
            </button>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
          <div class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex justify-between items-start mb-3">
              <div class="w-10 h-10 rounded-2xl bg-purple-50 flex items-center justify-center text-[#b62dd6]">
                <i class="bx bx-group text-lg"></i>
              </div>
              <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">Active</span>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Members</p>
            <p class="text-xl lg:text-2xl font-bold leading-tight">7</p>
          </div>
          <div class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex justify-between items-start mb-3">
              <div class="w-10 h-10 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600">
                <i class="bx bx-shield-quarter text-lg"></i>
              </div>
              <span class="text-xs font-bold text-slate-600 bg-slate-100 px-2 py-1 rounded-full">RBAC</span>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Roles</p>
            <p class="text-xl lg:text-2xl font-bold leading-tight">4</p>
          </div>
          <div class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex justify-between items-start mb-3">
              <div class="w-10 h-10 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600">
                <i class="bx bx-check-circle text-lg"></i>
              </div>
              <span class="text-xs font-bold text-emerald-700 bg-emerald-50 px-2 py-1 rounded-full">On</span>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Two-Factor Authentication</p>
            <p class="text-xl lg:text-2xl font-bold leading-tight">Enabled</p>
          </div>
          <div class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
            <div class="flex justify-between items-start mb-3">
              <div class="w-10 h-10 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-600">
                <i class="bx bx-time-five text-lg"></i>
              </div>
              <span class="text-xs font-bold text-slate-600 bg-slate-100 px-2 py-1 rounded-full">7d</span>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Invites</p>
            <p class="text-xl lg:text-2xl font-bold leading-tight">2</p>
          </div>
        </div>

        <section class="bg-white rounded-[28px] p-6 lg:p-8 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-5">
            <div>
              <h2 class="text-xl font-bold text-slate-900 mb-1">Members</h2>
              <p class="text-xs text-slate-500">Assign roles and manage access. Static UI for now.</p>
            </div>
            <div class="relative w-full sm:w-72">
              <i class="bx bx-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
              <input
                class="w-full bg-[#f7f8fd] border border-slate-200 rounded-full py-2.5 pl-12 pr-4 text-sm focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6] transition-all"
                placeholder="Search members..."
                type="text"
              />
            </div>
          </div>

          <div class="space-y-3">
            <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-4 rounded-2xl bg-[#f7f8fd] border border-slate-100">
              <div class="flex items-center gap-4 flex-1 min-w-0">
                <img class="w-11 h-11 rounded-2xl" src="assets/images/avatar-employer.svg" alt="Member avatar" />
                <div class="min-w-0">
                  <p class="font-bold text-slate-900 truncate">Alex Thompson</p>
                  <p class="text-xs text-slate-500 font-medium truncate">alex@apexhire.example</p>
                </div>
              </div>
              <span class="text-[10px] font-black uppercase tracking-widest bg-purple-50 text-[#b62dd6] px-3 py-1 rounded-full">Owner</span>
              <button class="px-4 py-2 rounded-full border border-slate-200 bg-white text-slate-700 text-xs font-bold hover:bg-slate-50" type="button">
                Manage
              </button>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-4 rounded-2xl bg-[#f7f8fd] border border-slate-100">
              <div class="flex items-center gap-4 flex-1 min-w-0">
                <img class="w-11 h-11 rounded-2xl" src="assets/images/avatar-sarah.svg" alt="Member avatar" />
                <div class="min-w-0">
                  <p class="font-bold text-slate-900 truncate">Sarah Chen</p>
                  <p class="text-xs text-slate-500 font-medium truncate">sarah@apexhire.example</p>
                </div>
              </div>
              <span class="text-[10px] font-black uppercase tracking-widest bg-slate-100 text-slate-600 px-3 py-1 rounded-full">Recruiter</span>
              <button class="px-4 py-2 rounded-full border border-slate-200 bg-white text-slate-700 text-xs font-bold hover:bg-slate-50" type="button">
                Manage
              </button>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-4 rounded-2xl bg-[#f7f8fd] border border-slate-100">
              <div class="flex items-center gap-4 flex-1 min-w-0">
                <img class="w-11 h-11 rounded-2xl" src="assets/images/avatar-marcus.svg" alt="Member avatar" />
                <div class="min-w-0">
                  <p class="font-bold text-slate-900 truncate">Marcus Thorne</p>
                  <p class="text-xs text-slate-500 font-medium truncate">marcus@apexhire.example</p>
                </div>
              </div>
              <span class="text-[10px] font-black uppercase tracking-widest bg-blue-50 text-blue-600 px-3 py-1 rounded-full">Hiring Mgr</span>
              <button class="px-4 py-2 rounded-full border border-slate-200 bg-white text-slate-700 text-xs font-bold hover:bg-slate-50" type="button">
                Manage
              </button>
            </div>
          </div>
        </section>
      </div>

      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
