@extends('seeker.layouts.app')

@section('page_title', 'Profile')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Profile</h2>
                <p class="text-on-surface-variant text-sm mt-1">Review your profile details before you start applying.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Preview Profile
                </button>
                <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                    Save Draft
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-5">
            <div class="xl:col-span-8 space-y-5">
                <section class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex flex-col sm:flex-row sm:items-start gap-6">
                        <div class="w-28 h-28 rounded-2xl border-2 border-dashed border-outline-variant/40 bg-surface-low flex items-center justify-center shrink-0 overflow-hidden">
                            @if (!empty($profile->profile_picture))
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($profile->profile_picture) }}" alt="Profile picture" class="w-full h-full object-cover">
                            @else
                                <span class="material-symbols-outlined text-5xl text-on-surface-variant">person</span>
                            @endif
                        </div>

                        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Full Name</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="text" value="{{ $user->name }}" readonly>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Email Address</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="email" value="{{ $user->email }}" readonly>
                            </div>
                            <div class="space-y-1 sm:col-span-2">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Professional Headline</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm" type="text" value="{{ $profile->job_title ?? 'Add a headline' }}" readonly>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <div>
                            <h3 class="text-lg font-bold">Profile Details</h3>
                            <p class="text-sm text-on-surface-variant">These fields look editable, but this page is UI-only for now.</p>
                        </div>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-light text-primary text-xs font-bold uppercase tracking-widest">
                            Draft Mode
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-on-surface-variant" for="headline">Job Title</label>
                            <input id="headline" type="text" class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" value="{{ $profile->job_title ?? 'Laravel Developer' }}" readonly>
                        </div>
                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-on-surface-variant" for="location">Location</label>
                            <input id="location" type="text" class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" value="{{ $profile->seeker_location ?? 'Karachi, Pakistan' }}" readonly>
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Bio</label>
                            <textarea class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm min-h-28" readonly>Focus on clean builds, maintainable systems, and fast delivery.</textarea>
                        </div>
                    </div>
                </section>
            </div>

            <div class="xl:col-span-4 space-y-5">
                <section class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Profile Assets</h3>
                    <div class="space-y-4">
                        <div class="rounded-xl border border-dashed border-outline-variant/40 bg-surface-low p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-xl bg-primary-light flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">photo_camera</span>
                                </div>
                                <div>
                                    <p class="font-semibold">Profile Photo</p>
                                    <p class="text-xs text-on-surface-variant">Recommended 400x400px</p>
                                </div>
                            </div>
                            <button class="mt-4 w-full rounded-full border border-outline-variant/40 px-4 py-2 text-xs font-bold uppercase tracking-widest hover:bg-surface-high transition-colors" type="button">
                                Change Photo
                            </button>
                        </div>

                        <div class="rounded-xl border border-dashed border-outline-variant/40 bg-surface-low p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-xl bg-primary-light flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary">description</span>
                                </div>
                                <div>
                                    <p class="font-semibold">Resume</p>
                                    <p class="text-xs text-on-surface-variant">PDF, DOCX up to 2MB</p>
                                </div>
                            </div>
                            <button class="mt-4 w-full rounded-full border border-outline-variant/40 px-4 py-2 text-xs font-bold uppercase tracking-widest hover:bg-surface-high transition-colors" type="button">
                                Upload Resume
                            </button>
                        </div>
                    </div>
                </section>

                <section class="grid grid-cols-1 gap-4">
                    <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Experiences</p>
                            <p class="text-2xl font-extrabold">{{ $experiences->count() }}</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">work_history</span>
                        </div>
                    </div>

                    <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Education Records</p>
                            <p class="text-2xl font-extrabold">{{ $educations->count() }}</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">school</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
