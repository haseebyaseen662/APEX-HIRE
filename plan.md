## Plan: Clone Seeker Dashboard Styling for Employer

TL;DR - Replace Employer layout HTML and classes with the Seeker dashboard layout, while preserving Employer route names and removing deprecated Employer-specific CSS/JS assets.

**Steps**
1. Review the Seeker frontend structure from `resources/views/seeker/layouts/app.blade.php`, `sidebar.blade.php`, and `header.blade.php`.
2. Replace Employer layout files with matching Seeker HTML structure and Tailwind class strings.
   - `resources/views/employer/layouts/app.blade.php`
   - `resources/views/employer/layouts/sidebar.blade.php`
   - `resources/views/employer/layouts/header.blade.php`
3. Remove deprecated Employer-only asset references in `employer/layouts/app.blade.php`:
   - `https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css`
   - `{{ asset('employer/assets/css/style.css') }}`
   - `{{ asset('employer/assets/js/main.js') }}`
   - Employer-only body classes like `portal-shell`
4. Ensure Employer blade conditionals and route functions use Employer namespaced routes instead of Seeker routes.
   - Example: `route('seeker.dashboard')` → `route('employer.dashboard')`
   - Example: active state checks use `request()->routeIs('employer.*')`
5. Keep the Seeker styling logic identical across class strings.
   - If Seeker sidebar uses `nav-link`, Employer sidebar uses the same `nav-link` class string.
   - If Seeker header uses `gradient-primary`, Employer header uses the same class.
6. Validate the employer layout renders with identical structure: sidebar includes overlay, top header fixed, mobile bottom nav, and footer removed if present in the Employer app.

**Relevant files**
- `/home/haseeb_reignx/Desktop/Projects/JOB PORTAL SAAS/resources/views/employer/layouts/app.blade.php`
- `/home/haseeb_reignx/Desktop/Projects/JOB PORTAL SAAS/resources/views/employer/layouts/sidebar.blade.php`
- `/home/haseeb_reignx/Desktop/Projects/JOB PORTAL SAAS/resources/views/employer/layouts/header.blade.php`

**Verification**
1. Open Employer dashboard and compare visual layout to Seeker dashboard for sidebar, header, and mobile nav.
2. Confirm no `boxicons.min.css` or `employer/assets/css/style.css` remains in `employer/layouts/app.blade.php`.
3. Confirm the Employer `app.blade.php` uses the same Tailwind CDN and config block as Seeker.
4. Confirm sidebar active state logic uses `request()->routeIs('employer.*')` and Employer route URLs.
5. Inheritance Check: verify that `@extends('layouts.app')` or any base layout usage matches between Seeker and Employer app templates.
6. Alpine State Copy: verify whether Seeker uses `x-data`/`@click` state in the sidebar; if not, preserve the same open/close interaction model and do not introduce conflicting Employer-only Alpine wiring.
7. Icon Audit: confirm that Employer sidebar icons match the Seeker icon set exactly, using the same icon names or SVG markup.
8. Final Diff: after completion, compare rendered styles in browser inspector between Seeker and Employer pages to catch any stray margin/padding differences.

**Decisions**
- The Employer views will be updated to match Seeker layout structure exactly, not merged with the existing Employer-specific styles.
- Any Employer-specific assets and JS are deprecated and removed in favor of the Seeker frontend presentation layer.
- Employer route names and permissions remain Employer-specific; CSS class strings remain identical to Seeker.

**Further Considerations**
1. If Employer pages need a unique title or CTA text, keep the same Seeker layout structure but use Employer-appropriate text inside the same classes.
2. If `resources/views/employer/layouts/footer.blade.php` is still included, it may need removal or adaptation to match the Seeker layout.
