<?php
/* Template Name: Case Study */
get_header();
?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="wrap">
      <span class="eyebrow">victormuhia.co.ke / case-study</span>
      <h1>LA Coach USA: a full-site redesign, rebuilt for search and for leads</h1>
      <p class="lead">I redesigned and rebuilt lacoachusa.com end to end in Elementor Pro and set up lead tracking. In the two months to 11 November 2026 the site recorded 1,038 lead actions, 671 of them from Google organic search.</p>
    </div>
  </section>

  <!-- BRIEF AND APPROACH -->
  <section id="cs-overview">
    <div class="wrap">
      <div class="section-head">
        <h2>Brief and approach</h2>
        <p>LA Coach USA is a Los Angeles charter bus and group-tour operator selling to visitors who mostly plan trips online. I took on the whole website, not a single page: a new visual identity, new page templates for every section, a multilingual structure and a measurement layer that shows which pages produce enquiries.</p>
      </div>
      <ul class="strategy-list">
        <li><b>Design the system first:</b> a navy, blue and gold palette with Poppins and Inter, applied the same way on every page.</li>
        <li><b>Build for search:</b> destination pages and blog guides built around the trips people search for, with FAQ structured data and clean internal linking.</li>
        <li><b>Track what matters:</b> chat taps, WhatsApp, forms, phone and email clicks, captured as separate events.</li>
      </ul>
    </div>
  </section>

  <!-- WHAT I BUILT -->
  <section id="cs-challenge">
    <div class="wrap">
      <div class="section-head">
        <h2>What I built</h2>
      </div>
      <ul class="strategy-list">
        <li><b>Design system:</b> one set of buttons, cards and spacing across the site.</li>
        <li><b>Page templates:</b> every destination page follows the same four-section pattern, built with HTML widgets in Elementor Pro on Hello Elementor to keep markup light.</li>
        <li><b>Blog:</b> trip-planning guides (Los Angeles to Sequoia, Los Angeles to Yosemite, getting around LA without a car), each linking to the relevant tour pages.</li>
        <li><b>Forms and chat:</b> JotForm and HubSpot forms plus a live chat widget.</li>
        <li><b>FAQ markup:</b> FAQ sections carry JSON-LD.</li>
        <?php if ( defined( 'VICTOR_CASE_CONFIRMED_HREFLANG' ) && VICTOR_CASE_CONFIRMED_HREFLANG ) : ?>
        <li><b>Multilingual structure:</b> WordPress Multisite with Spanish and Japanese subdomains and hreflang tags (en, es, ja, x-default).</li>
        <?php endif; ?>
      </ul>

      <figure class="case-figure">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/case-study/home-hero.jpg' ); ?>" width="1280" height="597" alt="LA Coach USA homepage hero with navigation, headline and Book now button" style="max-width:100%;height:auto;">
        <figcaption>Homepage hero</figcaption>
      </figure>

      <figure class="case-figure">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/case-study/home-destinations.jpg' ); ?>" width="1280" height="597" loading="lazy" alt="Destination cards on the LA Coach USA homepage" style="max-width:100%;height:auto;">
        <figcaption>Homepage destination cards</figcaption>
      </figure>

      <figure class="case-figure">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/case-study/destination-joshua-tree.jpg' ); ?>" width="1280" height="597" loading="lazy" alt="Joshua Tree destination page with breadcrumb, headline and introduction" style="max-width:100%;height:auto;">
        <figcaption>Destination page</figcaption>
      </figure>

      <figure class="case-figure">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/case-study/blog-sequoia-guide.jpg' ); ?>" width="1280" height="597" loading="lazy" alt="Los Angeles to Sequoia National Park travel guide, blog post header" style="max-width:100%;height:auto;">
        <figcaption>Blog guide header (written by the LA Coach USA team; my work was the blog design, structure and internal linking)</figcaption>
      </figure>
    </div>
  </section>

  <!-- MEASUREMENT -->
  <section id="cs-strategy">
    <div class="wrap">
      <div class="section-head">
        <h2>Measurement</h2>
        <p>I set up Google Tag Manager with 16 tags, 13 triggers and 8 variables, sending data to one GA4 property.</p>
      </div>
      <ul class="strategy-list">
        <li><b>Delayed loading:</b> analytics fires after the visitor interacts or a timer runs out, keeping it off the critical rendering path.</li>
        <li><b>Lead events:</b> live chat, WhatsApp, form including thank-you page confirmation, phone, email, Messenger, Instagram, button clicks, each its own event.</li>
        <li><b>Engagement events:</b> scroll depth, time on page, multi-page session.</li>
        <?php if ( defined( 'VICTOR_CASE_CONFIRMED_HREFLANG' ) && VICTOR_CASE_CONFIRMED_HREFLANG ) : ?>
        <li><b>Site-language variable</b> on events.</li>
        <?php endif; ?>
        <li><b>Reporting:</b> a Looker Studio dashboard for reporting.</li>
      </ul>
    </div>
  </section>

  <!-- RESULTS -->
  <section id="cs-results">
    <div class="wrap">
      <div class="section-head">
        <h2>Results: two-month snapshot</h2>
        <p class="stat-caption">GA4 data, 12 September to 11 November 2026 (61 days).</p>
      </div>

      <div class="case-table-wrap">
        <table class="case-table">
          <caption class="screen-reader-text">Headline metrics</caption>
          <thead>
            <tr><th scope="col">Metric</th><th scope="col">Value</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">Active users</th><td>about 2,200</td></tr>
            <tr><th scope="row">Sessions</th><td>3,103</td></tr>
            <tr><th scope="row">New users</th><td>99% of users</td></tr>
            <tr><th scope="row">Engaged users</th><td>91%</td></tr>
            <tr><th scope="row">Average engagement time</th><td>1 min 1 sec</td></tr>
            <tr><th scope="row">Lead actions, total</th><td>1,038</td></tr>
            <tr><th scope="row">Live chat taps</th><td>985, from 865 users</td></tr>
            <tr><th scope="row">WhatsApp taps</th><td>25</td></tr>
            <tr><th scope="row">Email clicks</th><td>17</td></tr>
            <tr><th scope="row">Phone clicks</th><td>7</td></tr>
            <tr><th scope="row">Form submissions</th><td>4</td></tr>
          </tbody>
        </table>
      </div>

      <div class="case-table-wrap">
        <table class="case-table">
          <caption class="screen-reader-text">Traffic sources</caption>
          <thead>
            <tr><th scope="col">Traffic source</th><th scope="col">Sessions</th><th scope="col">Lead actions</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">Google organic</th><td>1,398</td><td>671</td></tr>
            <tr><th scope="row">Direct</th><td>1,048</td><td>153</td></tr>
            <tr><th scope="row">chatgpt.com</th><td>198</td><td>59</td></tr>
            <tr><th scope="row">Google referral</th><td>114</td><td>25</td></tr>
            <tr><th scope="row">Bing organic</th><td>96</td><td>30</td></tr>
            <tr><th scope="row">DuckDuckGo organic</th><td>33</td><td>18</td></tr>
            <tr><th scope="row">Yahoo organic</th><td>39</td><td>15</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- WHAT THE DATA SHOWS -->
  <section id="cs-next">
    <div class="wrap">
      <div class="section-head">
        <h2>What the data shows</h2>
      </div>
      <ul class="strategy-list">
        <li><b>Search drives enquiries:</b> Google organic brought 45% of sessions (1,398 of 3,103) and 65% of lead actions (671 of 1,038).</li>
        <li><b>Blog guides earn their place:</b> the Los Angeles to Sequoia guide alone brought 224 sessions and 99 lead actions; the Yosemite guides and the "getting around LA without a car" post added 83, 82 and 77. The homepage was the top landing page with 560 sessions and 243 lead actions.</li>
        <li><b>Visitors reach for chat first:</b> 865 users tapped live chat, about 39% of all visitors.</li>
        <li><b>AI assistants send real traffic:</b> chatgpt.com delivered 198 sessions and 59 lead actions, and Gemini and Copilot added 6 more.</li>
        <li><b>Service pages are being found:</b> the Sprinter van and charter bus service pages each drew over 100 page views.</li>
        <li><b>Audience:</b> 1,393 users on desktop and 791 on mobile.</li>
      </ul>

      <p class="case-note">Lead actions are taps and clicks, not confirmed bookings, and chat taps are 95% of them (985 of 1,038).
      <?php if ( defined( 'VICTOR_CASE_CONFIRMED_PERMISSION' ) && VICTOR_CASE_CONFIRMED_PERMISSION ) : ?>
        Figures are shared with LA Coach USA's permission.
      <?php endif; ?>
      </p>
    </div>
  </section>

  <!-- STACK -->
  <section id="cs-stack">
    <div class="wrap">
      <div class="section-head">
        <h2>Stack</h2>
        <p>WordPress Multisite, Hello Elementor, Elementor Pro, custom HTML/CSS widgets, JotForm, HubSpot, Google Tag Manager, GA4, Looker Studio.</p>
      </div>
    </div>
  </section>

  <!-- CTA BAND -->
  <section class="cta-band">
    <div class="wrap cta-band-inner">
      <div>
        <h2>Want results like this on your site?</h2>
        <p>Start with a free audit call — I'll tell you honestly what's worth fixing first.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">Book a free audit call</a>
    </div>
  </section>

<?php get_footer(); ?>
