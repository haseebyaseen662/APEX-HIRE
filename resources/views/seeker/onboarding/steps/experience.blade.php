@extends('seeker.onboarding.layout')

@section('page_title', 'Work Experience — Apex Hire')

@section('progress')
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <span class="text-sm font-semibold text-primary" id="step-counter">Step 3 of 3</span>
            <span class="text-sm text-slate-500 dark:text-slate-400" id="step-title">Work Experience</span>
        </div>
        <div class="relative h-2 w-full rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
            <div class="absolute top-0 left-0 h-full rounded-full bg-primary transition-all duration-300" id="progress-bar" style="width: 100%;"></div>
        </div>
    </div>
@endsection

@section('header')
    <div class="flex items-start justify-between gap-4">
        <div class="flex flex-col gap-2 text-left">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Work Experience</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Tell us about your professional experience.</p>
        </div>
        <a href="{{ route('seeker.onboarding.complete') }}" class="flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition-colors border border-slate-300 dark:border-slate-600 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 whitespace-nowrap mt-1">
            <span>Skip</span>
            <i class="bx bx-skip-next text-lg"></i>
        </a>
    </div>
@endsection

@section('content')
    @if (session('status'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm font-medium">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('seeker.onboarding.experience.store') }}" id="experienceForm" novalidate class="flex flex-col gap-6">
        @csrf

        <div id="experienceEntries" class="space-y-8">
            <div class="experience-entry space-y-6" data-index="1">
                <div class="entry-header hidden items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400">
                        Experience #<span class="entry-num">2</span>
                    </span>
                    <button
                        type="button"
                        class="remove-entry flex items-center gap-1.5 text-xs font-bold text-red-500 hover:text-red-700 transition-colors px-3 py-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-full"
                    >
                        <i class="bx bx-trash text-base"></i>
                        Remove
                    </button>
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company0">
                        Company Name <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="company0"
                        name="experience[0][company]"
                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('experience.0.company') field-error @enderror"
                        placeholder="e.g. Apex Hire"
                        value="{{ old('experience.0.company') }}"
                        data-rules="required|min:2" data-label="Company Name"
                    />
                    <p class="text-xs text-red-500 hidden mt-1" data-error="company0"></p>
                    @error('experience.0.company')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="jobTitle0">
                            Job Title <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="jobTitle0"
                            name="experience[0][job_title]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('experience.0.job_title') field-error @enderror"
                            placeholder="e.g. Software Engineer"
                            value="{{ old('experience.0.job_title') }}"
                            data-rules="required|min:2" data-label="Job Title"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="jobTitle0"></p>
                        @error('experience.0.job_title')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="employmentType0">
                            Employment Type <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="employmentType0"
                            name="experience[0][employment_type]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('experience.0.employment_type') field-error @enderror"
                            placeholder="e.g. Full-time"
                            value="{{ old('experience.0.employment_type') }}"
                            data-rules="required|min:2" data-label="Employment Type"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="employmentType0"></p>
                        @error('experience.0.employment_type')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="startDate0">
                            Start Date <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="date"
                            id="startDate0"
                            name="experience[0][start_date]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('experience.0.start_date') field-error @enderror"
                            value="{{ old('experience.0.start_date') }}"
                            data-rules="required" data-label="Start Date"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="startDate0"></p>
                        @error('experience.0.start_date')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="endDate0">
                            End Date (or Present) <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="date"
                            id="endDate0"
                            name="experience[0][end_date]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('experience.0.end_date') field-error @enderror"
                            value="{{ old('experience.0.end_date') }}"
                            data-rules="required" data-label="End Date"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="endDate0"></p>
                        @error('experience.0.end_date')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="description0">
                        Responsibilities &amp; Achievements
                    </label>
                    <textarea
                        id="description0"
                        name="experience[0][description]"
                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white resize-none @error('experience.0.description') field-error @enderror"
                        placeholder="Describe your key responsibilities, projects, and achievements..."
                        rows="4"
                    >{{ old('experience.0.description') }}</textarea>
                    <p class="text-xs text-red-500 hidden mt-1" data-error="description0"></p>
                    @error('experience.0.description')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 pt-6 border-t border-slate-200 dark:border-slate-700 mt-8">
            <button
                type="button"
                id="addEntryBtn"
                class="flex items-center justify-center gap-2 text-primary font-bold px-6 py-3 hover:bg-primary/5 rounded-xl transition-all text-sm border border-primary/20 hover:border-primary/40"
            >
                <i class="bx bx-plus text-xl"></i>
                Add Another Experience
            </button>

            <button
                type="submit"
                class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-base font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20 w-full sm:w-auto"
            >
                <span>Complete</span>
                <i class="bx bx-check text-lg"></i>
            </button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let entryCount = 1;

        function buildEntryHTML(index) {
            return `
            <div class="experience-entry space-y-6" data-index="${index}">
                <div class="entry-header -mt-8 relative z-10 flex items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400">
                        Experience #<span class="entry-num">${index}</span>
                    </span>
                    <button
                        type="button"
                        class="remove-entry flex items-center gap-1.5 text-xs font-bold text-red-500 hover:text-red-700 transition-colors px-3 py-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-full"
                    >
                        <i class="bx bx-trash text-base"></i>
                        Remove
                    </button>
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                        Company Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="company${index - 1}" name="experience[${index - 1}][company]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. Apex Hire" data-rules="required|min:2" data-label="Company Name" />
                    <p class="text-xs text-red-500 hidden mt-1" data-error="company${index - 1}"></p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Job Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="jobTitle${index - 1}" name="experience[${index - 1}][job_title]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. Software Engineer" data-rules="required|min:2" data-label="Job Title" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="jobTitle${index - 1}"></p>
                    </div>

                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Employment Type <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="employmentType${index - 1}" name="experience[${index - 1}][employment_type]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. Full-time" data-rules="required|min:2" data-label="Employment Type" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="employmentType${index - 1}"></p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Start Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="startDate${index - 1}" name="experience[${index - 1}][start_date]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" data-rules="required" data-label="Start Date" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="startDate${index - 1}"></p>
                    </div>
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            End Date (or Present) <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="endDate${index - 1}" name="experience[${index - 1}][end_date]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" data-rules="required" data-label="End Date" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="endDate${index - 1}"></p>
                    </div>
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                        Responsibilities &amp; Achievements
                    </label>
                    <textarea id="description${index - 1}" name="experience[${index - 1}][description]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white resize-none" placeholder="Describe your key responsibilities, projects, and achievements..." rows="4"></textarea>
                    <p class="text-xs text-red-500 hidden mt-1" data-error="description${index - 1}"></p>
                </div>

                <hr class="border-slate-200 dark:border-slate-700 mt-6">
            </div>
            `;
        }

        function runRules(input) {
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';
            const value = input.value.trim();

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) return `${label} is required.`;
                if (rule.startsWith('min:')) {
                    const min = parseInt(rule.split(':')[1], 10);
                    if (value.length > 0 && value.length < min) return `${label} must be at least ${min} characters.`;
                }
            }
            return null;
        }

        function setFieldState(input, errorMessage) {
            const errorEl = document.querySelector(`[data-error="${input.id}"]`);
            if (errorMessage) {
                input.classList.add('field-error');
                if (errorEl) {
                    errorEl.textContent = errorMessage;
                    errorEl.classList.remove('hidden');
                }
            } else {
                input.classList.remove('field-error');
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
            }
        }

        function validateField(input) {
            const error = runRules(input);
            setFieldState(input, error);
            return error === null;
        }

        function wireRemoveButtons() {
            document.querySelectorAll('.remove-entry').forEach((btn) => {
                btn.onclick = () => {
                    const entry = btn.closest('.experience-entry');
                    if (!entry) return;
                    entry.remove();
                };
            });
        }

        function attachValidation(root) {
            const inputs = root.querySelectorAll('input[data-rules], textarea[data-rules]');
            inputs.forEach((input) => {
                input.addEventListener('blur', () => validateField(input));
                input.addEventListener('input', () => validateField(input));
                input.addEventListener('change', () => validateField(input));
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const addBtn = document.getElementById('addEntryBtn');
            const container = document.getElementById('experienceEntries');

            if (addBtn && container) {
                addBtn.addEventListener('click', () => {
                    entryCount += 1;
                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = buildEntryHTML(entryCount);
                    const entry = wrapper.firstElementChild;
                    container.appendChild(entry);
                    attachValidation(entry);
                    wireRemoveButtons();
                });
            }

            attachValidation(document);
            wireRemoveButtons();

            const form = document.getElementById('experienceForm');
            form?.addEventListener('submit', (e) => {
                const fields = form.querySelectorAll('input[data-rules], textarea[data-rules]');
                let allValid = true;
                fields.forEach((input) => {
                    if (!validateField(input)) allValid = false;
                });
                if (!allValid) e.preventDefault();
            });
        });
    </script>
@endpush

