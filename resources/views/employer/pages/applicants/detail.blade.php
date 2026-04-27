@extends('employer.layouts.app')

@section('page_title', 'Applicant Detail')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Sarah Chen</h2>
                <p class="text-on-surface-variant text-sm mt-1">Senior Product Designer - Applied 2 days ago</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Back to Applicants
                </button>
                <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                    Schedule Interview
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="lg:col-span-1">
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 rounded-xl bg-primary-light flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-primary text-2xl">person</span>
                        </div>
                        <h3 class="text-lg font-bold">Sarah Chen</h3>
                        <p class="text-on-surface-variant/60 text-sm">San Francisco, CA</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">email</span><span class="text-sm">sarah.chen@email.com</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">phone</span><span class="text-sm">+1 (555) 123-4567</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">school</span><span class="text-sm">Stanford University</span></div>
                        <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">work</span><span class="text-sm">5+ years experience</span></div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-outline-variant/40">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-on-surface-variant/60">Application Status</span>
                            <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Shortlisted</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">description</span>
                        Cover Letter
                    </h3>
                    <div class="prose prose-sm max-w-none text-on-surface-variant">
                        <p>Dear Hiring Team,</p>
                        <p>I am excited to apply for the Senior Product Designer position at your company. With over 5 years of experience in product design, I have worked on diverse projects that shaped my user-centered design approach.</p>
                        <p>My background includes leading design systems at scale, conducting user research, and collaborating closely with engineering teams to deliver exceptional user experiences.</p>
                        <p>I would love the chance to discuss how my skills align with your team.</p>
                        <p>Best regards,<br>Sarah Chen</p>
                    </div>
                </div>

                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">work</span>
                        Experience
                    </h3>
                    <div class="space-y-4">
                        <div class="border-l-2 border-primary pl-4">
                            <h4 class="font-bold">Senior Product Designer</h4>
                            <p class="text-on-surface-variant/60 text-sm">TechCorp Inc. - 2021 - Present</p>
                            <p class="text-sm mt-2">Led design for core product features, managed design systems, and conducted user research.</p>
                        </div>
                        <div class="border-l-2 border-outline-variant pl-4">
                            <h4 class="font-bold">Product Designer</h4>
                            <p class="text-on-surface-variant/60 text-sm">StartupXYZ - 2019 - 2021</p>
                            <p class="text-sm mt-2">Designed interfaces for web and mobile apps, collaborating with cross-functional teams.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">psychology</span>
                        Skills & Expertise
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">Figma</span>
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">Sketch</span>
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">User Research</span>
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">Prototyping</span>
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">Design Systems</span>
                        <span class="px-3 py-1 bg-primary-light text-primary text-sm font-medium rounded-full">Adobe Creative Suite</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-center gap-4">
            <button class="px-6 py-3 bg-surface-high text-on-surface font-bold rounded-full border border-outline-variant/40 hover:bg-surface-low transition-all" type="button">
                Reject Application
            </button>
            <button class="px-6 py-3 bg-blue-100 text-blue-700 font-bold rounded-full hover:bg-blue-200 transition-all" type="button">
                Move to Next Round
            </button>
            <button class="gradient-primary text-white px-8 py-3 rounded-full font-bold shadow-md hover:opacity-90 transition-all" type="button">
                Schedule Interview
            </button>
        </div>
    </div>
</main>
@endsection
