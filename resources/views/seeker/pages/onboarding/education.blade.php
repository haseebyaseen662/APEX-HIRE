{{-- resources/views/seeker/onboarding/education.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Education History — Apex Hire</title>
    <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
    <script src="{{ asset('website/assets/js/main.js') }}" defer></script>

    <style>
        .field-error {
            border-color: #ba1a1a !important;
            outline: none !important;
            box-shadow: 0 0 0 3px rgba(186, 26, 26, 0.2) !important;
        }
        .text-red-500 {
            color: #ba1a1a !important;
        }
        /* Error message styling */
        [data-error] {
            display: block;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            color: #ba1a1a;
            font-weight: 500;
            line-height: 1.25;
        }
        [data-error].hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased">

    <main class="flex-1 flex flex-col items-center justify-start py-10 px-4 sm:px-6">
        <div class="w-full max-w-3xl flex flex-col gap-8">

            {{-- Progress --}}
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-primary" id="step-counter">Step 1 of 2</span>
                    <span class="text-sm text-slate-500 dark:text-slate-400" id="step-title">Education History</span>
                </div>
                <div class="relative h-2 w-full rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                    <div class="absolute top-0 left-0 h-full rounded-full bg-primary transition-all duration-300" id="progress-bar" style="width: 50%;"></div>
                </div>
            </div>

            {{-- Title --}}
            <div class="flex flex-col gap-2 text-left">
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Education History</h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Tell us about your academic background.</p>
            </div>

            <div class="rounded-xl bg-white dark:bg-slate-800 p-6 sm:p-8 shadow-sm border border-slate-100 dark:border-slate-700">

                {{-- Session flash (Laravel) --}}
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

                            {{-- Divider (hidden for first) --}}
                            <hr class="entry-divider hidden border-slate-200 dark:border-slate-700">

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
                        {{-- /Entry #1 --}}

                    </div>
                    {{-- /educationEntries --}}

                    {{-- ── Form Footer ── --}}
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 pt-6 border-t border-slate-200 dark:border-slate-700 mt-8">

                        {{-- Add Another --}}
                        <button
                            type="button"
                            id="addEntryBtn"
                            class="flex items-center justify-center gap-2 text-primary font-bold px-6 py-3 hover:bg-primary/5 rounded-xl transition-all text-sm border border-primary/20 hover:border-primary/40"
                        >
                            <i class="bx bx-plus text-xl"></i>
                            Add Another Education
                        </button>

                        {{-- Continue --}}
                        <button
                            type="submit"
                            class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20 w-full sm:w-auto"
                        >
                            <span>Continue to Step 2</span>
                            <i class="bx bx-arrow-forward text-lg"></i>
                        </button>

                    </div>

                </form>
            </div>

        </div>
    </main>

    {{-- ============================================================
         JS — Dynamic "Add Another Education" entries & Validation
    ============================================================ --}}
    <script>
        let entryCount = 1;

        // Template for a new education entry
        function buildEntryHTML(index) {
            return `
            <div class="education-entry space-y-6" data-index="${index}">

                <div class="entry-header flex items-center justify-between pb-4 border-b border-slate-200 dark:border-slate-700">
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

                <hr class="entry-divider border-slate-200 dark:border-slate-700">

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

            </div>`;
        }

        // Add entry
        document.getElementById('addEntryBtn').addEventListener('click', function () {
            entryCount++;
            const container = document.getElementById('educationEntries');
            const div = document.createElement('div');
            div.innerHTML = buildEntryHTML(entryCount);
            const entry = div.firstElementChild;

            // Animate in
            entry.style.opacity = '0';
            entry.style.transform = 'translateY(12px)';
            container.appendChild(entry);
            requestAnimationFrame(() => {
                entry.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                entry.style.opacity = '1';
                entry.style.transform = 'translateY(0)';
            });

            // Scroll into view
            setTimeout(() => entry.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);

            // Wire remove button
            entry.querySelector('.remove-entry').addEventListener('click', function () {
                removeEntry(entry);
            });

            // Attach live validation to new inputs
            entry.querySelectorAll('input[data-rules], textarea[data-rules]').forEach(attachLiveValidation);
        });

        // Remove entry
        function removeEntry(entry) {
            entry.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
            entry.style.opacity = '0';
            entry.style.transform = 'translateY(-8px)';
            setTimeout(() => {
                entry.remove();
                reindexEntries();
            }, 250);
        }

        // Re-index visible entries after removal
        function reindexEntries() {
            const entries = document.querySelectorAll('.education-entry');
            entries.forEach((entry, i) => {
                const numEl = entry.querySelector('.entry-num');
                if (numEl) numEl.textContent = i + 1;

                // Re-index input names
                entry.querySelectorAll('input, textarea').forEach(el => {
                    if (el.name) {
                        el.name = el.name.replace(/education\[\d+\]/, `education[${i}]`);
                    }
                });
            });
            entryCount = entries.length;
        }

        // ─── VALIDATION ENGINE ────────────────────────────────────────────────
        const runRules = (input) => {
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';
            const value = input.value.trim();

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) {
                    return `${label} is required.`;
                }
                if (rule.startsWith('min:')) {
                    const min = parseInt(rule.split(':')[1]);
                    if (value.length > 0 && value.length < min) {
                        return `${label} must be at least ${min} characters.`;
                    }
                }
            }

            return null;
        };

        // Apply or clear visual state on an input
        const setFieldState = (input, errorMessage) => {
            const errorEl = document.querySelector(`[data-error="${input.id}"]`);

            console.log(`Setting state for ${input.id}: ${errorMessage}, element found: ${!!errorEl}`);

            if (errorMessage) {
                input.classList.add('field-error');
                if (errorEl) {
                    errorEl.textContent = errorMessage;
                    errorEl.classList.remove('hidden');
                    console.log(`Message set: "${errorMessage}", visible: ${!errorEl.classList.contains('hidden')}`);
                }
            } else {
                input.classList.remove('field-error');
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
            }
        };

        const validateField = (input) => {
            const error = runRules(input);
            setFieldState(input, error);
            return error === null;
        };

        // ─── REAL-TIME VALIDATION ──────────────────────────────────────────────
        const attachLiveValidation = (input) => {
            let touched = false;

            const onValidate = () => {
                console.log(`Field ${input.id} blurred, running validation`);
                touched = true;
                validateField(input);
            };

            const onInput = () => {
                if (touched) {
                    console.log(`Field ${input.id} changed, validating`);
                    validateField(input);
                }
            };

            input.addEventListener('blur', onValidate);
            input.addEventListener('input', onInput);
            input.addEventListener('change', onInput);

            console.log(`Validation listeners attached to ${input.id}`);
        };

        // Attach validation to initial fields
        const initialInputs = document.querySelectorAll('#educationForm input[data-rules], #educationForm textarea[data-rules]');
        console.log(`Found ${initialInputs.length} inputs with data-rules`);
        initialInputs.forEach(input => {
            console.log(`Attaching validation to ${input.id}`);
            attachLiveValidation(input);
        });

        // Form submission validation
        document.getElementById('educationForm').addEventListener('submit', function (e) {
            const fields = this.querySelectorAll('input[data-rules], textarea[data-rules]');
            let allValid = true;
            fields.forEach(input => {
                if (!validateField(input)) allValid = false;
            });
            if (!allValid) {
                e.preventDefault();
            }
        });

        // Save & Exit (if needed)
        function handleSaveExit() {
            const form = document.getElementById('educationForm');
            const hiddenAction = document.createElement('input');
            hiddenAction.type  = 'hidden';
            hiddenAction.name  = 'save_exit';
            hiddenAction.value = '1';
            form.appendChild(hiddenAction);
            form.submit();
        }

        // Update progress bar based on form validity
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('progress-bar');
            if (progressBar) {
                progressBar.style.width = '50%';
            }

            // Debug: Check if form exists and elements are ready
            console.log('Education form validation initialized');
            const form = document.getElementById('educationForm');
            console.log('Form found:', !!form);

            if (form) {
                const schoolInput = document.getElementById('school0');
                const schoolError = document.querySelector('[data-error="school0"]');
                console.log('School input found:', !!schoolInput);
                console.log('School error element found:', !!schoolError);

                if (schoolError) {
                    console.log('Error element HTML:', schoolError.outerHTML);
                }
            }
        });
    </script>

</body>
</html>
