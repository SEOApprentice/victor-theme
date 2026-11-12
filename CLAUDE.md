# Victor Theme: Project Context

Custom WordPress theme for **victormuhia.co.ke**, a personal portfolio and services site for Victor Muhia Ng'ang'a, an SEO specialist and WordPress developer in Nairobi, Kenya. The site pitches SEO and WordPress development services to prospective clients.

Built on the `_s` (underscores) starter, heavily customized. Local dev via Local (by Flywheel) at `victor-portfolio.local`; WP-CLI is available in the Site Shell. The domain is a `.co.ke` ccTLD (a strong Kenya geo-signal), not a `.com`. Never write `victormuhia.com` anywhere.

Theme path: `C:\Users\Victor Muhia\Local Sites\victor-portfolio\app\public\wp-content\themes\victor-theme`

## Brand identity

CSS custom properties live in `style.css` `:root`:
- `--navy #1F3864` primary, headings, nav
- `--navy-deep #101E38` dark sections (crawl strip, case cards, CTA bands)
- `--paper #F4F6F8` page background; `--card #FFFFFF` cards
- `--teal #16A394` primary accent, buttons; `--teal-deep #0E7D71` hover and accent text
- `--amber #F2B134` rank/star highlight only, used sparingly
- `--ink #1B2430` body text; `--ink-soft #5B6472` muted text; `--line #E1E5EA` borders

Fonts: Space Grotesk (display/headings), Inter (body), IBM Plex Mono (eyebrows, stat labels, badges, any "technical/data" UI text; this mono treatment is a deliberate signature).

Signature motif: the homepage hero mimics a Google SERP (mock browser bar + result card ranking #1). Breadcrumb-style eyebrows like `victormuhia.co.ke / services` echo it. Keep that visual language.

## Site structure

| Page | Slug | Rendered by |
|---|---|---|
| Home | (front page) | `front-page.php`. Sections: hero, crawl strip, services teaser, work teaser, about (`#about`), contact (`#contact`) |
| Services | `services` | `template-services.php` (`Template Name: Services`): two service blocks, 4-step process, FAQ via `<details>` |
| Case Study | `case-study` | `template-case-study.php`: LA Coach USA full-site redesign — Hero → Brief and approach → What I built (4 screenshots) → Measurement → Results (two `<table>`s, GA4 data) → What the data shows → Stack → CTA. Multilingual/hreflang bullet gated behind `VICTOR_CASE_CONFIRMED_HREFLANG` (default off); permission-to-publish sentence gated behind `VICTOR_CASE_CONFIRMED_PERMISSION` (default off). Define either constant (e.g. in `functions.php`) once confirmed to reveal that content. |
| Blog | (Posts page) | `home.php` (grid listing), `single.php` (post) |

`header.php` / `footer.php` are shared. Never remove `wp_head()`, `wp_body_open()`, `wp_footer()`; plugins depend on them. Homepage Services/Work sections are deliberately short teasers linking to the full pages (avoids keyword cannibalization). Keep them thin.

### Nav pattern (important)
Services/Work/Blog use real permalinks (`get_page_by_path('services')`, `get_page_by_path('case-study')`, `get_option('page_for_posts')`). About/Contact are in-page anchors and must be prefixed when not on the homepage:
```php
$home_prefix = is_front_page() ? '' : home_url( '/' );
// then: $home_prefix . '#contact'
```
Any new anchor CTA on a non-homepage template must use `home_url('/#contact')`. Renaming a page slug silently breaks `get_page_by_path()` links: grep for it first.

## Contact form (done, no plugin)
Custom WordPress AJAX handler:
- Honeypot field (`.hp-field`, hidden off-screen via CSS, not `display:none`). If filled, the handler returns success without emailing.
- `functions.php`: `victor_handle_contact_form()` on both `wp_ajax_victor_contact_submit` and `wp_ajax_nopriv_victor_contact_submit`. Verifies nonce `victor_contact_nonce`, validates and sanitizes, sends two `wp_mail()` emails: notification to vmuhian@gmail.com and an auto-reply to the submitter.
- Nonce and AJAX URL reach JS via `wp_localize_script()` as `victorContactData`.
- `js/main.js` submits via `fetch()` POST with `action: 'victor_contact_submit'`.
- Fields: name, email, website (optional), "interested in" select, message. Changing fields means updating BOTH the PHP handler and `main.js`.
- No entry storage; submissions are only emailed.

### Email delivery
- Locally, Local's Mailpit (`localhost:10000`) catches all outgoing mail, so test emails never reach a real inbox.
- WP Mail SMTP is installed. Plan: Brevo SMTP (`smtp-relay.brevo.com`, port 587, TLS), From `vmuhian@gmail.com` (must match a verified Brevo sender). SMTP credentials are entered in wp-admin only. Never commit or paste credentials into files.

## SEO
Yoast SEO is active. Every page and post needs its own SEO title, meta description and focus keyphrase.
- Primary target: **"WordPress developer and SEO specialist in Nairobi"** (the combined skill set is under-contested locally). Do not target "SEO services in Kenya" head-on; established competitors own it.
- Home keyphrase set. Services and Case Study keyphrases/meta may not be set yet: verify in wp-admin.
- Secondary targets, via blog posts: "freelance WordPress and SEO specialist Kenya", "SEO and web design for small business Nairobi". Avoid leading with "affordable".
- Yoast Social tab holds the OG share image (1200×630, regenerated for `victormuhia.co.ke`).
- Keep "Discourage search engines" checked until launch.

## Images
- Static brand assets live in `/images/` (e.g. `victor-photo.jpg`, 500×500, About headshot), referenced via `get_template_directory_uri()`. Blog featured images use the media library.
- Compress and size everything before adding (the site's pitch is performance). Always set descriptive alt text.

## WhatsApp CTA
Number: +254 705 991 249 (`https://wa.me/254705991249`). Intended: a floating `.whatsapp-float` button in `footer.php` after `</footer>`, plus a clickable phone number in the contact section. Verify this is actually in place before assuming.

## Not done yet
- Floating WhatsApp button and clickable number: implemented (`footer.php`, `front-page.php`).
- WP Mail SMTP / Brevo not fully configured and verified end-to-end.
- No favicon. No caching/performance plugin.
- Hosting: leaning Hostinger (multi-site, low renewal, free SSL/email). Not yet purchased. Site is local-only.
- No testimonials yet. Do NOT add placeholder or fake testimonials.
- Only one case study. If more are added, consider a custom post type.
- Need Google Business Profile for the business.
- Confirm hreflang (WordPress Multisite, es/ja subdomains) is actually live, then flip `VICTOR_CASE_CONFIRMED_HREFLANG` on in the case study.
- Get LA Coach USA's permission to publish the case-study figures, then flip `VICTOR_CASE_CONFIRMED_PERMISSION` on.
- Case-study screenshots already added to `/images/case-study/` (`home-hero.jpg`, `home-destinations.jpg`, `destination-joshua-tree.jpg`, `blog-sequoia-guide.jpg`).
- Upload the new OG image (`images/victor-muhia-og-image.jpg`) in Yoast on the case-study page.

## Working conventions
- Match existing code style. WP-standard PHP (tabs), kebab-case CSS classes.
- No build tooling (no npm/webpack/Sass); plain PHP/CSS/vanilla JS.
- Always escape dynamic output: `esc_url()`, `esc_html()`, `esc_attr()`.
- No automated tests. Verify by refreshing `victor-portfolio.local` and checking visually; test forms with real submissions (check Mailpit).
- Work in small steps; commit after each working change. Show diffs before large edits.
