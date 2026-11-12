# Claude Code prompt: update the LA Coach USA case study across the site

Paste everything below the line into Claude Code, run from the theme root (`victor-theme`). Read `CLAUDE.md` first.

---

Read `CLAUDE.md` before changing anything. Work in small steps, show me a diff before each large edit, and commit after each working step (one commit per numbered step).

## Context

The LA Coach USA case study on this site describes an old, narrow project. I have since redesigned and rebuilt the whole of lacoachusa.com, so the case study, the homepage teaser and stats, the OG image and the Yoast fields all need replacing. Do not compare before and after anywhere. Present only the current site and its recent results.

## Hard rules

- No fake testimonials. No invented numbers. Use only the figures given below.
- No GTM, GA4 or Looker Studio IDs or links anywhere in the output.
- Call them "lead actions" (taps and clicks), never "leads" or "bookings" on their own.
- Anything marked `[CONFIRM]` below must NOT go live. Wrap it in a PHP comment or a `defined( 'VICTOR_CASE_CONFIRMED_HREFLANG' )` guard (default off) so I can switch it on once confirmed.
- Escape all output (`esc_html`, `esc_url`, `esc_attr`). Nav anchors on non-home templates must use `home_url( '/#contact' )`.
- Keep the existing visual language (SERP motif, mono eyebrows, navy/teal/amber tokens). No new build tooling, no new plugins.
- Never write `victormuhia.com`. The domain is `victormuhia.co.ke`.

## Step 1: Rewrite `template-case-study.php`

First show me the current section structure and list the old stats you are removing. Then replace the Challenge / Strategy / Results / What's Next structure with this one, keeping the page's existing markup patterns and classes where they fit:

1. **Hero.** Eyebrow `victormuhia.co.ke / case-study`. H1: `LA Coach USA: a full-site redesign, rebuilt for search and for leads`. Sub: `I redesigned and rebuilt lacoachusa.com end to end in Elementor Pro and set up lead tracking. In the two months to 11 November 2026 the site recorded 1,038 lead actions, 671 of them from Google organic search.`
2. **Brief and approach.** Text: "LA Coach USA is a Los Angeles charter bus and group-tour operator selling to visitors who mostly plan trips online. I took on the whole website, not a single page: a new visual identity, new page templates for every section, a multilingual structure and a measurement layer that shows which pages produce enquiries." Then three parts as a list:
   - Design the system first: a navy, blue and gold palette with Poppins and Inter, applied the same way on every page.
   - Build for search: destination pages and blog guides built around the trips people search for, with FAQ structured data and clean internal linking.
   - Track what matters: chat taps, WhatsApp, forms, phone and email clicks, captured as separate events.
3. **What I built.** Bullets:
   - Design system: one set of buttons, cards and spacing across the site.
   - Page templates: every destination page follows the same four-section pattern, built with HTML widgets in Elementor Pro on Hello Elementor to keep markup light.
   - Blog: trip-planning guides (Los Angeles to Sequoia, Los Angeles to Yosemite, getting around LA without a car), each linking to the relevant tour pages.
   - Forms and chat: JotForm and HubSpot forms plus a live chat widget.
   - FAQ markup: FAQ sections carry JSON-LD.
   - Multilingual structure `[CONFIRM]`: WordPress Multisite with Spanish and Japanese subdomains and hreflang tags (en, es, ja, x-default). Guard this bullet behind the confirmation constant.
4. **Measurement.** "I set up Google Tag Manager with 16 tags, 13 triggers and 8 variables, sending data to one GA4 property." Bullets: delayed loading (analytics fires after the visitor interacts or a timer runs out, keeping it off the critical rendering path); lead events (live chat, WhatsApp, form including thank-you page confirmation, phone, email, Messenger, Instagram, button clicks, each its own event); engagement events (scroll depth, time on page, multi-page session); a site-language variable on events `[CONFIRM: only mention languages if the hreflang guard is on]`; a Looker Studio dashboard for reporting.
5. **Results: two-month snapshot.** Caption: `GA4 data, 12 September to 11 November 2026 (61 days).` Two tables, built as accessible `<table>` elements with the site's table styling:

   Table A, headline metrics:
   | Metric | Value |
   |---|---|
   | Active users | about 2,200 |
   | Sessions | 3,103 |
   | New users | 99% of users |
   | Engaged users | 91% |
   | Average engagement time | 1 min 1 sec |
   | Lead actions, total | 1,038 |
   | Live chat taps | 985, from 865 users |
   | WhatsApp taps | 25 |
   | Email clicks | 17 |
   | Phone clicks | 7 |
   | Form submissions | 4 |

   Table B, sources:
   | Traffic source | Sessions | Lead actions |
   |---|---|---|
   | Google organic | 1,398 | 671 |
   | Direct | 1,048 | 153 |
   | chatgpt.com | 198 | 59 |
   | Google referral | 114 | 25 |
   | Bing organic | 96 | 30 |
   | DuckDuckGo organic | 33 | 18 |
   | Yahoo organic | 39 | 15 |

6. **What the data shows.** Bullets:
   - Search drives enquiries: Google organic brought 45% of sessions (1,398 of 3,103) and 65% of lead actions (671 of 1,038).
   - Blog guides earn their place: the Los Angeles to Sequoia guide alone brought 224 sessions and 99 lead actions; the Yosemite guides and the "getting around LA without a car" post added 83, 82 and 77. The homepage was the top landing page with 560 sessions and 243 lead actions.
   - Visitors reach for chat first: 865 users tapped live chat, about 39% of all visitors.
   - AI assistants send real traffic: chatgpt.com delivered 198 sessions and 59 lead actions, and Gemini and Copilot added 6 more.
   - Service pages are being found: the Sprinter van and charter bus service pages each drew over 100 page views.
   - Audience: 1,393 users on desktop and 791 on mobile.

   Closing note, styled as a small caveat: `Lead actions are taps and clicks, not confirmed bookings, and chat taps are 95% of them (985 of 1,038). Figures are shared with LA Coach USA's permission.` Put the permission sentence behind a `defined( 'VICTOR_CASE_CONFIRMED_PERMISSION' )` guard, default off, so it only shows once I have their OK.
7. **Stack.** Plain line: `WordPress Multisite, Hello Elementor, Elementor Pro, custom HTML/CSS widgets, JotForm, HubSpot, Google Tag Manager, GA4, Looker Studio.` Do not name the hosting provider.
8. **Closing CTA.** Keep the existing contact CTA band using `home_url( '/#contact' )`.

Screenshots: four files are already in `images/case-study/` (I copied them in before running this prompt): `home-hero.jpg`, `home-destinations.jpg`, `destination-joshua-tree.jpg`, `blog-sequoia-guide.jpg`, each 1280x597. Use them as figures with captions and descriptive alt text:
- In "What I built": `home-hero.jpg` (alt: "LA Coach USA homepage hero with navigation, headline and Book now button"), `home-destinations.jpg` (alt: "Destination cards on the LA Coach USA homepage"), `destination-joshua-tree.jpg` (alt: "Joshua Tree destination page with breadcrumb, headline and introduction"), `blog-sequoia-guide.jpg` (alt: "Los Angeles to Sequoia National Park travel guide, blog post header").
- Use `width="1280" height="597"`, `loading="lazy"` (not on the first figure), and `max-width: 100%` so they scale on mobile. Keep each figure under about 100 KB; do not recompress them unless one is over 150 KB.
- Captions should describe what the page shows (for example "Homepage hero"), not claim results. Do not claim authorship of blog article text: the guides are written by the LA Coach USA team; my work was the blog design, structure and internal linking.
- Do not add any other `<img>` tags for files that don't exist.

Make the page responsive down to mobile and keep keyboard focus visible. Check heading order (one H1, H2 per section).

## Step 2: Update the homepage teaser and crawl-strip in `front-page.php`

Find the case-card teaser and the crawl-strip stats (they still hold the old LA Coach figures; grep for them and list every old number you replace). Replace with:

- Case-card title: `LA Coach USA: a full-site redesign` and one-sentence blurb: `A new design, page system and lead tracking for a Los Angeles bus charter operator. 1,038 lead actions in two months, 65% from Google organic.`
- Case-card stats (3): `1,038` lead actions, `65%` from Google organic, `3,103` sessions. Label them `12 Sep to 11 Nov 2026`.
- Crawl-strip stats: use the same verified figures only (lead actions 1,038; organic share of lead actions 65%; sessions 3,103; organic share of sessions 45%). Keep the strip to the number of tiles it has now.
- The teaser links to the case-study page via `get_page_by_path( 'case-study' )` as it does now. Keep it thin (do not copy the full case study onto the homepage).

## Step 3: Regenerate the OG share image

Create `images/victor-muhia-og-image.svg` (1200x630) in the existing design: navy background, teal accent, Space Grotesk heading, IBM Plex Mono for data. Content: `victormuhia.co.ke`, `SEO specialist and WordPress developer, Nairobi`, and one proof line `LA Coach USA: 1,038 lead actions in two months, 65% from Google organic`. Keep text inside a 1200x630 safe area (at least 60px margin). Then export a compressed JPG at 1200x630 under 150 KB (one-off conversion, for example `npx sharp-cli` or a Playwright screenshot, run outside the theme folder so nothing is added to the repo). Save as `images/victor-muhia-og-image.jpg`. Tell me the file paths and sizes. I will upload the JPG in Yoast myself.

## Step 4: Yoast fields for the case-study page

Use WP-CLI from the Local Site Shell (not the wp-admin UI). First find the page ID with `wp post list --post_type=page --name=case-study --fields=ID,post_name`. Show me the commands before running them. Then set:

- `_yoast_wpseo_title`: `LA Coach USA WordPress & SEO Case Study | Victor Muhia`
- `_yoast_wpseo_metadesc`: `How I rebuilt lacoachusa.com in Elementor Pro and tracked 1,038 lead actions in two months, 65% of them from Google organic search.`
- `_yoast_wpseo_focuskw`: `WordPress and SEO case study`
- `_yoast_wpseo_opengraph-title` and `_yoast_wpseo_twitter-title`: same as the SEO title.
- `_yoast_wpseo_opengraph-description` and `_yoast_wpseo_twitter-description`: same as the meta description.
- Leave the OG image field empty for now (I will upload the new JPG in wp-admin, then it will pick it up).

Check the title is 60 characters or fewer and the description is 155 characters or fewer; if either is over, shorten it and tell me. Then set the Services page Yoast fields too if they are empty (list them first and ask me before writing anything for it). Reminder: leave "Discourage search engines" checked until launch.

## Step 5: Verify

- Run `php -l` on every PHP file you changed.
- Load `victor-portfolio.local/case-study/` and the homepage and check there are no PHP warnings, the guarded `[CONFIRM]` blocks are hidden, and every number matches this prompt exactly.
- Grep the theme for `victormuhia.com`, the old LA Coach figures, and any GTM/GA4 ID patterns (`GTM-`, `G-`) and report what you find.
- Update `CLAUDE.md`: in "Site structure" change the Case Study row to describe the new full-site redesign structure and the confirmation constants; in "Not done yet" add: confirm hreflang is live, get LA Coach USA permission to publish figures, add case-study screenshots to `/images/case-study/`, upload the new OG image in Yoast.

Finish with a short summary: files changed, old numbers removed, anything still needing my input.
