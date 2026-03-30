@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <!-- Header Section -->
      <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-10 gap-5">
        <div class="space-y-2 lg:flex-1">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900">Job Listings</h2>
          <p class="text-slate-500 font-medium">Manage and monitor your active recruitment campaigns</p>
        </div>
        <div class="flex items-center gap-3 w-full lg:w-auto lg:flex-shrink-0">
          <div class="relative flex-1 lg:w-72">
            <i class="bx bx-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input
              class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-full shadow-sm focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6] transition-all text-sm font-medium placeholder:text-slate-400"
              placeholder="Search by job title or location..."
              type="text"
            />
          </div>
          <button
            class="bg-white p-3 rounded-full shadow-sm hover:bg-slate-50 transition-colors text-slate-600 border border-slate-200"
          >
            <i class="bx bx-filter-alt"></i>
          </button>
        </div>
      </div>

      <!-- Insights Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-4 lg:gap-6 mb-10">
        <div
          class="col-span-1 lg:col-span-8 bg-white rounded-[24px] p-5 lg:p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)] overflow-hidden relative"
        >
          <div class="flex items-start justify-between mb-3">
            <div class="w-10 h-10 rounded-2xl bg-purple-50 flex items-center justify-center text-[#b62dd6]">
              <i class="bx bx-briefcase text-lg"></i>
            </div>
            <span
              class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-trending-up text-[14px]"></i>
              12%
            </span>
          </div>
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Total Active Roles</p>
          <div class="mt-2 flex items-baseline gap-3">
            <span class="text-3xl lg:text-5xl font-black tracking-tighter text-slate-900">24</span>
            <span class="hidden sm:inline text-sm font-semibold text-emerald-700">+12% this month</span>
          </div>
        </div>
        <div
          class="col-span-1 lg:col-span-4 bg-white rounded-[24px] p-5 lg:p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)]"
        >
          <div class="flex items-start justify-between mb-3">
            <div class="w-10 h-10 rounded-2xl bg-purple-50 flex items-center justify-center text-[#b62dd6]">
              <i class="bx bx-star text-lg"></i>
            </div>
            <span
              class="text-xs font-bold text-[#b62dd6] bg-purple-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-bolt-circle text-[14px]"></i>
              Hot
            </span>
          </div>
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Priority Hire</p>
          <p class="mt-2 text-base lg:text-lg font-extrabold tracking-tight text-slate-900">Senior UX Designer</p>
          <p class="text-xs text-slate-500 font-medium mt-1">45+ new applicants to review</p>
        </div>
      </div>

      <!-- Listings Table -->
      <div class="bg-white rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)] p-2 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full border-collapse">
            <thead>
              <tr class="text-left">
                <th class="px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400">
                  Job Title
                </th>
                <th class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400">
                  Location
                </th>
                <th class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400">
                  Type
                </th>
                <th class="hidden lg:table-cell px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400">
                  Applicants
                </th>
                <th class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400">
                  Status
                </th>
                <th class="px-4 md:px-6 py-4 md:py-5 text-xs font-bold uppercase tracking-widest text-slate-400 text-right">
                  Actions
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr class="group hover:bg-[#f7f8fd] transition-all duration-200">
                <td class="px-4 md:px-6 py-4 md:py-5">
                  <div class="min-w-0">
                    <div class="min-w-0">
                      <p class="font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">
                        Senior Product Designer
                      </p>
                      <p class="text-xs text-slate-400">Posted 2 days ago</p>
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2 text-slate-600 font-medium text-sm">
                    <i class="bx bx-map text-slate-300"></i>
                    <span>San Francisco, CA</span>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <span
                    class="bg-slate-100 text-slate-600 text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider"
                  >
                    Full-time
                  </span>
                </td>
                <td class="hidden lg:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex -space-x-2">
                    <img
                      class="w-7 h-7 rounded-full border-2 border-white object-cover"
                      data-alt="Candidate profile 1"
                      src="assets/images/avatar-sarah.svg"
                    />
                    <img
                      class="w-7 h-7 rounded-full border-2 border-white object-cover"
                      data-alt="Candidate profile 2"
                      src="assets/images/avatar-marcus.svg"
                    />
                    <div
                      class="w-7 h-7 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-slate-500"
                    >
                      +12
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <span class="text-xs font-bold text-slate-700">Active</span>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4 md:py-5 text-right">
                  <div class="flex items-center justify-end gap-1 opacity-100 md:opacity-45 md:group-hover:opacity-100 transition-opacity duration-200">
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-details.html"
                      title="View"
                    >
                      <i class="bx bx-show"></i>
                    </a>
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-applications.html"
                      title="View Applicants"
                    >
                      <i class="bx bx-group"></i>
                    </a>
                    <button
                      class="hidden md:inline-flex p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      title="Edit"
                    >
                      <i class="bx bx-edit"></i>
                    </button>
                    <button
                      class="p-2 hover:bg-red-50 hover:text-red-500 text-slate-400 rounded-lg transition-colors"
                      title="Delete"
                    >
                      <i class="bx bx-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="group hover:bg-[#f7f8fd] transition-all duration-200">
                <td class="px-4 md:px-6 py-4 md:py-5">
                  <div class="min-w-0">
                    <div class="min-w-0">
                      <p class="font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">
                        Staff Frontend Engineer
                      </p>
                      <p class="text-xs text-slate-400">Posted 5 days ago</p>
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2 text-slate-600 font-medium text-sm">
                    <i class="bx bx-cloud text-slate-300"></i>
                    <span>Remote</span>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <span
                    class="bg-slate-100 text-slate-600 text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider"
                  >
                    Full-time
                  </span>
                </td>
                <td class="hidden lg:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex -space-x-2">
                    <img
                      class="w-7 h-7 rounded-full border-2 border-white object-cover"
                      data-alt="Candidate profile 3"
                      src="assets/images/avatar-elena.svg"
                    />
                    <div
                      class="w-7 h-7 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-slate-500"
                    >
                      +8
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <span class="text-xs font-bold text-slate-700">Active</span>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4 md:py-5 text-right">
                  <div class="flex items-center justify-end gap-1 opacity-100 md:opacity-45 md:group-hover:opacity-100 transition-opacity duration-200">
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-details.html"
                      title="View"
                    >
                      <i class="bx bx-show"></i>
                    </a>
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-applications.html"
                      title="View Applicants"
                    >
                      <i class="bx bx-group"></i>
                    </a>
                    <button
                      class="hidden md:inline-flex p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      title="Edit"
                    >
                      <i class="bx bx-edit"></i>
                    </button>
                    <button
                      class="p-2 hover:bg-red-50 hover:text-red-500 text-slate-400 rounded-lg transition-colors"
                      title="Delete"
                    >
                      <i class="bx bx-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="group hover:bg-[#f7f8fd] transition-all duration-200">
                <td class="px-4 md:px-6 py-4 md:py-5 opacity-70 group-hover:opacity-100 transition-opacity">
                  <div class="min-w-0">
                    <div class="min-w-0">
                      <p class="font-bold text-slate-900 truncate">Growth Marketing Manager</p>
                      <p class="text-xs text-slate-400">Closed 1 week ago</p>
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2 text-slate-400 font-medium text-sm">
                    <i class="bx bx-map text-slate-300"></i>
                    <span>New York, NY</span>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <span
                    class="bg-slate-100 text-slate-400 text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider"
                  >
                    Contract
                  </span>
                </td>
                <td class="hidden lg:table-cell px-4 md:px-6 py-4 md:py-5 text-slate-400 font-bold text-xs">42 Applied</td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-slate-300"></div>
                    <span class="text-xs font-bold text-slate-400">Inactive</span>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4 md:py-5 text-right">
                  <div class="flex items-center justify-end gap-1 opacity-100 md:opacity-45 md:group-hover:opacity-100 transition-opacity duration-200">
                    <button
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      title="Restore"
                    >
                      <i class="bx bx-refresh"></i>
                    </button>
                    <button
                      class="p-2 hover:bg-red-50 hover:text-red-500 text-slate-400 rounded-lg transition-colors"
                      title="Delete"
                    >
                      <i class="bx bx-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr class="group hover:bg-[#f7f8fd] transition-all duration-200">
                <td class="px-4 md:px-6 py-4 md:py-5">
                  <div class="min-w-0">
                    <div class="min-w-0">
                      <p class="font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">
                        QA Automation Engineer
                      </p>
                      <p class="text-xs text-slate-400">Posted 3 days ago</p>
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2 text-slate-600 font-medium text-sm">
                    <i class="bx bx-map text-slate-300"></i>
                    <span>Austin, TX</span>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <span
                    class="bg-slate-100 text-slate-600 text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider"
                  >
                    Full-time
                  </span>
                </td>
                <td class="hidden lg:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex -space-x-2">
                    <img
                      class="w-7 h-7 rounded-full border-2 border-white object-cover"
                      data-alt="Candidate profile 4"
                      src="assets/images/avatar-jason.svg"
                    />
                    <div
                      class="w-7 h-7 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-slate-500"
                    >
                      +4
                    </div>
                  </div>
                </td>
                <td class="hidden md:table-cell px-4 md:px-6 py-4 md:py-5">
                  <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <span class="text-xs font-bold text-slate-700">Active</span>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4 md:py-5 text-right">
                  <div class="flex items-center justify-end gap-1 opacity-100 md:opacity-45 md:group-hover:opacity-100 transition-opacity duration-200">
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-details.html"
                      title="View"
                    >
                      <i class="bx bx-show"></i>
                    </a>
                    <a
                      class="p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      href="job-applications.html"
                      title="View Applicants"
                    >
                      <i class="bx bx-group"></i>
                    </a>
                    <button
                      class="hidden md:inline-flex p-2 hover:bg-purple-50 hover:text-[#b62dd6] text-slate-400 rounded-lg transition-colors"
                      title="Edit"
                    >
                      <i class="bx bx-edit"></i>
                    </button>
                    <button
                      class="p-2 hover:bg-red-50 hover:text-red-500 text-slate-400 rounded-lg transition-colors"
                      title="Delete"
                    >
                      <i class="bx bx-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 mt-2 gap-3">
          <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Showing 4 of 24 active jobs</p>
          <div class="flex gap-2">
            <button class="p-2 rounded-full border border-slate-200 text-slate-400 hover:text-[#b62dd6]">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button class="p-2 rounded-full border border-slate-200 text-slate-400 hover:text-[#b62dd6]">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
