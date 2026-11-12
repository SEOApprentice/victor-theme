<?php
/* Template Name: Services */
get_header();
?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="wrap">
      <span class="eyebrow">victormuhia.co.ke / services</span>
      <h1>SEO &amp; WordPress Development Services</h1>
      <p class="lead">I work with businesses in Nairobi and beyond that want more organic traffic and a website that doesn't hold them back — technical SEO audits, keyword strategy, and custom WordPress builds, handled by one person end-to-end.</p>
    </div>
  </section>

  <!-- SERVICE 01 -->
  <section id="service-seo">
    <div class="wrap">
      <div class="service-detail">
        <div class="service-detail-head">
          <span class="service-num">01 / SEO</span>
          <h2>Technical &amp; On-Page SEO</h2>
          <p class="desc">Most sites don't lose rankings from one big mistake — it's a stack of small technical and content issues compounding over time. I run a full audit to find them, then fix the ones actually holding you back, in priority order.</p>
        </div>
        <div class="service-detail-grid">
          <div class="service-detail-col">
            <h3>What's included</h3>
            <ul>
              <li>Full technical SEO audit — crawl errors, indexation, site architecture, mobile usability</li>
              <li>Keyword research &amp; content mapping to search intent</li>
              <li>On-page optimization — titles, meta descriptions, headings, internal linking, schema markup</li>
              <li>Ethical link building through outreach and link-worthy content</li>
              <li>Ongoing GA4 &amp; Looker Studio performance reporting</li>
            </ul>
          </div>
          <div class="service-detail-col">
            <h3>Good fit if you</h3>
            <ul>
              <li>Have a website already, but organic traffic is flat or declining</li>
              <li>Don't know why certain pages aren't ranking</li>
              <li>Want a clear, prioritized action plan instead of a generic checklist</li>
              <li>Need regular reporting you can actually understand</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 02 -->
  <section id="service-wordpress">
    <div class="wrap">
      <div class="service-detail">
        <div class="service-detail-head">
          <span class="service-num">02 / DEVELOPMENT</span>
          <h2>WordPress Development</h2>
          <p class="desc">A site that looks good but loads slowly or isn't built with search in mind will always underperform. I build custom WordPress themes with speed and SEO baked into the foundation, not bolted on after launch.</p>
        </div>
        <div class="service-detail-grid">
          <div class="service-detail-col">
            <h3>What's included</h3>
            <ul>
              <li>Custom theme design &amp; development — no bloated page-builder templates</li>
              <li>Performance optimization — caching, image compression, CDN integration</li>
              <li>Plugin setup &amp; configuration: Yoast/Rank Math, WP Rocket, ACF</li>
              <li>Structured data &amp; schema implementation</li>
              <li>Ongoing maintenance &amp; support after launch</li>
            </ul>
          </div>
          <div class="service-detail-col">
            <h3>Good fit if you</h3>
            <ul>
              <li>Need a new site built, or an existing one rebuilt properly</li>
              <li>Are frustrated with a slow-loading current site</li>
              <li>Want SEO considered from the first line of code, not after</li>
              <li>Want a site that stays easy to manage after handoff</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">victormuhia.co.ke / services / process</span>
        <h2>How an engagement works</h2>
        <p>Same process whether it's an SEO engagement, a build, or both.</p>
      </div>
      <div class="process-steps">
        <div class="process-step">
          <span class="process-num">01</span>
          <h3>Audit</h3>
          <p>I review your current site and search performance, and flag what's actually worth fixing first.</p>
        </div>
        <div class="process-step">
          <span class="process-num">02</span>
          <h3>Strategy</h3>
          <p>A prioritized plan — technical fixes, keyword targets, or build scope — before any work starts.</p>
        </div>
        <div class="process-step">
          <span class="process-num">03</span>
          <h3>Execution</h3>
          <p>The actual audits, optimization, or development work, with regular check-ins along the way.</p>
        </div>
        <div class="process-step">
          <span class="process-num">04</span>
          <h3>Report &amp; Handoff</h3>
          <p>Clear reporting on what changed and why — plus a site or strategy you can keep running independently.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <?php
  // Single source of truth for both the visible FAQ and its FAQPage schema (victor_theme_faq_schema
  // below) — keep them driven from this one array so they can never drift out of sync.
  $victor_faqs = array(
    array(
      'q' => 'How long does an SEO engagement take to show results?',
      'a' => 'Technical fixes can show up in Search Console within weeks, but meaningful organic traffic growth typically takes 3–6 months, since search engines need time to re-crawl and re-rank changed pages.',
    ),
    array(
      'q' => 'Do you only work with WordPress sites?',
      'a' => 'For development, yes — WordPress is my focus. For SEO audits and strategy, I can work with most platforms, though implementation is fastest on WordPress since I can make the fixes directly.',
    ),
    array(
      'q' => 'Can you just do the SEO audit without ongoing work?',
      'a' => 'Yes — a one-time technical audit with a prioritized action plan is a common starting point, especially if your team can implement fixes internally.',
    ),
    array(
      'q' => 'Do you work with businesses outside Kenya?',
      'a' => 'Yes, remotely — my current work includes clients in the US alongside local Nairobi-based engagements.',
    ),
  );
  ?>
  <section id="faq">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">victormuhia.co.ke / services / faq</span>
        <h2>Common questions</h2>
      </div>
      <div class="faq-list">
        <?php foreach ( $victor_faqs as $faq ) : ?>
        <details class="faq-item">
          <summary><?php echo esc_html( $faq['q'] ); ?></summary>
          <p><?php echo esc_html( $faq['a'] ); ?></p>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php if ( function_exists( 'victor_theme_faq_schema' ) ) : ?>
    <?php victor_theme_faq_schema( $victor_faqs ); ?>
  <?php endif; ?>

  <!-- CTA BAND -->
  <section class="cta-band">
    <div class="wrap cta-band-inner">
      <div>
        <h2>Not sure where to start?</h2>
        <p>A free audit call is the fastest way to find out what's actually worth fixing on your site.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary">Book a free audit call</a>
    </div>
  </section>

<?php get_footer(); ?>
