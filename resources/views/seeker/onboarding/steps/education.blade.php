@extends('seeker.onboarding.layout')

@section('page_title', 'Education History — Apex Hire')

@section('progress')
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <span class="text-sm font-semibold text-primary" id="step-counter">Step 2 of 3</span>
            <span class="text-sm text-slate-500 dark:text-slate-400" id="step-title">Education History</span>
        </div>
        <div class="relative h-2 w-full rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
            <div class="absolute top-0 left-0 h-full rounded-full bg-primary transition-all duration-300" id="progress-bar" style="width: 66.66%;"></div>
        </div>
    </div>
@endsection

@section('header')
    <div class="flex items-start justify-between gap-4">
        <div class="flex flex-col gap-2 text-left">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Education History</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Tell us about your academic background.</p>
        </div>
        <a href="{{ route('seeker.onboarding.experience') }}" class="flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition-colors border border-slate-300 dark:border-slate-600 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 whitespace-nowrap mt-1">
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

    <form method="POST" action="{{ route('seeker.onboarding.education.store') }}" id="educationForm" novalidate class="flex flex-col gap-6">
        @csrf

        {{-- Education entries container --}}
        <div id="educationEntries" class="space-y-8">

            {{-- ── Entry #1 ── --}}
            <div class="education-entry space-y-6" data-index="1">

                {{-- Entry header (hidden for first, shown for extras) --}}
                <div class="entry-header hidden items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400">
                        Education #<span class="entry-num">2</span>
                    </span>
                    <button
                        type="button"
                        class="remove-entry flex items-center gap-1.5 text-xs font-bold text-red-500 hover:text-red-700 transition-colors px-3 py-1.5 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-full"
                    >
                        <i class="bx bx-trash text-base"></i>
                        Remove
                    </button>
                </div>

                {{-- School / University --}}
                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="school0">
                        School / University <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="school0"
                        name="education[0][school]"
                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('education.0.school') field-error @enderror"
                        placeholder="e.g. University of Lahore"
                        value="{{ old('education.0.school') }}"
                        data-rules="required|min:2" data-label="School/University"
                    />
                    <p class="text-xs text-red-500 hidden mt-1" data-error="school0"></p>
                    @error('education.0.school')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Degree + Field of Study --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="degree0">
                            Degree <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="degree0"
                            name="education[0][degree]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('education.0.degree') field-error @enderror"
                            placeholder="e.g. Bachelor of Science"
                            value="{{ old('education.0.degree') }}"
                            data-rules="required|min:2" data-label="Degree"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="degree0"></p>
                        @error('education.0.degree')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="field0">
                            Field of Study <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="field0"
                            name="education[0][field]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('education.0.field') field-error @enderror"
                            placeholder="e.g. Computer Science"
                            value="{{ old('education.0.field') }}"
                            data-rules="required|min:2" data-label="Field of Study"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="field0"></p>
                        @error('education.0.field')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Start Date + End Date --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="startDate0">
                            Start Date <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="date"
                            id="startDate0"
                            name="education[0][start_date]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('education.0.start_date') field-error @enderror"
                            value="{{ old('education.0.start_date') }}"
                            data-rules="required" data-label="Start Date"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="startDate0"></p>
                        @error('education.0.start_date')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="endDate0">
                            End Date (or Expected) <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="date"
                            id="endDate0"
                            name="education[0][end_date]"
                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('education.0.end_date') field-error @enderror"
                            value="{{ old('education.0.end_date') }}"
                            data-rules="required" data-label="End Date"
                        />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="endDate0"></p>
                        @error('education.0.end_date')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Description --}}
                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="description0">
                        Description &amp; Achievements
                    </label>
                    <textarea
                        id="description0"
                        name="education[0][description]"
                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white resize-none @error('education.0.description') field-error @enderror"
                        placeholder="Briefly describe your major focus, thesis, or key academic highlights..."
                        rows="4"
                    >{{ old('education.0.description') }}</textarea>
                    <p class="text-xs text-red-500 hidden mt-1" data-error="description0"></p>
                    @error('education.0.description')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        {{-- ── Form Footer ── --}}
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 pt-6 border-t border-slate-200 dark:border-slate-700 mt-8">
            <button
                type="button"
                id="addEntryBtn"
                class="flex items-center justify-center gap-2 text-primary font-bold px-6 py-3 hover:bg-primary/5 rounded-xl transition-all text-sm border border-primary/20 hover:border-primary/40"
            >
                <i class="bx bx-plus text-xl"></i>
                Add Another Education
            </button>

            <button
                type="submit"
                class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20 w-full sm:w-auto"
            >
                <span>Continue to Step 3</span>
                <i class="bx bx-arrow-forward text-lg"></i>
            </button>
        </div>
    </form>
@endsection

@push('scripts')
    {{-- JS — Dynamic "Add Another Education" entries & Validation --}}
    <script>
        let entryCount = 1;

        function buildEntryHTML(index) {
            return `
            <div class="education-entry space-y-6" data-index="${index}">

                <div class="entry-header -mt-8 relative z-10 flex items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-700">
                    <span class="text-xs font-bold uppercase tracking-widest text-slate-500 dark:text-slate-400">
                        Education #<span class="entry-num">${index}</span>
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
                        School / University <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="school${index - 1}" name="education[${index - 1}][school]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. University of Lahore" data-rules="required|min:2" data-label="School/University" />
                    <p class="text-xs text-red-500 hidden mt-1" data-error="school${index - 1}"></p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Degree <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="degree${index - 1}" name="education[${index - 1}][degree]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. Bachelor of Science" data-rules="required|min:2" data-label="Degree" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="degree${index - 1}"></p>
                    </div>
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Field of Study <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="field${index - 1}" name="education[${index - 1}][field]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" placeholder="e.g. Computer Science" data-rules="required|min:2" data-label="Field of Study" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="field${index - 1}"></p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            Start Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="startDate${index - 1}" name="education[${index - 1}][start_date]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" data-rules="required" data-label="Start Date" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="startDate${index - 1}"></p>
                    </div>
                    <div class="space-y-1">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                            End Date (or Expected) <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="endDate${index - 1}" name="education[${index - 1}][end_date]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white" data-rules="required" data-label="End Date" />
                        <p class="text-xs text-red-500 hidden mt-1" data-error="endDate${index - 1}"></p>
                    </div>
                </div>

                <div class="space-y-1">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                        Description &amp; Achievements
                    </label>
                    <textarea id="description${index - 1}" name="education[${index - 1}][description]" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white resize-none" placeholder="Briefly describe your major focus, thesis, or key academic highlights..." rows="4"></textarea>
                    <p class="text-xs text-red-500 hidden mt-1" data-error="description${index - 1}"></p>
                </div>

                <hr class="border-slate-200 dark:border-slate-700 mt-6">
            </div>
            `;
        }

        function attachValidationToEntry(entry) {
            const inputs = entry.querySelectorAll('input[data-rules], textarea[data-rules]');
            inputs.forEach((input) => {
                input.addEventListener('blur', () => validateField(input));
                input.addEventListener('input', () => validateField(input));
                input.addEventListener('change', () => validateField(input));
            });
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
                    const entry = btn.closest('.education-entry');
                    if (!entry) return;
                    entry.remove();
                };
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const addBtn = document.getElementById('addEntryBtn');
            const container = document.getElementById('educationEntries');

            if (addBtn && container) {
                addBtn.addEventListener('click', () => {
                    entryCount += 1;
                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = buildEntryHTML(entryCount);
                    const entry = wrapper.firstElementChild;
                    container.appendChild(entry);
                    attachValidationToEntry(entry);
                    wireRemoveButtons();
                });
            }

            attachValidationToEntry(document);
            wireRemoveButtons();

            const form = document.getElementById('educationForm');
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

