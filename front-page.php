<?php get_header(); ?>

  <!-- HERO -->
  <section class="hero">
    <div class="wrap hero-grid">
      <div>
        <span class="eyebrow">victormuhia.co.ke / home</span>
        <h1>Ranking businesses to <span class="accent">position&nbsp;#1</span>,<br>one crawl at a time.</h1>
        <p class="lead">I'm Victor — an SEO specialist and WordPress developer based in Nairobi, Kenya. I run technical SEO audits, build custom WordPress sites optimized for speed, and turn keyword research into measurable organic growth for businesses in Kenya and beyond.</p>
        <div class="hero-cta">
          <a href="#contact" class="btn btn-primary">Book a free audit call</a>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'case-study' ) ) ); ?>" class="btn btn-ghost">View case study</a>
        </div>
      </div>

      <div class="serp-mock">
        <div class="browser-bar">
          <div class="browser-dots"><span></span><span></span><span></span></div>
          <div class="search-field">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"><circle cx="5.5" cy="5.5" r="4.5" stroke="#5B6472" stroke-width="1.3"/><path d="M9 9L12 12" stroke="#5B6472" stroke-width="1.3" stroke-linecap="round"/></svg>
            <span>wordpress developer + seo specialist nairobi<span class="type-cursor"></span></span>
          </div>
        </div>
        <div class="serp-result">
          <span class="rank-badge"><span class="star">&#9733;</span> Organic Result &middot; Position #1</span>
          <div class="serp-breadcrumb">victormuhia.co.ke &rsaquo; services</div>
          <div class="serp-title">Victor Muhia — SEO Specialist &amp; WordPress Developer</div>
          <div class="serp-desc">Technical SEO audits, keyword strategy, and custom WordPress builds — for businesses that want organic traffic they don't have to pay for, twice.</div>
          <div class="sitelinks">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>">Services</a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'case-study' ) ) ); ?>">Case Studies</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CRAWL STRIP -->
  <div class="crawl-strip">
    <div class="wrap crawl-inner">
      <span class="chip">LEAD_ACTIONS&nbsp;<b>1,038</b></span>
      <span class="chip">LEADS_FROM_ORGANIC&nbsp;<b class="ok">65%</b></span>
      <span class="chip">SESSIONS&nbsp;<b>3,103</b></span>
      <span class="chip">SESSIONS_FROM_ORGANIC&nbsp;<b class="ok">45%</b></span>
      <span class="chip">ACTIVE_USERS&nbsp;<b>~2,200</b></span>
      <span class="chip">LIVE_CHAT_TAPS&nbsp;<b>985</b></span>
    </div>
  </div>

  <!-- SERVICES (teaser) -->
  <section id="services">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">victormuhia.co.ke / services</span>
        <h2>Two disciplines. One goal: more of the right traffic.</h2>
        <p>SEO without a fast, well-built WordPress site stalls. A beautiful site with no search strategy stays invisible. I handle both, so nothing gets lost in the handoff.</p>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <span class="service-num">01 / SEO</span>
          <h3>Technical &amp; On-Page SEO</h3>
          <p class="desc">Technical audits, keyword research, and on-page optimization that turns into real ranking movement.</p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) . '#service-seo' ); ?>" class="post-card-readmore">Learn more &rarr;</a>
        </div>
        <div class="service-card">
          <span class="service-num">02 / DEVELOPMENT</span>
          <h3>WordPress Development</h3>
          <p class="desc">Custom-built WordPress sites designed to load fast, rank well, and stay easy to manage.</p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) . '#service-wordpress' ); ?>" class="post-card-readmore">Learn more &rarr;</a>
        </div>
      </div>
      <div style="text-align:center; margin-top: 36px;">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>" class="btn btn-ghost">View all services</a>
      </div>
    </div>
  </section>

  <!-- WORK / CASE STUDY (teaser) -->
  <section id="work">
    <div class="wrap">
      <div class="section-head">
        <span class="eyebrow">victormuhia.co.ke / work</span>
        <h2>Recent work</h2>
        <p>A look at one full-scope engagement — from technical foundation to measurable organic growth.</p>
      </div>
      <div class="case-card">
        <div>
          <span class="eyebrow">Case Study &middot; LA Coach USA</span>
          <h3>LA Coach USA: a full-site redesign</h3>
          <p>A new design, page system and lead tracking for a Los Angeles bus charter operator. 1,038 lead actions in two months, 65% from Google organic.</p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'case-study' ) ) ); ?>" class="btn btn-primary">Read the full case study</a>
        </div>
        <div class="case-stats">
          <div class="stat-box"><div class="val">1,038</div><div class="lab">LEAD ACTIONS</div></div>
          <div class="stat-box"><div class="val">65%</div><div class="lab">FROM GOOGLE ORGANIC</div></div>
          <div class="stat-box"><div class="val">3,103</div><div class="lab">SESSIONS</div></div>
        </div>
        <p class="case-stats-caption">12 Sep to 11 Nov 2026</p>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="wrap about-grid">
      <div class="avatar">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/victor-photo.jpg' ); ?>" alt="Victor Muhia, SEO specialist and WordPress developer based in Nairobi, Kenya" width="128" height="128" loading="lazy">
      </div>
      <div>
        <span class="eyebrow">victormuhia.co.ke / about</span>
        <h2 style="margin-bottom:18px; font-size: clamp(24px,3vw,30px);">A bit about how I work</h2>
        <p>I'm an SEO specialist and WordPress developer based in Nairobi, Kenya, with experience running technical SEO audits, keyword research, and WordPress performance optimization for teams across Kenya and the US. I studied Information Technology at JKUAT, and since then I've turned underperforming websites into consistent organic traffic sources.</p>
        <p>I care about the handoff as much as the build — every site I ship comes with clear reporting, so you always know what's working and why.</p>
        <div class="tag-list">
          <span class="tag">Technical SEO</span>
          <span class="tag">WordPress</span>
          <span class="tag">GA4 / GSC</span>
          <span class="tag">SEMrush</span>
          <span class="tag">Looker Studio</span>
          <span class="tag">Yoast / Rank Math</span>
          <span class="tag">Schema Markup</span>
          <span class="tag">Content Strategy</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="wrap">
      <div class="contact-panel">
        <div class="contact-info">
          <span class="eyebrow">victormuhia.co.ke / contact</span>
          <h3>Request a free site audit</h3>
          <p>Tell me a bit about your site and what's not working. I'll reply with a short, honest read on where the biggest opportunities are — no obligation.</p>
          <div class="contact-detail">
            <a href="mailto:vmuhian@gmail.com">vmuhian@gmail.com</a>
            <a href="https://wa.me/254705991249" target="_blank" rel="noopener">+254 705 991 249</a>
            <a href="https://www.linkedin.com/in/victor-muhia-172747245" target="_blank" rel="noopener">linkedin.com/in/victor-muhia-172747245</a>
            <span>Nairobi, Kenya &middot; Remote-friendly</span>
          </div>
        </div>
        <form id="contactForm">
          <div class="field-row hp-field">
            <label for="website_url">Website URL</label>
            <input type="text" id="website_url" name="website_url" autocomplete="off" tabindex="-1">
          </div>
          <div class="two-col">
            <div class="field-row">
              <label for="name">Name</label>
              <input type="text" id="name" required placeholder="Your name">
            </div>
            <div class="field-row">
              <label for="email">Email</label>
              <input type="email" id="email" required placeholder="you@company.com">
            </div>
          </div>
          <div class="field-row">
            <label for="site">Website (optional)</label>
            <input type="text" id="site" placeholder="yourcompany.com">
          </div>
          <div class="field-row">
            <label for="interest">What are you interested in?</label>
            <select id="interest">
              <option value="SEO">SEO</option>
              <option value="WordPress Development">WordPress Development</option>
              <option value="Both">Both</option>
              <option value="Not sure yet" selected>Not sure yet</option>
            </select>
          </div>
          <div class="field-row">
            <label for="message">What are you looking to improve?</label>
            <textarea id="message" required placeholder="e.g. Our organic traffic has been flat for months and our site takes forever to load..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Send request</button>
          <p class="form-note">Your info is only used to reply to your request — never shared or sold.</p>
          <div id="formError" class="form-error"></div>
          <div id="confirm">Request received — I'll reply within one business day.</div>
        </form>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
