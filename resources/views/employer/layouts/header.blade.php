<header
      class="portal-header fixed top-0 left-0 right-0 h-16 bg-white z-40 flex items-center justify-end lg:justify-between px-4 sm:px-6 lg:px-8 gap-4 border-b border-slate-100"
    >
      <div class="portal-header-inner w-full flex items-center justify-end gap-4">
        <div class="flex items-center gap-4 sm:gap-6">
          <button
            class="hover:bg-slate-100 rounded-full p-2 transition-colors duration-200 text-slate-500"
            type="button"
          >
            <i class="bx bx-search text-xl"></i>
          </button>
          <div class="portal-notification relative" data-notification-root>
            <button
              aria-expanded="false"
              aria-haspopup="true"
              class="hover:bg-slate-100 rounded-full p-2 transition-colors duration-200 text-slate-500 relative"
              data-notification-toggle
              type="button"
            >
              <i class="bx bx-bell text-xl"></i>
              <span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full"></span>
            </button>
            <div class="portal-notification-menu" data-notification-menu>
              <div class="portal-notification-head px-3 pb-3 pt-1 flex items-center justify-between gap-3">
                <div>
                  <p class="text-xs font-black uppercase tracking-[0.2em] text-slate-400">Notifications</p>
                  <p class="mt-1 text-sm font-semibold text-slate-900">Hiring updates</p>
                </div>
                <span class="inline-flex items-center rounded-full bg-purple-50 px-2.5 py-1 text-[10px] font-black uppercase tracking-widest text-[#b62dd6]">3 New</span>
              </div>
              <div class="mt-3 space-y-2">
                <a class="portal-notification-item" href="#">
                  <div class="flex items-start gap-3">
                    <span class="portal-notification-avatar bg-purple-100 text-[#b62dd6]">
                      <i class="bx bx-calendar-check text-base"></i>
                    </span>
                    <div class="min-w-0">
                      <p class="text-sm font-bold text-slate-900">Sarah Chen moved to final round</p>
                      <p class="mt-1 text-xs leading-5 text-slate-500">Schedule her interview from the applicants queue.</p>
                    </div>
                  </div>
                </a>
                <a class="portal-notification-item" href="#">
                  <div class="flex items-start gap-3">
                    <span class="portal-notification-avatar bg-sky-100 text-sky-600">
                      <i class="bx bx-briefcase text-base"></i>
                    </span>
                    <div class="min-w-0">
                      <p class="text-sm font-bold text-slate-900">Senior UI Designer post reached 142 applicants</p>
                      <p class="mt-1 text-xs leading-5 text-slate-500">Review job performance and shortlist top candidates.</p>
                    </div>
                  </div>
                </a>
                <a class="portal-notification-item" href="#">
                  <div class="flex items-start gap-3">
                    <span class="portal-notification-avatar bg-emerald-100 text-emerald-600">
                      <i class="bx bx-user-check text-base"></i>
                    </span>
                    <div class="min-w-0">
                      <p class="text-sm font-bold text-slate-900">Victoria Gomez accepted interview panel request</p>
                      <p class="mt-1 text-xs leading-5 text-slate-500">Your hiring team availability has been updated.</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="h-8 w-px bg-slate-200/50"></div>
          <div class="flex items-center gap-3">
            <div class="text-right">
              <p class="font-bold text-sm leading-none">Alex Sterling</p>
              <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-wider">
                Hiring Manager
              </p>
            </div>
            <img
              alt="User Avatar"
              class="w-10 h-10 rounded-full border-2 border-primary/10"
              data-alt="Professional headshot of a hiring manager"
              src="{{ asset('employer/assets/images/avatar-employer.svg') }}"
            />
          </div>
        </div>
      </div>
    </header>
