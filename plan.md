## Plan: Refactor Authentication and Onboarding Flow

**TL;DR - what, why, and how (your recommended approach).**  
Refactor the authentication flow to simplify registration (remove Step 2) and create a focused post-verification onboarding wizard. Move role-specific details to onboarding Step 1, add education/experience as Steps 2-3 for seekers only, and implement proper skip functionality with database tracking.

**Steps**
1. **Simplify Registration Form** - Remove Step 2 from register.blade.php, keep only email/password/confirm password/role radio
2. **Create Onboarding Layout** - Build `resources/views/seeker/onboarding/layout.blade.php` with centered card design (no header/sidebar)
3. **Build Profile Step** - Create `resources/views/seeker/onboarding/steps/profile.blade.php` with conditional fields (seekers: profile pic, job title, location; agencies: logo, name, team size, location, industry) + skip button
4. **Move Education Step** - Repurpose existing education.blade.php as `steps/education.blade.php` under new layout
5. **Move Experience Step** - Repurpose existing experience.blade.php as `steps/experience.blade.php` under new layout
6. **Update Routes** - Add new onboarding routes (profile, education, experience) and complete route for skipping
7. **Update Controllers** - Modify OnboardingController to handle new flow with proper timestamp logic:
   - Profile view: set `onboarding_first_login_seen_at` (marks profile step started)
   - Profile submit: only update profile fields (job_title, seeker_location), redirect to education
   - Profile skip: set `onboarding_completed_at`, redirect to dashboard
   - Education submit: set `onboarding_education_completed_at`, redirect to experience
   - Education skip: redirect to experience (don't set timestamp, intentional continue)
   - Experience submit: set `onboarding_experience_completed_at` AND `onboarding_completed_at`, redirect to dashboard
   - Experience skip: set `onboarding_completed_at`, redirect to dashboard (intentional exit)
8. **Update Authentication Logic** - Modify login redirect: if `onboarding_first_login_seen_at` is NULL, go to profile step; else check completion status
9. **Update Dashboard Logic** - Show onboarding nudges if `onboarding_completed_at` is NULL OR if critical fields missing (no education AND no experience)

**Relevant files**
- `resources/views/auth/register.blade.php` — Remove Step 2, simplify to basic registration
- `resources/views/seeker/onboarding/layout.blade.php` — New centered layout for onboarding steps
- `resources/views/seeker/onboarding/steps/profile.blade.php` — New profile step with conditional fields and skip
- `resources/views/seeker/onboarding/steps/education.blade.php` — Move existing education page to new structure
- `resources/views/seeker/onboarding/steps/experience.blade.php` — Move existing experience page to new structure
- `routes/web.php` — Add new onboarding routes
- `app/Http/Controllers/OnboardingController.php` — Update methods for new flow and skip handling
- `app/Http/Controllers/AuthenticatedSessionController.php` — Update first login redirect logic
- `app/Http/Controllers/SeekerDashboardController.php` — Update completion checks

**Verification**
1. Test complete registration flow: email/password/role → verification → login → onboarding profile step
2. Test seeker onboarding: profile → education → experience → dashboard
3. Test agency onboarding: profile → dashboard (skip education/experience)
4. Test skip functionality: skip from profile sets completed_at, skip from education/experience sets appropriate flags
5. Verify database timestamps are set correctly at each step
6. Test UX: centered cards, progress indicators, smooth transitions

**Decisions** 
- Keep existing seeker_educations and seeker_experiences tables unchanged
- For agencies, onboarding completes after profile step (no education/experience)
- Skip button in profile step sets onboarding_completed_at = now() to bypass entire flow
- Maintain existing email verification flow unchanged
- Use existing validation patterns and UI components for consistency

**Further Considerations** 
1. Should we add employer onboarding flow? (Currently only seekers have education/experience)
2. Consider adding progress persistence if user closes browser mid-onboarding
3. Add analytics tracking for onboarding completion rates

